<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'components/head.html';
    ?>
</head>
<body>
    <?php
        include 'components/header.php';
    ?>
    <main>
        <section class="form">
            <form class="form__order" action="search.php" method="post">
                <h2 class="form__title">Бронирование</h2>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Дата приезда</span>
                    <input type="date" placeholder="Дата приезда">
                </div>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Дата отъезда</span>
                    <input type="date" placeholder="Дата отъезда">
                </div>
                <p class="form__order-title">Выберите тип номера</p>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Стандартный одноместный</span>
                    <input type="checkbox" class="form__order-checkbox">
                </div>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Стандартный двухместный</span>
                    <input type="checkbox" class="form__order-checkbox">
                </div>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Комфорт</span>
                    <input type="checkbox" class="form__order-checkbox">
                </div>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Люкс</span>
                    <input type="checkbox" class="form__order-checkbox">
                </div>
                <button type="submit" class="form__order-button">ПОИСК</button>
            </form>
        </section>
    </main>
    <?php
        include 'components/footer.php';
    ?>
</body>
</html>