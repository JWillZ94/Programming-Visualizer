<?php include('../../config/config.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php print $PAGE_TITLE ?></title>
    </head>
    <body>
        <header style="display: flex;">
            <h4><a href="../home/home.php"><?php print $BACK_HOME ?></a></h4>
            <h1 id="title"><?php print $PAGE_TITLE ?></h1>
            <div>
                <input id="search-bar" />
            </div>
        </header>
        <div id="content">
            <?php echo $CONTENT ?>
        </div>

    </body>
</html>
