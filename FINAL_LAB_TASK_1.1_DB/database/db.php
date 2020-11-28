<?php

    function getConnection{
        $con = mysqli_connect('localhost','root','','elearning');
        return $con;
    }


?>