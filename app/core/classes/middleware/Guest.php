<?php

namespace myframe\middleware;

class Guest
{
    public function handle()
    {
        if (chekauth())
        {
            redirect('/');
        }
    }
}