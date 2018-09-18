<?php

require_once('H1.php');

class P extends H1
{
    function __construct($text)
    {
        parent::__construct($text, "p");
    }
}