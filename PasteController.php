<?php
 
class PasteController
{
    public function __construct()
    {
    }
 
    public function showPasteForm() 
    {
       echo "Hello, Sparky!";
    }
 
    public function addNewPaste()
    {
 
    }
 
    public function showPasteContents($uri)
    {
    }
 
    public function show404()
    {
    }
 
    public static function isValidPasteURI($uri)
    {
        // if starts with / 
        if(strpos($uri, "/") === 0)
        {
            $tmp = substr($uri, 1);
 
            if(is_numeric($tmp))
                return true;
        }
 
        return false;
    }
}
