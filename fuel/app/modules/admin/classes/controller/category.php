<?php

namespace Admin;

class Controller_Category extends \Controller_Auth
{
    public function before()
    {
        parent::before();
        return;
    }

    public function action_index()
    {
        $this->template->title = 'Categories';
        $this->template->content = \View::forge('category/index');
        $this->template->content->categories = \Model_Category::getObjects($this->locale);
    }

    public function get_manage()
    {
        $this->template->title = 'Manage Category';
        $this->template->content = \View::forge('category/manage');
        $this->template->content->categories = \Model_Category::getIdNameOptions();

        $getId = \Input::get('id');
        if ($getId)
        {
            $getId = \Crypt::decode($getId);
            $objCategory = \Model_Category::find($getId);
            $this->template->title = $objCategory->name;
            $this->template->content->category = $objCategory;
        }
    }

    public function post_manage()
    {
        $getId = \Input::post('id');
        if ($getId) $getId = \Crypt::decode($getId);
        $getName = \Input::post('name');
        $getSlug = \Input::post('slug');
        $getIcon = \Input::post('icon');

        $objCategory = ($getId) ? \Model_Category::find($getId) : \Model_Category::forge();
        $objCategory->name = $getName;
        $objCategory->icon = $getIcon;
        $objCategory->slug = ($getSlug) ? $getSlug : \Inflector::friendly_title($getName, '-', true);
        $objCategory->locale = $this->locale;
        $objCategory->save();

        \Model_Category::purge();
        \Response::redirect(\Uri::lang('admin/category/'));
    }

    public function action_delete()
    {
        $getId = \Input::get('id');
        if ($getId)
        {
            $getId = \Crypt::decode($getId);
            $objCategory = \Model_Category::query()->where('id', '=', $getId)->get_one();
            $objCategory->delete();

            \Response::redirect(\Uri::lang('admin/category/'));
        }
    }
}