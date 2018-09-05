<?php

class View
{
    private $content;

    public function __set($name, $value)
    {
       $this->{$name} = $value;
    }

    function generate($templateView, $mainView)
    {
        $this->content = $this->getRenderHtml('views/' . $mainView);

        include 'views/layouts/' . $templateView;
    }

    public function getRenderHtml($path)
    {
        ob_start();
        include ($path);
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
}