<?php

class Controller_Base extends \Fuel\Core\Controller_Template
{
    public $template = 'layout';
    public $locale = 'en_US';
    public $global_product = 'TONYLABS';

    public function before()
    {
        parent::before(); // Without this line, templating won't work!
        //\Cache::delete_all();

        $arrayLanguages = \Agent::languages();
        //\Debug::dump(\Uri::current());

        $getLang = \Input::get('lang');
        $getLang = (\Session::get('lang') && !$getLang) ? \Session::get('lang') : $getLang;
        if (!$getLang) $getLang = 'en';
        $arrayLocales = \Config::get('locales');
        $this->locale = $arrayLocales[$getLang];

        \Config::set('language', $getLang);
        \Session::set('lang', $getLang);
        \Config::set('locale', $this->locale);
        \Session::set('locale', $this->locale);
        \View::set_global('lang', $getLang, true);

        \Lang::load('lang');
        $this->template->nav = \View::forge('nav');
        $this->template->head = \View::forge('head');
        $this->template->footer = \View::forge('footer');

        $objUser = \Session::get('user');
        $this->template->nav->current_user = $objUser;

        \View::set_global('global_product', $this->global_product, false);

        return;
    }

    public function action_404()
    {
        $this->template->title = '404 Not Found';
        $this->template->nav = NULL;
        $this->template->footer = NULL;
        $this->template->content = \View::forge('404');
        $messages = array('Aw, crap!', 'Bloody Hell!', 'Uh Oh!', 'Nope, not here.', 'Huh?');
        $this->template->title = $messages[array_rand($messages)];
    }
}