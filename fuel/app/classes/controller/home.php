<?php

class Controller_Home extends \Controller_Base
{
    public function before()
    {
        parent::before();
        return;
    }
    public function get_index()
    {
        $this->template->title = 'Home';
        $this->template->content = \View::forge('home/index');
        $this->template->content->block_subscription = \View::forge('block/subscription');
    }
    public function get_case()
    {
        $getArticleSlug = \Uri::segment(2);

        if (!$getArticleSlug)
        {
            $this->template->title = __('case.title');
            $this->template->content = \View::forge('pages/case');
            $objCategory = \Model_Category::getObjectsBySlug('case', $this->locale);
            $this->template->content->set_safe('articles', $objCategory->articles);
        }
        else
        {
            $objArticle = \Model_Article::getObjectsBySlug($getArticleSlug, $this->locale);
            $this->template->title = $objArticle->title;
            $this->template->content = \View::forge('pages/article');
            $this->template->content->set_safe('article', $objArticle);
            $this->template->content->block_subscription = \View::forge('block/subscription');
        }
    }
    public function get_about()
    {
        $this->template->title = __('about.title');
        $this->template->content = \View::forge('pages/about');
        $objArticle = \Model_Article::getObjectsBySlug('about', $this->locale);
        $this->template->content->set_safe('article', $objArticle);
        $this->template->content->block_subscription = \View::forge('block/subscription');
    }
}