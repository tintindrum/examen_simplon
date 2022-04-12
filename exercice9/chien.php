<?php
    class Chien
    {
        private $servername = "localhost";
        private $username   = "root";
        private $password   = "1234";
        private $database   = "exercice_chien";
        public  $con;
        
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
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
                header("Location:index.php?msg1=insert");
            }else{
                echo "Enregistration echoué !";
            }
        }
     
        public function displayData()
        {
            $query = "SELECT * FROM chien";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
            }
             return $data;
            }else{
             echo "No found records";
            }
        }

        public function displyaRecordById($id)
        {
            $query = "SELECT * FROM chien WHERE id = '$id'";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
            }else{
            echo "Record not found";
            }
        }

        
 
        public function updateRecord($postData)
        {
            $name = $this->con->real_escape_string($_POST['unom']);
            $age = $this->con->real_escape_string($_POST['uage']);
            $race = $this->con->real_escape_string($_POST['urace']);
            $id = $this->con->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE chien SET nom = '$name', age = '$age', race = '$race' WHERE id = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:index.php?msg2=update");
            }else{
                echo "Votre demande de suppresion ne c'est pas executer!";
            }
            }
            
        }

        public function deleteRecord($id)
        {
            $query = "DELETE FROM chien WHERE id = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:index.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }
    }
?>