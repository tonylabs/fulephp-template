<?php
namespace Developer;

class Controller_Dashboard extends \Controller_Base
{
    public function before()
    {
        parent::before();
        return;
    }
    public function get_index()
    {
        $this->template->title = 'Developer';
        $this->template->content = \View::forge('dashboard/index');
    }
}