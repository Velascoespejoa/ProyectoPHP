<?php 

    require("DB.php");

    class DevolverProducto extends DB 
    {
        public function __construct(){
            parent::__construct();
        }
        
 
    

    public function getProductos(){
        $result = $this->db_conn->query("SELECT * FROM Productos");
        $productos = $result->fetch_all(MYSQLI_ASSOC); 
        return $productos;
    }

    
    }



?>