<?php

namespace App\Email;

use Polyel\Email\Email;

class VerificationEmail extends Email
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
        return $this->name('Email Verification');
    }

    public function setSubject()
    {
        return $this->subject('Please confirm your email');
    }

    public function setMessage()
    {
        return $this->view('emails.EmailVerification');
    }
}