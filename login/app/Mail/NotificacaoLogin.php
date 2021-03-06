<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacaoLogin extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('email/notificacaoLogin')->with([
            'nome'=> $this->user->name,
            'email'=> $this->user->email,
            'data'=> now()->setTimezone('America/Sao_Paulo')->format('d-m-Y'),
            'hora'=> now()->setTimezone('America/Sao_Paulo')->format('H:i:s'),
        ])->attach(base_path() . '/resources/arquivo/exemplo.pdf');
    }
}
