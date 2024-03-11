<?php

namespace App;

class Config {
    private array $settings;
    private static ?Config $instance = null;

    private function __construct()
    {
        $this->settings = require '../config/config.php';
    }

    public static function getInstance () : Config {
        if (is_null(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function getValeurSettings ($cle) : array {
        return $this->settings[$cle];
    }
}