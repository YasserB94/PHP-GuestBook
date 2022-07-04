<?php
        declare(strict_types=1);
    //HEADER---
    require 'Views/headerView.php';
    //---
    //CONTROLLERS---
    require 'Controllers/GuestBookController.php';
    //---
    $controller = new GuestBookController($_POST);
    $controller->render();
    //FOOTER---
        require 'Views/footerView.php';
    //---
?>
