<?php

    session_start();

    ##autolader##

    function autolader($nClass){
        require_once 'classes/'.$nClass.'.php';

    }

    spl_autoload_register('autolader');
