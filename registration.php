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
        </section>
    </main>
    <?php
        include 'components/footer.php';
    ?>
    <form class="form__order php__block">
        <?php
            $servername ='localhost';
            $options = array(
                "Database" => "Hotel",
                "UID" => "username",
                "PWD" => "password",
                "CharacterSet" => "UTF-8"
            );
            $con = sqlsrv_connect($servername, $options);
            if (!$con)
            {
                echo "Ошибка регистрации";
                // die(print_r( sqlsrv_errors(), true)); //дебагинг
            }
            if (!empty($_POST['email'])) {             

                if (preg_match('/[\'^$%&*()}{#?!<>|=+]/', $_POST['email'])) {
                echo 'Обнаружены запрещённые символы!';
                } else {
                    $sql = "SELECT Email FROM Guest WHERE Email = '$_POST[email]'";
                    $select = sqlsrv_query($con, $sql ,array(),array("Scrollable" => 'static'));
                    if(sqlsrv_num_rows($select) === 0){ // sqlsrv_num_rows -количество строк в массиве 
                        $sql="INSERT INTO Guest (Surname, GuestName, Patronymic, Email, Phone, Password )
                        VALUES
                        ('$_POST[surname]','$_POST[name]', '$_POST[patronymic]','$_POST[email]', '$_POST[phone]','$_POST[password]')";
                        if (!sqlsrv_query($con, $sql))
                        {
                            echo "Ошибка регистрации";
                            die(print_r( sqlsrv_errors(), true)); //  для дебагинга
                        }else
                        echo "Вы успешно зарегистрированы";
                    }else {
                        echo "Пользователь с указанной почтой уже зарегистрирован";
                    }
                }
            } else {
                echo "Ошибка регистраци";
            }
            sqlsrv_close($con);
        ?>
    </form>   
</body>
</html>