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
    <link rel="stylesheet" href="styles/about_mobile.css">
    <link rel="stylesheet" href="styles/about_tablet.css">
    <link rel="stylesheet" href="styles/about_desktop.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Cairo:wght@200;300;400;500;600;700;800;900&family=Gulzar&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once('php/header.php'); ?>

    <section class="hero">
            <!-- background image + animated text -->

        </section>


        <section class="about-us">
            <h2 class="golden-text hr-lines">من نحن؟</h2>
            <p class="white-text font-normal">
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
            </p>

        </section>


        <section class="meet-the-team">
            <h2 >تعرف على فريقنا</h2>

            
            
            <?php

                $membersFileHandler = fopen('storage/members.txt', 'r');
                $membersFile = fread($membersFileHandler, filesize('storage/members.txt'));
                $members = json_decode($membersFile, true);

                echo '<div class="team-members-container">';

                    for($counter = 0; $counter < count($members); $counter++) {
                            echo '<div class="team-member member' . ($counter + 1) . '">';

                                echo '<div class="member-info">';

                                    echo '<img src="images/' . $members['member'.($counter + 1)]['img'] . '" class="member-img">';

                                    echo '<div class="member-name-and-title">';
                                        echo '<h3 class="font-sm font-bold">' . $members['member'.($counter + 1)]['name'] . '</h3>';
                                        echo '<h4 class="font-xsm font-bold">' .  $members['member'.($counter + 1)]['title'] . '</h4>';
                                    echo '</div>';

                                echo '</div>';

                                echo '<div class="member-autobiography">';
                                    echo '<p class="font-sm font-normal">' . $members['member'.($counter + 1)]['autobiography'] . '</p>';
                                echo '</div>';

                            echo '</div>';
                    }

                echo '</div>';
            ?>

        </section>

    <?php require_once('php/footer.php'); ?>
    <!-- required -->
    <script src=" <?php echo '/lawfirm/scripts/app.js'; ?>"></script>

</body>

</html>
