<?php
 
class ErrorController
{
    public function show404()
    {
        header('HTTP/1.0 404 Not Found');
    }
}