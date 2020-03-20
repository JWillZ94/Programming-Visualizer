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

        case '/Visionary/src/project/projectTemplate.php':

            // $table_name = $conn->query('SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE table_name = "JavaScript"')->fetch();

            $PAGE_TITLE = 'title of project: ' . $_POST['projectName'];
            $BACK_HOME = 'go to Home';
            $CONTENT = 'mad data, gonna break it up';
            break;

        default:
            $CURRENT_PAGE = 'Home';
            $PAGE_TITLE = 'Visionary';
            $BACK_HOME = 'go to Home';
            $CONTENT = (function ($conn) {

                $arr = array();

                foreach ($conn->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN) as $val) {
                    array_push($arr, '<input type="submit" value='. $val .' name="projectName" formaction="/Visionary/src/project/projectTemplate.php" />');
                }

                return implode(' ', $arr);

            })($conn);
    }

?>
