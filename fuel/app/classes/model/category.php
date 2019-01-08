<?php

class Model_Category extends \Orm\Model
{
    protected static $_properties = array
    (
        'id',
        'name',
        'slug',
        'icon' => array
        (
            'default' => NULL
        ),
        'locale' => array
        (
            'default' => 'en_US'
        ),
        'visible' => array
        (
            'default' => 0
        )
    );

    protected static $_table_name = 'category';
    protected static $_connection = 'default';
    protected static $_primary_key = array('id');

    public static function getObjects($locale = 'en_US')
    {
        try {
            $objData = \Cache::get('categories.'.$locale.'.objects');
        } catch (\CacheNotFoundException $e) {
            $objData = self::query()->where('locale', '=', $locale)->where('visible', '=', 1)->order_by('id', 'DESC')->get();
            foreach ($objData as $data)
            {
                $data->articles = \Model_Article::query()->related('article_categories')->where('article_categories.category_id', '=', $data->id)->where('publish', '=', 1)->where('locale', '=', $locale)->order_by('mtime', 'DESC')->limit(10)->order_by('ctime', 'DESC')->get();
                $data->total_articles = \Model_Article_Categories::query()->where('category_id', '=', $data->id)->count();
            }
            \Cache::set('categories.'.$locale.'.objects', $objData, 3600 * 24 * 7);
        }
        return $objData;
    }

    public static function getObjectsBySlug($slug, $locale = 'en_US')
    {
        try {
            $objData = \Cache::get('categories.'.$locale.'.'.$slug.'.objects');
        } catch (\CacheNotFoundException $e) {
            $objData = self::query()->where('slug', '=', $slug)->where('locale', '=', $locale)->get_one();
            $objData->articles = \Model_Article::query()->related('article_categories')->where('article_categories.category_id', '=', $objData->id)->where('publish', '=', 1)->where('locale', '=', $locale)->order_by('mtime', 'DESC')->limit(10)->order_by('ctime', 'DESC')->get();
            $objData->total_articles = \Model_Article_Categories::query()->where('category_id', '=', $objData->id)->count();
            \Cache::set('categories.'.$locale.'.'.$slug.'.objects', $objData, 3600 * 24 * 7);
        }
        return $objData;
    }

    public static function getIdNameOptions($locale = 'en_US')
    {
        $arrayData = NULL;
        try
        {
            $arrayData = \Cache::get('categories.'.$locale.'.options');
        }
        catch (\CacheNotFoundException $e)
        {
            $arrayData = \DB::select('id', 'name')->from('category')->where('locale', '=', $locale)->order_by('name', 'ASC')->execute()->as_array('id', 'name');
            \Cache::set('categories.'.$locale.'.options', $arrayData, 3600 * 24 * 7);
        }
        return $arrayData;
    }

    public static function purge()
    {
        \Cache::delete_all('categories');
    }
}