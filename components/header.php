<?php
// session_start();
// ".$_SESSION['id']." для условия, если сессия есть, то показываем кнопку Личный кабинет,
// если нет, то кнопку Регистрация
    echo " 
    <header>
        <div class='header__title'>Гостиница 'Мечта'</div>
        <div class='header__menu'>
            <a href='index.php' class='header__menu-link'>Об отеле</a>
            <a href='slider.php' class='header__menu-link'>Наши номера</a>
            <a href='bookingForm.php' class='header__menu-link'>Бронирование</a>
        </div>
        <div>
            <a href='authorizationForm.php' class='header__button'>
                Вход
            </a>
            <a href='registrationForm.php' class='header__button' id='registration'>
                Регистрация
            </a>
            <a href='userPage.php' class='header__button' id='user-page-button'>
                Личный кабинет
            </a>
        </div>
    </header>
    ";
?>