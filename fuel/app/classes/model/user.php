<?php

class Model_User extends \Orm\Model
{
    protected static $_properties = array
    (
        'id',
        'username',
        'password',
        'email',
        'last_login',
        'profile_fields',
        'ctime',
        'mtime'
    );

    protected static $_table_name = 'users';
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

//    protected static $_has_one = array
//    (
//        'domain_user' => array
//        (
//            'key_from' => 'id',
//            'model_to' => 'Model_Domain_User',
//            'key_to' => 'user_id',
//            'cascade_save' => true,
//            'cascade_delete' => true
//        )
//    );

    public static function getUserObjectsById($uid)
    {
        $objData = NULL;
        try
        {
            $objData = \Cache::get('users.'.md5($uid));
        }
        catch (\CacheNotFoundException $e)
        {
            $objData = self::query()->where('id', '=', $uid)->get_one();

            if ($objData && !is_object($objData->profile_fields) && \Str::is_json($objData->profile_fields))
            {
                $objData->profile_fields = json_decode($objData->profile_fields);
            }
            \Cache::set('users.'.md5($uid), $objData, 3600);
        }
        return $objData;
    }
}
























