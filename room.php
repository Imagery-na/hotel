<!DOCTYPE html>
<html lang="en">
<room>
    <?php
        include 'components/head.html';
    ?>
</room>
<body>
    <?php
        include 'components/header.php';
    ?>
    <main>
        <section class="room">
            <div class="room__container">
                <div class="room__text">
                    <h1 class="room__title">Номер "Комфорт"</h1>
                    <p class="room__info">
                        В данном номере вас ждёт большая двуспальная кровать king size 180*200,
                        шкаф-купе с зеркальной дверью, оборудованное рабочее место (письменный стол со стулом, настольная лампа),
                        большой LCD телевизор, холодильник, сейф, фен, вафельный халат и тапочки.
                    </p>
                    <p class="room__info">
                        Цена: 2500 р. в сутки
                    </p>
                    <p class="room__info">
                        Бронируйте номер и наслаждайтесь отдыхом в гостинице "Мечта"!
                    </p>
                    <a href='bookingForm.php'>
                        <button class='room__button'>Забронировать</button>
                    </a>
                </div>
                <img src="img\3room.jpg" alt="Фото" class="room__picture">
            </div>
        </section>
    </main>
    <?php
        include 'components/footer.php';
    ?>  
</body>
</html>