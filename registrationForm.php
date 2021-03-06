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
            <form class="form__order" action="registration.php" method="post">
                <h2 class="form__title">Регистрация</h2>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label" id="email-input">Email</span>
                    <input type="email" class="form__order-name" placeholder="Email" name='email' required>
                </div>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Имя</span>
                    <input type="text" class="form__order-name" placeholder="Имя" name='name'>
                </div>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Фамилия</span>
                    <input type="text" class="form__order-name" placeholder="Фамилия" name='surname'>
                </div>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Отчество</span>
                    <input type="text" class="form__order-name" placeholder="Отчество" name='patronymic'>
                </div>

                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Телефон</span>
                    <input type="text" class="form__order-name form__order-phone" placeholder="Телефон" name='phone'>
                </div>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Пароль</span>
                    <input type="password" class="form__order-name form__order-phone" placeholder="Пароль" name='password' required>
                </div>
                <button type="submit" class="form__order-button">ЗАРЕГИСТРИРОВАТЬСЯ</button>
            </form>
        </section>
    </main>
    <?php
        include 'components/footer.php';
    ?>  
</body>
</html>