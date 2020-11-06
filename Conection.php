<?Php 
    class DataBase extends SQLite3{
        public function _construct(){
            $this->open("mydatabase.db");
        }
    }

    $db = new DataBase();
    if($db) {
        echo "<p>Succesful</p>";
    } else {
        echo "<p>Error</p>";
    }
?>