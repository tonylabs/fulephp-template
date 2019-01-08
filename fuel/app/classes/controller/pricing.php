<?php

class Controller_Pricing extends \Controller_Base
{
    public function before()
    {
        parent::before();
        return;
    }

    public function get_index()
    {
        $this->template->title = __('pricing.title');
        $this->template->content = \View::forge('pricing/index');
    }
}