<!DOCTYPE html>
<html lang="en">
<user-page>
    <?php
        include 'components/head.html';
    ?>
</user-page>
<body>
    <?php
        include 'components/header.php';
    ?>
    <main>
        <section class="user-page">
            <h1 class="user-page__title">Доступные номера на указанные даты:</h1>
            <div class="user-page__room">
                <div class="user-page__text">
                    <h3 class="user-page__title">Номер "Комфорт"</h3>
                    <p class="user-page__info">
                        Дата приезда: <span id="dateBegin">21.02.2021</span>
                    </p>
                    <p class="user-page__info">
                        Дата отъезда: <span id="dateEnd">25.02.2021</span>
                    </p>
                    <p class="user-page__info">
                        Общая стоимость: <span id="cost">15000</span>р.
                    </p>
                    <p class="user-page__info">
                        Описание: <span id="room-info">В данном номере вас ждёт большая двуспальная кровать king size 180*200,
                        шкаф-купе с зеркальной дверью, оборудованное рабочее место (письменный стол со стулом, настольная лампа),
                        большой LCD телевизор, холодильник, сейф, фен, вафельный халат и тапочки.</span>
                    </p>
                    <a href='booking.php'>
                        <button class='room__button'>Забронировать</button>
                    </a>
                </div>
                <img src="img\3room.jpg" alt="Фото" class="user-page__picture">
            </div>
            <div class="user-page__room">
                <div class="user-page__text">
                    <h3 class="user-page__title">Номер "Комфорт"</h3>
                    <p class="user-page__info">
                        Дата приезда: <span id="dateBegin">21.02.2021</span>
                    </p>
                    <p class="user-page__info">
                        Дата отъезда: <span id="dateEnd">25.02.2021</span>
                    </p>
                    <p class="user-page__info">
                        Общая стоимость: <span id="cost">15000</span>р.
                    </p>
                    <p class="user-page__info">
                        Описание: <span id="room-info">В данном номере вас ждёт большая двуспальная кровать king size 180*200,
                        шкаф-купе с зеркальной дверью, оборудованное рабочее место (письменный стол со стулом, настольная лампа),
                        большой LCD телевизор, холодильник, сейф, фен, вафельный халат и тапочки.</span>
                    </p>
                    <a href='booking.php'>
                        <button class='room__button'>Забронировать</button>
                    </a>
                </div>
                <img src="img\3room.jpg" alt="Фото" class="user-page__picture">
            </div>
        </section>
    </main>
    <?php
        include 'components/footer.php';
    ?>  
</body>
</html>