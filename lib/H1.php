<?php

class H1 
{

    function __construct($title, $element = "h1")
    {
        $this->title = $title;
        $this->element = $element;
    }

    function __toString()
    {
        return "<$this->element>$this->title</$this->element>";
    }
}