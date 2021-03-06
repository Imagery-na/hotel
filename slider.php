<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'components/head.html';
    ?>
    <link rel="stylesheet" href="css\swiper.min.css">
</head>
<body>
    <?php
        include 'components/header.php';
    ?>
    <main>
        <section class="projects">
            <div class="container">
                <h2 class="projects-title">Наши номера</h2>
                <!-- Slider main container -->
                <div class="swiper-container projects-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="project-slide">
                                <img src="img\1room.jpg" alt="Интернет-магазин одежды FashionLook" class="project-image">
                                <div class="project-text">
                                    <h3 class="project-title">Стандартный одноместный</h3>
                                    <h4 class="project-subtitle">1500 р. в сутки</h4>
                                    <p class="project-info">Однокомнатный номер площадью 14-16 кв.м.</p>
                                    <a href="room.php" class="project-link">
                                        <button class='project__button'>Подробная информация</button>
                                    </a>         
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-slide">
                                <img src="img\2room.jpg" alt="" class="project-image">
                                <div class="project-text">
                                    <h3 class="project-title">Стандартный двухместный</h3>
                                    <h4 class="project-subtitle">2000 р. в сутки</h4>
                                    <p class="project-info">Однокомнатный номер площадью 20-22 кв.м. с двумя кроватями</p>
                                    <a href="room.php" class="project-link">
                                        <button class='project__button'>Подробная информация</button>
                                    </a>         
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-slide">
                                <img src="img\3room.jpg" alt="" class="project-image">
                                <div class="project-text">
                                    <h3 class="project-title">Комфорт</h3>
                                    <h4 class="project-subtitle">2500 р. в сутки</h4>
                                    <p class="project-info">Однокомнатный номер площадью 24-26 кв.м. с большой кроватью и ванной с джакузи
                                    </p>
                                    <a href="room.php" class="project-link">
                                        <button class='project__button'>Подробная информация</button>
                                    </a> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-slide">
                                <img src="img\4room.jpg" alt="" class="project-image">
                                <div class="project-text">
                                    <h3 class="project-title">Люкс</h3>
                                    <h4 class="project-subtitle">3500 р. в сутки</h4>
                                    <p class="project-info">Двухкомнатный номер (гостиная и спальня) площадью 45-56 квадратных метров с панорамными окнами, из которых открывается вид на исторический центр города и море.
                                    </p>
                                    <a href="room.php" class="project-link">
                                        <button class='project__button'>Подробная информация</button>
                                    </a>      
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="projects-pagination"></div>
                </div>
                <!-- /.projects-slider -->
            </div>
        </section>
    </main>
    <?php
        include 'components/footer.php';
    ?>
    <script src="js/wow.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/main.js"></script>   
</body>
</html>