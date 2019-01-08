<?php

namespace Admin;

class Controller_Product extends \Controller_Auth
{
    public function before()
    {
        parent::before();
        return;
    }

    public function action_index()
    {
        $this->template->title = 'Product';
        $this->template->content = \View::forge('product/index');
        $this->template->content->sidebar = \View::forge('product/sidebar');
        $this->template->content->products = \Model_Product::query()->order_by('ctime', 'DESC')->get();
    }

    public function get_manage()
    {
        $this->template->title = 'Manage Product';
        $this->template->content = \View::forge('product/manage');

        $getId = \Input::get('id');
        if ($getId)
        {
            $getId = \Crypt::decode($getId);
            $objProduct = \Model_Product::find($getId);
            $this->template->title = $objProduct->name;
            $this->template->content->product = $objProduct;
        }
    }

    public function post_manage()
    {
        $getId = \Input::post('id');
        if ($getId) $getId = \Crypt::decode($getId);
        $getName = \Input::post('name');
        $getCode = \Input::post('code');
        $getContent = \Input::post('content');
        $getPromote = (int) \Input::post('promote');

        $objProduct = ($getId) ? \Model_Product::find($getId) : \Model_Product::forge();
        $objProduct->name = $getName;
        $objProduct->slug = \Inflector::friendly_title($getName, '-', true);
        $objProduct->code = $getCode;
        $objProduct->content = $getContent;
        $objProduct->promote = $getPromote;
        $objProduct->save();
        \Model_Product::purge();
        \Response::redirect(\Uri::create('admin/product/'));
    }

    public function action_delete()
    {
        $getId = \Input::get('id');
        if ($getId)
        {
            $getId = \Crypt::decode($getId);
            $objProduct = \Model_Product::query()->where('id', '=', $getId)->get_one();
            $objProduct->delete();
            \Response::redirect(\Uri::create('admin/product/'));
        }
    }
}