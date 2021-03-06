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
            <form class="form__order" action="authorization.php" method="post">
                <h2 class="form__title">Авторизация</h2>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Email</span>
                    <input type="text" class="form__order-name" placeholder="Email" name='email'>
                </div>
                <div class="form__order-wrapper-text">
                    <span class="form__order-label">Пароль</span>
                    <input type="password" class="form__order-name" placeholder="Пароль" name='password'>
                </div>
                <button type="submit" class="form__order-button">ВОЙТИ</button>
            </form>
        </section>
    </main>
    <?php
        include 'components/footer.php';
    ?>
</body>
</html>