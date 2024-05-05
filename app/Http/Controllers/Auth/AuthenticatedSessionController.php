<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Date;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        $currentTime = Date::now()->format('H:i:s');

        if (auth()->user()->tipus == 'cap_de_departament') {
            return redirect('dashboard');
        } elseif (auth()->user()->tipus == 'treballador') {
                $this->sendTelegramMessage(auth()->user()->name . " ha hecho login a las " . $currentTime);
                $this->sendMailLogin(auth()->user()->name, "ha hecho login", $currentTime);
            return redirect('dashboard-basic');
        } else {
            return auth()->logout();
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $currentTime = Date::now()->format('H:i:s');

        if (auth()->user() && auth()->user()->tipus == 'treballador') {
            $this->sendTelegramMessage(auth()->user()->name . " ha hecho logout a las " . $currentTime);
            $this->sendMailLogout(auth()->user()->name, "ha hecho logout", $currentTime);

        }

        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Send a message via Telegram
     */
    protected function sendTelegramMessage(string $message)
    {
        $telegram_token = '6444797650:AAHU09hG3ai7_ZY6CG-KYVOGZjMPIpHYIRQ';
        $admin_ids = [573292134];

        foreach ($admin_ids as $admin_id) {
            Http::post("https://api.telegram.org/bot" . $telegram_token . "/sendMessage", [
                'chat_id' => $admin_id,
                'text' => $message,
            ]);
        }
    }

    protected function sendMailLogin(string $name, string $currentTime)
    {
        $this->sendMail($name, "ha hecho login", "Login en TouristRent", $currentTime);
    }

    /**
     * Send an email notification for logout using PHPMailer.
     */
    protected function sendMailLogout(string $name, string $currentTime)
    {
        $this->sendMail($name, "ha hecho logout", "Logout en TouristRent", $currentTime);
    }

    /**
     * Generic method to send an email using PHPMailer.
     */
    protected function sendMail(string $name, string $action, string $subject, string $currentTime)
    {
        $mail = new PHPMailer(true);

        try {
            $currentTime = Date::now()->format('H:i:s');
            // Server settings
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'm07admphp@gmail.com'; // SMTP username
            $mail->Password = 'pwuy dsss yloj jfov'; // SMTP password
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom('m07admphp@gmail.com', 'TouristRent');
            $mail->addAddress('m07admphp@gmail.com', 'TouristRent');

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = "El usuario $name $action a las $currentTime.";
            $mail->AltBody = "El usuario $name $action a las $currentTime.";

            $mail->send();
        } catch (Exception $e) {
            // Handle errors (optional)
        }
    }
}
