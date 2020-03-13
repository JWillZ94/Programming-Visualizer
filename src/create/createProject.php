<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Visionary</title>
    </head>
    <body>
        <h1>create page</h1>
    </body>
</html>

<?php include('../../config/config.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php print $PAGE_TITLE ?></title>
    </head>
    <body>
        <header style="display: flex;">
            <h4>(add arrow icon) Back to home</h4>
            <h1 id="title"><?php print $PAGE_TITLE ?></h1>
            <div>
                <input id="search-bar" />
            </div>
        </header>
        <div id="content">
            <?php  ?>
        </div>

    </body>
</html>
