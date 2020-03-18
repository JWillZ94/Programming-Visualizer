<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=Visionary", $username, $password);

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $e) {
        echo "Connection sucks: " . $e->getMessage();
    }

    switch($_SERVER['SCRIPT_NAME']) {
        case '/Visionary/src/create/createProject.php':
            $CURRENT_PAGE = 'Create Project';
            $PAGE_TITLE = 'Create Project';
            $BACK_HOME = 'go to Home';
            $CONTENT = 'create proj boyy';
            break;
        default:
            $CURRENT_PAGE = 'Home';
            $PAGE_TITLE = 'Visionary';
            $BACK_HOME = 'go to Home';
            $CONTENT = (function ($conn) {

                $arr = array();

                foreach ($conn->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN) as $val) {
                    array_push($arr, '<button>' . $val . '</button>');
                }

                return implode(' ', $arr);

            })($conn);
    }

?>
