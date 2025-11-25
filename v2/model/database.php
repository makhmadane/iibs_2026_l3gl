
<?php
class Database {
    private $serveur="localhost";
    private $port = "5432";
    private $user="postgres";
    private $pwd="passer";
    private $dbname="gestion_2026_iibs";

    
    function get_Connexion(){
        $connexion ;
        try {
            $connexion = new PDO("pgsql:host=$this->serveur;port=$this->port;dbname=$this->dbname;", $this->user, $this->pwd);
            // set the PDO error mode to exception
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $connexion;
    }

}
?>

