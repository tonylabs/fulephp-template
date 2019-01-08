<?php

class Model_Article_Categories extends \Orm\Model
{
    protected static $_properties = array
    (
        'article_id',
        'category_id',
    );

    protected static $_table_name = 'article_categories';
    protected static $_primary_key = array('article_id', 'category_id');
    protected static $_connection = 'default';

    protected static $_belongs_to = array
    (
        'article' => array
        (
            'key_from' => 'article_id',
            'model_to' => 'Model_Article',
            'key_to' => 'id',
            'cascade_save' => false,
            'cascade_delete' => false
        ),
        'category' => array
        (
            'key_from' => 'category_id',
            'model_to' => 'Model_Category',
            'key_to' => 'id',
            'cascade_save' => false,
            'cascade_delete' => false
        )
    );
}