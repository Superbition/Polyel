<?php

namespace App\Email;

use Polyel\Email\Email;

class PasswordResetEmail extends Email
{
    public string $name;

    public string $url;

    public function __construct(string $name, string $url)
    {
        $this->name = $name;
        $this->url = config('main.baseUrl') . $url;
    }

    public function setFromName()
    {
        return $this->name('Reset Your Password');
    }

    public function setSubject()
    {
        return $this->subject('Password reset request');
    }

    public function setMessage()
    {
        return $this->view('emails.PasswordResetEmail');
    }
}