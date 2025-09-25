<?php 

    require("DB.php");

    final class DevolverResultado extends DB 
    {
        parent::__construct();
    }
    

    public function getProducto(){
        $result = $this->db_conn->query("SELECT * FROM Productos");
        $productos = $result->fetch_array(MYSQLI_ASSOC);
        return $productos;
    }

    




?>