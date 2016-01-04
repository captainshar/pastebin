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
        return true;
    }
}
