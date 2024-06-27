<?php

class Security extends Model
{
    protected $bd;

    private static $instance = null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname=sa_sa_kdo', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {

        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }


    // ----------------------------------PARTIE LOGIN --------------------------------------------//


    public function get_login()
    {
        $email = $_POST['email'];
        $MdP = $_POST['MdP'];

        try {
            $requete = $this->bd->prepare("SELECT * FROM user WHERE email = :email AND MdP = :MdP");

            $requete->execute(array(':MdP' => $MdP,  ':email' => $email));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage());
        }
        return $requete->fetch(PDO::FETCH_OBJ);
    }
}