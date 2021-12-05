<?php namespace Dimti\Elvenar\Classes\Registration;

use Dimti\Elvenar\Classes\Registration\Extensions\ExtendRainLabUser;

trait BootExtensions {

    use ExtendRainLabUser;

    protected function registerExtensions()
    {
        $this->extendRainLabUser();
    }
}
