<?php


class Product extends Model
{
    protected $bd;

    private static $instance = null;

    public static function get_model()
    {

        if (is_null(self::$instance)) {
            self::$instance = new Product();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        parent::__construct();
    }

    public function get_all_mugs()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM product WHERE category_id=2');
            $requete->execute();
            return $requete->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $m) {
            die('Erreur [' . $m->getCode() . '] : ' . $m->getMessage() . '</p>');
        }
    }
    public function get_all_portes_cles()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM product WHERE category_id=3');
            $requete->execute();
            return $requete->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $m) {
            die('Erreur [' . $m->getCode() . '] : ' . $m->getMessage() . '</p>');
        }
    }
}
