<?php include('../../config/config.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php print $PAGE_TITLE ?></title>
    </head>
    <body>
        <header style="display: flex;">
            <h4></h4>
            <h1 id="title"><?php print $PAGE_TITLE ?></h1>
            <div>
                <input id="search-bar" />
            </div>
        </header>
        <div id="content">
            <?php echo $CONTENT ?>
            <a href="../create/createProject.php"><button id="create-new">Create New</button></a>
        </div>

    </body>
</html>
