<?php

class Model_Inquiry extends \Orm\Model
{
    protected static $_properties = array
    (
        'id',
        'first_name',
        'last_name',
        'email',
        'country',
        'platform',
        'programming',
        'company',
        'contact',
        'remark',
        'ctime',
        'mtime'
    );

    protected static $_table_name = 'inquiry';
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
}
























