<?php

class Controller_Support extends \Controller_Base
{
    public function before()
    {
        parent::before();
        return;
    }
    public function action_index()
    {
        $getCategorySlug = \Uri::segment(2);
        $getArticleSlug = \Uri::segment(3);

        if ($getCategorySlug && !$getArticleSlug) //@Read specific category
        {
            $objCategory = \Model_Category::getObjectsBySlug($getCategorySlug, $this->locale);

            $this->template->title = $objCategory->name;
            $this->template->content = \View::forge('support/category');

            $arrayArticles = \DB::select('articles.title', array('articles.slug', 'article_slug'), 'articles.ctime', 'articles.mtime', array('category.slug', 'category_slug'))->from('articles')->join('article_categories', 'LEFT')->on('articles.id', '=', 'article_categories.article_id')->join('category', 'LEFT')->on('article_categories.category_id', '=', 'category.id')->where('article_categories.category_id', '=', $objCategory->id)->as_object()->execute()->as_array();

            $this->template->content->articles = $arrayArticles;
            $this->template->content->category = $objCategory;
            $this->template->content->categories = \Model_Category::getObjects($this->locale);
        }
        else if ($getCategorySlug && $getArticleSlug) //@Read specific article
        {
            $objCategory = \Model_Category::getObjectsBySlug($getCategorySlug, $this->locale);
            $objArticle = \Model_Article::getObjectsBySlug($getArticleSlug);
            $this->template->title = $objArticle->title;
            $this->template->content = \View::forge('support/article');
            $this->template->content->set_safe('article', $objArticle);
            $this->template->content->category = $objCategory;
            $this->template->content->categories = \Model_Category::getObjects($this->locale);
        }
        else
        {
            $this->template->title = __('support.title');
            $this->template->content = \View::forge('support/index');
            $this->template->content->categories = \Model_Category::getObjects($this->locale);
        }
    }
    public function action_servers()
    {
        $this->template->title = 'Server';
        $this->template->content = \View::forge('support/server');
    }
    public function get_integration()
    {
        $this->template->title = 'Server';
        $this->template->content = \View::forge('support/integration');
    }
}