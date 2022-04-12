<?php
    class Chien
    {
        private $servername = "localhost";
        private $username   = "root";
        private $password   = "1234";
        private $database   = "exercice_chien";
        public  $con;
        
        // Database Connection 
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
            if(mysqli_connect_error()) {
             trigger_error("Erreur de connexion à MySQL: " . mysqli_connect_error());
            }else{
            return $this->con;
            }
        }
        
        public function insertData($post)
        {
            $nom = $this->con->real_escape_string($_POST['nom']);
            $age = $this->con->real_escape_string($_POST['age']);
            $race = $this->con->real_escape_string($_POST['race']);
            $query="INSERT INTO chien(nom,age,race) VALUES('$nom','$age','$race')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:../exercice9/index.php?msg1=insert");
            }else{
                echo "Enregistration echoué !";
            }
        }


    }
?>