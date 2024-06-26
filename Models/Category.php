<?php

class Category extends Model
{
    protected $bd;

    private static $instance = null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Category();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }

    // ------------------  all category -------------------- 

    public function get_all_category()

{
try {
    $requete = $this->bd->prepare('SELECT * FROM category');
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage());
}


}
}