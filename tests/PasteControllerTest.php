<?php
require "vendor/autoload.php";
require "PasteController.php";
 
class PasteControllerTest extends PHPUnit_Framework_TestCase
{
    protected $ctrl;
 
    protected function setUp()
    {
        $this->ctrl = new PasteController();
    }
 
    public function testIsValidPasteURI()
    {
        $temp = $this->ctrl->isValidPasteURI("/234");
        $this->AssertTrue($temp);
 
        $temp = $this->ctrl->isValidPasteURI("/foo");
        $this->AssertFalse($temp);
 
        $temp = $this->ctrl->isValidPasteURI("/foo/434");
        $this->AssertFalse($temp);
 
        $temp = $this->ctrl->isValidPasteURI("234");
        $this->AssertFalse($temp);
 
    }
    public function testShowPasteForm()
    {
        $this->expectOutputRegex("/<title>Paste It<\/title>/");
        $this->ctrl->showPasteForm();
    }
}
