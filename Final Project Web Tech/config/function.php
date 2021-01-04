<?php
     require_once ('../config/db.php');

     session_start();

    /**
     * SIMPLE QUERY BUILDER MINIMAL AND HANDY ;)
     */
    function serializeUpdates(array &$arr) {
        array_walk($arr, function (&$value, $column) {
            $value = "`$column` = '$value'";
        });

        $arr = array_values($arr);
    }


    function serializeComparison(array &$arr) {
        array_walk($arr, function (&$value, $column) {
            $value = is_array($value) ? "`$column` {$value[0]} '{$value[1]}'" : "`$column` = '$value'";
        });

        $arr = array_values($arr);
    }

    function getFromTable($table, array $where = array(), array $selects = array()) {
        $conn = getConnection();
        serializeComparison($where);
        $selects = !empty($selects) ? "`".implode("`, `". $selects)."`" : "*";
        $where = !empty($where) ? "WHERE ".implode(" AND ", $where) : "";
        $sql = "SELECT ".$selects." FROM `$table` ".$where." ORDER BY 1 DESC";
        $result = mysqli_query($conn, $sql);
        $dataset = array();
        if($result) {
            while($data = mysqli_fetch_assoc($result)){
                array_push($dataset, $data);
            }
        }

        return $dataset;
    }

    function updateTable($table, array $updates, array $where) {
        $conn = getConnection();

        serializeUpdates($updates);
        serializeComparison($where);

        $sql = "UPDATE `$table` SET ".implode(", ", $updates)." WHERE ".implode(" AND ", $where);
        $status = mysqli_query($conn, $sql);
        if($status){
            return true;
        }else{
            return false;
        }
    }

    function deleteFromTable($table, array $where) {
        $conn = getConnection();

        serializeComparison($where);

        $sql = "DELETE FROM `$table` WHERE ".implode(" AND ", $where);
        $status = mysqli_query($conn, $sql);
        if($status){
            return true;
        }else{
            return false;
        }
    }

    function insertIntoTable($table, array $data) {
        $conn = getConnection();

        $columns = array_keys($data);
        $values = array_values($data);

        if(!empty($data)) {
            $sql = "INSERT INTO `$table`(`".implode("`, `", $columns)."`) VALUES ('".implode("', '", $values)."')";
            return mysqli_query($conn, $sql);
        }

        return false;
    }

    function insertUser($user) {
        return insertIntoTable("user", $user);
    }

    function userByUserName($name) {
        $result = getFromTable("user", array(
            'name' => $name,
        ));

        return !empty($result) ? $result[0] : null;
    }

    function isLoggedIn() {
        return isset($_SESSION['logged_in_user']) && !empty($_SESSION['logged_in_user']);
    }

    function getLoggedUser() {
        return $_SESSION['logged_in_user'];
    }

    function setLoggedUser($username) {
        $_SESSION['logged_in_user'] = $username;
    }

    function removeLoggedUser() {
        unset($_SESSION['logged_in_user']);
    }


    function getCourse() {
        return getFromTable("course");
    }

    function insertCourse($data) {
        return insertIntoTable("course", $data);
    }

    function getCourseById($id) {
        $result = getFromTable("course", array(
            'id' => $id,
        ));

        return !empty($result) ? $result[0] : null;
    }

    function updateCourse($data, $id) {
        return updateTable("course", $data, array(
            'id' => $id
        ));
    }

    function deleteCourse($id) {
        return deleteFromTable("course", array(
            'id' => $id
        ));
    }
    function getStudent() {
        return getFromTable("student");
    }

    function insertStudent($data) {
        return insertIntoTable("student", $data);
    }

    function getStudentById($id) {
        $result = getFromTable("student", array(
            'id' => $id,
        ));

        return !empty($result) ? $result[0] : null;
    }

    function updateStudent($data, $id) {
        return updateTable("student", $data, array(
            'id' => $id
        ));
    }

    function deleteStudent($id) {
        return deleteFromTable("student", array(
            'id' => $id
        ));
    }


    function getsellreport() {
        return getFromTable("sellreport");
    }

    function insertsellreport($data) {
        return insertIntoTable("sellreport", $data);
    }

    function getsellreportById($student_id) {
        $result = getFromTable("sellreport", array(
            'student_id' => $student_id,
        ));

        return !empty($result) ? $result[0] : null;
    }

    function updatesellreport($data, $student_id) {
        return updateTable("sellreport", $data, array(
            'student_id' => $student_id,
        ));
    }

    function deletesellreport($student_id) {
        return deleteFromTable("sellreport", array(
            'student_id' => $student_id,
        ));
    }

    function getpayment() {
        return getFromTable("payment");
    }

    function insertpayment($data) {
        return insertIntoTable("payment", $data);
    }

    function getPaymentById($id) {
        $result = getFromTable("payment", array(
            'id' => $id,
        ));

        return !empty($result) ? $result[0] : null;
    }

    function updatePayment($data, $id) {
        return updateTable("payment", $data, array(
            'id' => $id
        ));
    }

    function deletePayment($id) {
        return deleteFromTable("payment", array(
            'id' => $id
        ));
    }




