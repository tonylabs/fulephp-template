<?php

class Model_Mailer extends \Orm\Model
{
    protected static $_properties = array
    (
        'id',
        'sent' => array
        (
            'default' => 0
        ),
        'read' => array
        (
            'default' => 0
        ),
        'module',
        'session',
        'from',
        'to',
        'subject',
        'content',
        'template',
        'priority' => array
        (
            'default' => 0
        ),
        'ctime',
        'mtime'
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

    protected static $_table_name = 'mailers';
    protected static $_primary_key = array('id');
    protected static $_connection = 'default';

    public static function queue($module, $from, $to, $subject, $content, $template, $priority = 0)
    {
        $objMailer = self::forge();
        $objMailer->module = $module;
        $objMailer->session = md5(time());
        $objMailer->from = $from;
        $objMailer->to = $to;
        $objMailer->subject = $subject;
        if ($content) $objMailer->content = $content;
        $objMailer->template = $template;
        $objMailer->priority = $priority;
        $objMailer->save();
    }
}