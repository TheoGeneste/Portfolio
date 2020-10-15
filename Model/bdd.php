<?php

class Bdd{
    private $dbh;

    public function __construct() {
        try {
            $this->dbh = new PDO("mysql:dbname=b6_26959965_Information;host=sql303.byethost6.com;charset=utf8", "b6_26959965", "Theolea2421$");
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
    }

    public function insertExpediteur($nom, $prenom, $mail , $ville, $message) {
        $sql = "INSERT INTO `Expediteur`(`EX_Mail`, `EX_Nom`, `EX_Prenom`, `EX_Ville`,`EX_Message`) VALUES (:EX_Mail, :EX_Nom, :EX_Prenom, :EX_Ville, :EX_Message)";
        $req = $this->dbh->prepare($sql);

        // print_r($req->errorInfo());
        $req->execute(array(":EX_Mail" => $mail, ":EX_Nom" => $$nom, ":EX_Prenom" => $prenom, ":EX_Ville" => $ville, "EX_Message"));
    }
}
?>

<?php
