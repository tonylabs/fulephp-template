<?php

class Uri extends Fuel\Core\Uri
{
    public function __construct($uri = NULL)
    {
        parent::__construct($uri);
        $this->detect_language();
    }

    public function detect_language()
    {
        if (!count($this->segments)) return false;

        $stringLang = $this->segments[0];
        $arrayLocales = \Config::get('locales');

        if (array_key_exists($stringLang, $arrayLocales)) {
            array_shift($this->segments);
            $this->uri = implode('/', $this->segments);
            \Config::set('language', $stringLang);
            \Session::set('lang', $stringLang);
            \Config::set('locale', $arrayLocales[$stringLang]);
            \Session::set('locale', $arrayLocales[$stringLang]);
        }
    }

    public static function lang($uri = null, $variables = array(), $get_variables = array(), $secure = null)
    {
        $lang = \Config::get('language');
        if (!empty($uri) && $uri != '/') {
            $lang .= '/';
        }
        return \Uri::create($lang . $uri, $variables, $get_variables, $secure);
    }
}