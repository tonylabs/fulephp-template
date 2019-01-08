<?php

class Model_User_Keys extends \Orm\Model
{
    protected static $_properties = array
    (
        'id',
        'user_id',
        'handle',
        'registration',
        'ctime',
        'mtime'
    );

    protected static $_table_name = 'user_keys';
    protected static $_connection = 'default';
    protected static $_primary_key = array('id');

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

    protected static $_belongs_to = array
    (
        'user' => array
        (
            'key_from' => 'user_id',
            'model_to' => 'Model_User',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => true
        )
    );

}
























