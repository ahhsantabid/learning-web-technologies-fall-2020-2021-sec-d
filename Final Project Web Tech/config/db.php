<?php

    function getConnection(){
        $conn = mysqli_connect('localhost','root','','elearning');
        return $conn;
    }


?>