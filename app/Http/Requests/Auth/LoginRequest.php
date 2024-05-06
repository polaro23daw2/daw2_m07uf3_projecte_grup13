<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        try {            
        if (!Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());
        
            $errors = [];
            $user = User::where('email', $this->email)->first();
            if (!$user) {
                $errors['email'] = 'Usuari incorrecte';
                throw ValidationException::withMessages([
                    'database' => 'Usuari incorrecte!',
                ]);
            } elseif (!Hash::check($this->password, $user->password)) {
                $errors['password'] = 'Contrasenya incorrecta';
                throw ValidationException::withMessages([
                    'database' => 'Contrasenya incorrecte!',
                ]);
            }
        
            throw ValidationException::withMessages($errors);
        }
        } catch (\PDOException $e) {
            throw ValidationException::withMessages([
                'database' => 'Error de connexiÃ³ a la base de dades',
            ]);
        } catch (\Exception $e) {
            \Log::error($e);  // Log the full exception
        
            $errors = [];
            $user = User::where('email', $this->email)->first();
            if (!$user) {
                $errors['email'] = 'Usuari incorrecte';
                throw ValidationException::withMessages([
                    'database' => 'Usuari incorrecte!',
                ]);
            } elseif (!Hash::check($this->password, $user->password)) {
                $errors['password'] = 'Contrasenya incorrecta';
                throw ValidationException::withMessages([
                    'database' => 'Contrasenya incorrecte!',
                ]);
            }
        }
        

        RateLimiter::clear($this->throttleKey());
        
    }
    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('email')).'|'.$this->ip());
    }
}