<?php
//creamos una funcion
//le ponemos de nombre consularsql 
//entre los  parentesis ponemos query que es la consulta que le hacemos a la base de datos.
function consultarSQL($query){
    $mysqli = new mysqli("localhost","root","","curso_php");

    if(mysqli_connect_errno()){
        echo "este sitio esta presentando problemas";
    }else{
        echo "esta conectado";
    }
    //vamos a definir los caracteres que vamos ha utilizar en la conexion
    //mandamos a llamar la variable mysqli y mando a llamar la funcion set_charset
    //entre parentesis ponemos el comando utf8 que es el que me permite el uso de tipos de caracteres.
    $mysqli -> set_charset("utf8");
    //vamos a llamar el metodo autocomit y ponemos false entre parentesis
    //aqui estamos desactivando el autocommit, lo que hace que las consultas no se guarden directamente
    $mysqli -> autocommit(FALSE);
    //vamos ha decir que vamos a realizar una transaccion
    //aqui estamos definiendo que estamos realizarndo un tipo de transaccion
    $mysqli -> begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    //despues vamos hacer una consulta a la base de datos con el metodo Query
    //y lo vamos a guardar en una variable consulta
    if($consulta=$mysqli->query($query)){
        //si la consulta se realizo satisfactoriamente vamos a llamar el metodo commit 
        /*
        lo que hace el metodo Query es que va a guardar la consulta, 
        osea que guardamos en la base de datos los datos que hemos enviado
        */
        if($mysqli -> commit()){
            
        }
    }else{
        //si no, vamos a reenvertir la trasaccion, no vamos a guardar los datos con rollback
        $mysqli -> rollback();
    }
    //vamos a retornar la variable consulta
    return $consulta;
}


?>