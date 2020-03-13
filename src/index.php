<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Visionary</title>
    </head>
    <body>
        <header style="display: flex;">
            <h4>(add arrow icon) Back to home</h4>
            <h1 id="title">Visionary</h1>
            <div>
                <input id="search-bar" />
            </div>
        </header>
        <div id="content">
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

            foreach ($conn->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN) as $val) {
                echo '<button>' . $val . '</button>';
            }

            ?>
            <button id="create-new">Create New</button>
        </div>
    </body>
</html>
