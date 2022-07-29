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
    <link rel="stylesheet" href="styles/archive_mobile.css">
    <link rel="stylesheet" href="styles/archive_tablet.css">
    <link rel="stylesheet" href="styles/archive_desktop.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Cairo:wght@200;300;400;500;600;700;800;900&family=Gulzar&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- adding the header -->
    <?php require_once('php/header.php'); 

    // opening a connection to the database
    require('php/openDbConnection.php');

    //
    $sql = "SELECT `file_name`, `date_added`, `file_size`, `added_by`, `id` FROM `files` ORDER BY `id` DESC";
    $result = $conn->query($sql);

    $row = 0;
    $filesList = array();
    if ($result->num_rows > 0) {
        
        for ($counter = 0; $counter < $result->num_rows; $counter++) {
            $row = $result->fetch_assoc();
            $filesList[] = $row;
        }

    } else {
        echo 'no files are added yet';
    }

    echo '<section class="archive">
        <h2 class="archive-title dark-text font-bold font-lg"> الأرشيف </h2>
        <p class="dark-text font-normal"> كل المدخلات بدءاً من يوليو 2022 </p>
        <hr class="archive-main-hr">
        <div class="archive-enteries">';

    $currentMonth = date('m', strtotime($filesList[0]['date_added']));
    $currentMonthName = date('F', strtotime($filesList[0]['date_added']));
    $currentYear = date('Y', strtotime($filesList[0]['date_added']));

    echo '<div class="archive-month"><p class="dark-text font-bold">'.$currentMonthName . ' ' . $currentYear . '</p></div><hr class="archive-date-hr">';

    for ($count = 0; $count < count($filesList); $count++) {

        if (date('m', strtotime($filesList[$count]['date_added'])) != $currentMonth) {
            echo '<div class="archive-month"><p class="dark-text font-bold">'.$currentMonthName . ' ' . $currentYear . '</p></div><hr class="archive-date-hr">';
        }


        echo '<div class="archive-entry">';

        $s = strtotime($filesList[$count]['date_added']);
        $dateAdded = date('d/m/Y', $s);

        echo  '<p class="archive-entry-date dark-text font-normal">' . $dateAdded . '</p>';

        $fileName = $filesList[$count]['file_name'];
        echo '<a href="#" class="archive-entry-title dark-text font-normal" download="' . $fileName . '">' . $fileName . '</a>';

        echo '<p class="archive-entry-size dark-text font-normal">' . $filesList[$count]['file_size'] . 'mb</p>';

        echo '<p class="archive-added-by dark-text font-normal">' . $filesList[$count]['added_by'] . '</p>';

        echo '</div><hr class="archive-entry-hr">';
    }

    require('php/closeDbConnection.php');
            ?>


        
    </section>

    <?php require_once('php/footer.php'); ?>
    <!-- required for javascript -->
    <script src=" <?php echo '/lawfirm/scripts/app.js'; ?>"></script>

</body>

</html>
