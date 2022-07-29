<?php session_start()  ?>

<!DOCTYPE html>
<html>

<head>
    <title>مكتب ألف للمحاماة</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/typography.css">
    <link rel="stylesheet" href="styles/elements.css">
    <link rel="stylesheet" href="styles/mobile.css">
    <link rel="stylesheet" href="styles/tablet.css">
    <link rel="stylesheet" href="styles/desktop.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Cairo:wght@200;300;400;500;600;700;800;900&family=Gulzar&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require_once('php/header.php');
    require_once('php/hero.php');
    require_once('php/practiceAreas.php');
    require_once('php/consolations.php');
    require_once('php/downloadFiles.php');
    require_once('php/whyUs.php');
    require_once('php/contactUs.php');
    require_once('php/footer.php');
    ?>
    <!-- required for javascript -->
    <script src="/lawfirm/scripts/app.js"></script>

</body>

</html>
