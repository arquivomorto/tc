<?php

use PhpMyAdmin\MoTranslator\Loader;

if (!function_exists('__')) {
    function __($in, $print=true)
    {
        global $cfg,$ROOT;
        $loader = new Loader();
        $defaultLanguage=$cfg['defaultLanguage'];
        $loader->setlocale($defaultLanguage);
        $loader->textdomain('i18n');
        $loader->bindtextdomain('i18n', $ROOT. '/locale/');
        $translator = $loader->getTranslator();
        $out=$translator->gettext($in);
        if ($print) {
            print htmlentities($out);
        } else {
            return $out;
        }
    }
}
