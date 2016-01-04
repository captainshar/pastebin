<?php

// Use Composer's autoload feature for all my classes
require_once __DIR__.'/vendor/autoload.php';

// the controller class for the Paste
require "PasteController.php";

// routing
$uri = $_SERVER['REQUEST_URI'];

$pastCtrl = new PasteController();

//main routing point
if($uri == "/") {
	$pasteCtrl->showPasteForm();
} elseif($uri == "/paste") {
	$pasteCtrl->addNewPaste();
} elseif(PasteController::isValidPasteURI($uri)) {
	$pasteCtrl->showPasteContents($uri);
} else {
	$pasteCtrl->show404();
}

// my twig instance
private $twig;

public function __construct()
    {
        // create twig environment and tell it where the templates live
        $loader = new Twig_Loader_Filesystem('views');
 
        // set up a twig instance, enable auto-escaping
        $this->twig = new Twig_Environment($loader, array('debug' => true, 
                                                            'autoescape' => true, 
                                                            'auto_reload' => true));
    }

public function showPasteForm() 
    {
        // load the form template
        $template = $this->twig->loadTemplate('form.html');
 
        // render and pass in the title at the same time
        echo $template->render(array('title' => 'Paste It, Sparky!'));
    }