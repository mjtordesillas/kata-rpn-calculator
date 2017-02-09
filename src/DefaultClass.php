<?php

namespace DefaultNamespace;

class DefaultClass
{
    private $instantiated = false;

    public function __construct()
    {
        $this->instantiated = true;
    }

    public function isInstantiated()
    {
        return $this->instantiated;
    }

}