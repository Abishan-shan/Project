<?php

//error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
       {
        header("location:login.php");
   
       }

       ?>