<section class="download-files">
    <h2 class="golden-text">ملفات للتنزيل</h2>
    <p class="white-text">نماذج وقوالب وكتب مجانية نوفرها لكم</p>

    <div class="card-scroller">

        <div class="card card-1">
            <img src="<?php echo '/lawfirm/images/bookcover1.jpg'; ?>" alt="book cover">
            <div class="info">
                <h3 class="dark-text font-bold font-sm">Business Law</h3>
                <p class="dark-text font-normal font-xsm">يحتوي الكتاب على مجمع قوانين الاعمال</p>
                <a href="#" class="card-download-btn btn-link-dark font-bold" download="اسم الكتاب">تنزيل</a>
            </div>
        </div>

        <!-- <?php 

            $cardsLocation = '/storage/cards.txt';
            $cardsStream = file_get_contents($cardsLocation);

            //turn each card into an item in an associative array
            // parse_str($cardsStream, $cardsArray);
            $cardsArray = explode('\n\r', $cardsStream);

            $numberOfCards = count($cardsArray);
            for ($counter = 0; $counter < $numberOfCards; $counter++ ) {
                //main card container
                echo '<div class="card card-' . ($counter + 1);
                //card image
                echo '<img src="' . $cardsArray['card' . $counter]['imageUrl'] .'" alt = "book cover">';
                //card info container
                    echo '<div class="info">';
                        echo '<h3 class="dark-text font-bold font-sm">' . $cardsArray['card'.$counter]['Name'] . '</h3>';
                        echo '<p class="dark-text font-normal font-xsm">' . $cardsArray['card'.$counter]['Description'] . '</p>';
                        echo '<a href="' . $cardsArray['card'.$counter]['downloadLink'] . '" class="card-download-btn btn-link-dark font-bold" download="' . $cardsArray['card'.$counter]['Name'] . '</a>';
                    echo '</div>';
                echo '</div>';
            }
        
        ?> -->


        <div class="card card-2">
            <img src="<?php echo '/lawfirm/images/bookcover2.jpeg'; ?>" alt="book cover">
            <div class="info">
                <h3 class="dark-text font-bold font-sm">Business Law</h3>
                <p class="dark-text font-normal font-xsm">يحتوي الكتاب على مجمع قوانين الاعمال</p>
                <a href="#" class="card-download-btn btn-link-dark font-bold" download="اسم الكتاب">تنزيل</a>
            </div>
        </div>


        <div class="card card-3">
            <img src="<?php echo '/lawfirm/images/formcover1.png'; ?>" alt="form cover">
            <div class="info">
                <h3 class="dark-text font-bold font-sm">نموذج سيرة ذاتية</h3>
                <p class="dark-text font-normal font-xsm">يحتوي الكتاب على مجمع قوانين الاعمال</p>
                <a href="#" class="card-download-btn btn-link-dark font-bold" download="اسم الكتاب">تنزيل</a>
            </div>
        </div>


        <div class="card card-4">
            <img src="<?php echo '/lawfirm/images/bookcover4.jpg'; ?>" alt="book cover">
            <div class="info">
                <h3 class="dark-text font-bold font-sm">Business Law</h3>
                <p class="dark-text font-normal font-xsm">يحتوي الكتاب على مجمع قوانين الاعمال</p>
                <a href="#" class="card-download-btn btn-link-dark font-bold" download="اسم الكتاب">تنزيل</a>
            </div>
        </div>
        
    </div>
</section>