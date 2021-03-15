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
            <h1 class="booking__title">Выбранный вами номер:</h1>
            <div class="booking__room">
                <div class="booking__text">
                    <h3 class="booking__title">Номер "Комфорт"</h3>
                    <p class="booking__info">
                        Дата приезда: <span id="dateBegin">21.02.2021</span>
                    </p>
                    <p class="booking__info">
                        Дата отъезда: <span id="dateEnd">25.02.2021</span>
                    </p>
                    <p class="booking__info">
                        Общая стоимость: <span id="cost">15000</span>р.
                    </p>
                    <p class="booking__info">
                        Описание: <span id="room-info">В данном номере вас ждёт большая двуспальная кровать king size 180*200,
                        шкаф-купе с зеркальной дверью, оборудованное рабочее место (письменный стол со стулом, настольная лампа),
                        большой LCD телевизор, холодильник, сейф, фен, вафельный халат и тапочки.</span>
                    </p>
                </div>
                <img src="img\3room.jpg" alt="Фото" class="booking__picture">
            </div>
            <form class="form__order" action="userPage.php" method="post">
                <h2 class="form__title">Дополнительные услуги</h2>
                <div class="form__order-wrapper-text">
                    <input type="checkbox" class="form__order-checkbox">
                    <span class="form__order-label">Завтрак (шведский стол)</span>
                </div>
                <div class="form__order-wrapper-text">
                    <input type="checkbox" class="form__order-checkbox">
                    <span class="form__order-label">Ужин (шведский стол)</span>
                </div>
                <div class="form__order-wrapper-text">
                    <input type="checkbox" class="form__order-checkbox">
                    <span class="form__order-label">Сауна</span>
                </div>
                <div class="form__order-wrapper-text">
                    <input type="checkbox" class="form__order-checkbox">
                    <span class="form__order-label">Массаж</span>
                </div>
                <button type="submit" class="form__order-button">ПОДТВЕРДИТЬ БРОНИРОВАНИЕ</button>
            </form>
        </section>
    </main>
    <?php
        include 'components/footer.php';
    ?>  
</body>
</html>