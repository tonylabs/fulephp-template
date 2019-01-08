<?php

class Controller_Product extends \Controller_Base
{
    public function before()
    {
        parent::before();
        return;
    }

    public function get_index()
    {
        $this->template->title = 'Product';
        $this->template->content = \View::forge('product/index');
    }
}