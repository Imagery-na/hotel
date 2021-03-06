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
                die(print_r( sqlsrv_errors(), true));
            }
            

            if (!empty($_POST['email'])) {
                if (preg_match('/[\'^$%&*()}{#?!<>|=+]/', $_POST['email'])) {
                    echo 'Обнаружены запрещённые символы!';
                    } else {
                    $email = $_POST['email'];
                    $sql="SELECT GuestName, Password FROM Guest
                    WHERE Email = ('$email')";
                    $stmt = sqlsrv_query($con,$sql,array(),array("Scrollable" => 'static')); 
                    if (sqlsrv_num_rows($stmt) === 0)
                    {
                        echo "Пользователь с данным Email  не найден";
                        //die(print_r( sqlsrv_errors(), true)); //  дебагинг
                    }
                    $user = sqlsrv_fetch_array(sqlsrv_query($con, $sql), SQLSRV_FETCH_ASSOC);
                    //var_dump(sqlsrv_num_rows($stmt));
                    if ($user['Password'] === $_POST['password']) {
                        $_SESSION['id']=$email;
                        echo "<br> Добро пожаловать, ". $user['GuestName']. "<br>";
                    }
                    else {
                        echo "Вы ввели неверный пароль";
                    }
                }
            }
        ?>
    </form>  
</body>
</html>