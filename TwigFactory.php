<?php
 
class TwigFactory
{
    public static function getTwig()
    {
        $loader = new Twig_Loader_Filesystem('views');
        return new Twig_Environment($loader, array('debug' => true, 
                                                    'autoescape' => true, 
                                                    'auto_reload' => true));
    }
}