<?php

namespace myframe\middleware;

class Auth
{
    public function handle()
    {
        if (!chekauth())
        {
            redirect('/register');
        }
    }
}