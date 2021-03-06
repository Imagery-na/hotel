<?php
// session_start();
    echo " 
    <header>
        <div class='header__title'>Гостиница 'Мечта'</div>
        <div class='header__menu'>
            <a href='index.php' class='header__menu-link'>Об отеле</a>
            <a href='slider.php' class='header__menu-link'>Наши номера</a>
            <a href='bookingForm.php' class='header__menu-link'>Бронирование</a>
        </div>
        <div>
            <a href='authorizationForm.php'>
                <button class='header__button'>Вход</button>
            </a>
            <a href='registrationForm.php' id='registration'>
            ".$_SESSION['id']."
                <button class='header__button'>Регистрация</button>
            </a>
            <a href='userPage.php' id='user-page-button'>
                <button class='header__button'>Личный кабинет</button>
            </a>
        </div>
    </header>
    ";
?>