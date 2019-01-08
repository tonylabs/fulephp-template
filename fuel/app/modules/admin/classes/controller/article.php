<?php

namespace Admin;

class Controller_Article extends \Controller_Auth
{
    public function before()
    {
        parent::before();
        return;
    }

    public function action_index()
    {
        $this->template->title = 'Article';
        $this->template->content = \View::forge('article/index');
        $this->template->content->sidebar = \View::forge('article/sidebar');
        $objArticles = \Model_Article::query()->where('locale', '=', $this->locale)->order_by('ctime', 'DESC')->get();
        $this->template->content->articles = $objArticles;
    }

    public function get_manage()
    {
        $this->template->title = 'Manage Article';
        $this->template->content = \View::forge('article/manage');
        $this->template->content->categories = \Model_Category::getIdNameOptions($this->locale);

        $getId = \Input::get('id');
        if ($getId)
        {
            $getId = \Crypt::decode($getId);
            $objArticle = \Model_Article::query()->where('id', '=', $getId)->related('article_categories')->get_one();
            $objArticle->categories = array();
            foreach ($objArticle->article_categories as $category)
            {
                $objArticle->categories[] = $category->category_id;
            }
            $this->template->title = $objArticle->title;
            $this->template->content->article = $objArticle;
        }
    }

    public function post_manage()
    {
        $getId = \Input::post('id');
        if ($getId) $getId = \Crypt::decode($getId);
        $getTitle = \Input::post('title');
        $getSlug = \Input::post('slug');
        $getContent = \Input::post('content');
        $getPublish = (int) \Input::post('publish');
        $getCategoryIds = \Input::post('category');

        $objArticle = ($getId) ? \Model_Article::find($getId) : \Model_Article::forge();
        $objArticle->title = $getTitle;
        $objArticle->slug = (!empty($getSlug)) ? $getSlug : \Inflector::friendly_title($getTitle, '-', true);
        $objArticle->content = $getContent;
        $objArticle->publish = $getPublish;
        $objArticle->locale = $this->locale;
        //unset($objArticle->article_categories);
        $objArticle->save();

        if (!empty($getCategoryIds))
        {
            foreach ($getCategoryIds as $categoryId)
            {
                $objArticleCategory = \Model_Article_Categories::forge();
                $objArticleCategory->article_id = (int) $objArticle->id;
                $objArticleCategory->category_id = (int) $categoryId;
                $objArticleCategory->save();
            }
        }

        \Model_Article::purge();
        \Model_Category::purge();
        \Response::redirect(\Uri::create('admin/article/'));
    }

    public function action_delete()
    {
        $getId = \Input::get('id');
        if ($getId)
        {
            $getId = \Crypt::decode($getId);
            $objArticle = \Model_Article::query()->where('id', '=', $getId)->related('article_categories')->get_one();
            //unset($objArticle->post_categories);
            $objArticle->delete();

            \Response::redirect(\Uri::create('admin/article/'));
        }
    }
}