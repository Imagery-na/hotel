<!DOCTYPE html>
<html lang="en">
<booking>
    <?php
        include 'components/head.html';
    ?>
</booking>
<body>
    <?php
        include 'components/header.php';
    ?>
    <main>
        <section class="booking">
            <h1 class="booking__title">Доступные номера на указанные даты:</h1>
            <div class="booking__room">
                <div class="booking__text">
                    <h3 class="booking__title">Номер "Стандартный одноместный"</h3>
                    <p class="booking__info">
                        Общая стоимость: <span id="cost">15000</span>р.
                    </p>
                    <p class="booking__info">
                        Описание: <span id="room-info">В данном номере вас ждёт двуспальная кровать,
                        холодильник, сейф, фен, вафельный халат и тапочки.</span>
                    </p>
                    <p class="booking__info">
                        Доступно номеров: <span id="room-count">10</span>
                    </p>
                    <a href='booking.php'>
                        <button class='room__button'>Забронировать</button>
                    </a>
                </div>
                <img src="img\3room.jpg" alt="Фото" class="booking__picture">
            </div>
            <div class="booking__room">
                <div class="booking__text">
                    <h3 class="booking__title">Номер "Комфорт"</h3>
                    <p class="booking__info">
                        Общая стоимость: <span id="cost">15000</span>р.
                    </p>
                    <p class="booking__info">
                        Описание: <span id="room-info">В данном номере вас ждёт большая двуспальная кровать king size 180*200,
                        шкаф-купе с зеркальной дверью, оборудованное рабочее место (письменный стол со стулом, настольная лампа),
                        большой LCD телевизор, холодильник, сейф, фен, вафельный халат и тапочки.</span>
                    </p>
                    <p class="booking__info">
                        Доступно номеров: <span id="room-count">3</span>
                    </p>
                    <a href='booking.php'>
                        <button class='room__button'>Забронировать</button>
                    </a>
                </div>
                <img src="img\3room.jpg" alt="Фото" class="booking__picture">
            </div>
        </section>
    </main>
    <?php
        include 'components/footer.php';
    ?>  
</body>
</html>