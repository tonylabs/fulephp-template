<?php

namespace Admin;

class Controller_Dashboard extends \Controller_Auth
{
    public function before()
    {
        parent::before();
        return;
    }

    public function action_index()
    {
        $this->template->title = 'Dashboard';
        $this->template->content = \View::forge('dashboard');
    }
}