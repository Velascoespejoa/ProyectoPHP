<?php 
    // Creamos una clase DB para manejar la conexión con la BBDD utilizando las propiedades de herencia de la POO

    require("config.php"); // Constantes necesarias para la conexión con la BBDD que hemos definido en el Config.php

    class DB {

        protected $db_conn; // en esta variable manejaremos la conexión con la BBDD

        public function DB(){ // constructor de la clase que iniciará la conexión con la BBDD al crear el objeto, o sus hijos
            $this->$db_conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME); // Realizamos la conexión con el metodo "mysqli" y las constantes definidas

            if($this->$db_conn->connect_errno){ // manejamos que no exista error con el bool que nos devuelve la propiedad connect_errno de mysqli
                echo "Fallo al conectar a la base de datos:" . $this.db_conn->connect_error;
                return;                
            }
            //definimos que codificación de texto vamos a utilizar en la sentencia 
            $this->$db_conn->set_charset(DB_CHARSET);
        }
    }
?>