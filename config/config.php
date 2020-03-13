<?php

    switch($_SERVER['SCRIPT_NAME']) {
        case '../src/create/createProject.php':
            $CURRENT_PAGE = 'Create Project';
            $PAGE_TITLE = 'Create Project';
            break;
        default:
            $CURRENT_PAGE = 'Home';
            $PAGE_TITLE = 'Visionary';
    }

?>
