<?php

class Payments extends Model
{
    private $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Payments();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }

}