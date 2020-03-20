<?php include('../../config/config.php') ?>

<?php

    function createProject() {
        global $conn;

        $projectName = $_POST['projectName'];

        $sql = "CREATE TABLE IF NOT EXISTS $projectName(ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY)";

        $conn->exec($sql);
    }

    if (isset($_POST['submitName'])) {
        createProject();
    }

?>
