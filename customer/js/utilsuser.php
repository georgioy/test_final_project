<?php


  function checkLog(){

    session_start();
    if(isset($_SESSION["id"])){

        $id=$_SESSION["id"];
        echo $id;

    }


  }



















?>