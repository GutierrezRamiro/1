<?php

class conexion{

        //public $host="sql313.byethost9.com";
    //public $user="b9_41144801";
    //public $pwd="5577yo";
    //public $db="b9_41144801_bdferreteria";


    public $host="localhost";
    public $user="root";
    public $pwd="";
    public $db="bdferreteria";

    public function conectar(){
        $con=new mysqli;
        $con->connect($this->host,$this->user,$this->pwd,$this->db);
        return $con;
    }

}

?>