<?php 
    include_once 'DB.php';


    function getHeader() {
        include "Header.php";
    }

    function getFooter() {
        include "Footer.php";
    }

    function getTemplate ($fileName) {
        include_once $fileName;
    }
    function checkInputs($inputs) {
        $data = array();
        for($i = 0; $i < sizeof($inputs); $i++ ) {
            if(isset($_POST[$inputs[$i]]) && !empty($_POST[$inputs[$i]])) {
                $data[$inputs[$i]] = $_POST[$inputs[$i]];
            } else {
                $data = null;
            }
        }
        return $data;
    }
    function redirect($loc , $message = null) {
        if($message != null) {
            echo "<script> GoTo('$loc' , '$message') </script>";
        } else {
            echo "<script> GoTo('$loc') </script>";
        }
    }
    function Connect() {
        $servername = host;
        $username = username;
        $password = password;
        $dbname = dbname;

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    function addScript($sql) {
        $conn = Connect();
        $success = 1;
        if ($conn->query($sql) === TRUE) {
            $success = 1;
        } else {
            $err = "Error: " . $sql . "<br>" . $conn->error;
            $success = array(
                'Connection' => 'failed' ,
                'Error' => $err
            );
        }

        $conn->close();
        return $success;
    }

    function getData($sql) {
        $conn = Connect();

        $result = $conn->query($sql);

        $Data = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($Data , $row);
            }
        } else {
            $Data = NULL;
        }

        return $Data;
        $conn->close();
    }

?>