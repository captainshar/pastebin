<?php
require_once "vendor/autoload.php";
require_once "controllers/ErrorController.php";
require_once "helpers/TwigFactory.php";
 
class ErrorControllerTest extends PHPUnit_Framework_TestCase
{
    protected $err;
 
    protected function setUp()
    {
        $this->err = new ErrorController();
    }
 
    public function testObjectInitialization()
    {
        $this->assertObjectHasAttribute("twig", $this->err);
    }
 
    public function testShowPasteForm()
    {
        $this->expectOutputRegex("/<h1>404<\/h1>/");
        $this->err->show404();
    }
}