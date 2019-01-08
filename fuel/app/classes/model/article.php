<?php

class Model_Article extends \Orm\Model
{
    protected static $_properties = array
    (
        'id',
        'title',
        'slug',
        'content',
        'locale' => array
        (
            'default' => 'en_US'
        ),
        'publish' => array
        (
            'default' => 0
        ),
        'ctime',
        'mtime' => array
        (
            'default' => NULL
        )
    );

    protected static $_observers = array
    (
        'Orm\Observer_CreatedAt' => array
        (
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
            'property' => 'ctime',
            'overwrite' => false,
        ),
        'Orm\Observer_UpdatedAt' => array
        (
            'events' => array('before_update'),
            'mysql_timestamp' => false,
            'property' => 'mtime',
            'overwrite' => true,
        ),
    );

    protected static $_table_name = 'articles';
    protected static $_connection = 'default';
    protected static $_primary_key = array('id');

    protected static $_has_many = array
    (
        'article_categories' => array
        (
            'key_from' => 'id',
            'model_to' => 'Model_Article_Categories',
            'key_to' => 'article_id',
            'cascade_save' => true,
            'cascade_delete' => true
        )
    );

    protected static $_many_many = array
    (
        'categories' => array
        (
            'key_from' => 'id',
            'key_through_from' => 'article_id',
            'table_through' => 'article_categories',
            'key_through_to' => 'category_id',
            'model_to' => 'Model_Category',
            'key_to' => 'id',
            'cascade_save' => false,
            'cascade_delete' => false
        )
    );

    public static function getObjects()
    {
        try {
            $objData = \Cache::get('articles.objects');
        } catch (\CacheNotFoundException $e) {
            $objData = self::query()->order_by('id', 'DESC')->get();
            \Cache::set('articles.objects', $objData, 3600 * 24 * 7);
        }

        return $objData;
    }

    public static function getObjectsBySlug($slug, $locale = 'en_US')
    {
        try {
            $objData = \Cache::get('articles.'.$locale.'.'.$slug.'.objects');
        } catch (\CacheNotFoundException $e) {
            $objData = self::query()->where('slug', '=', $slug)->where('locale', '=', $locale)->related('categories')->get_one();
            \Cache::set('articles.'.$locale.'.'.$slug.'.objects', $objData, 3600 * 24 * 7);
        }
        return $objData;
    }

    public static function purge()
    {
        \Cache::delete_all('articles');
    }
}