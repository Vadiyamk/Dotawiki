
<?php
$name = $_POST["name"]; 
$email = $_POST["email"];
$message = $_POST["message"];

$db = mysqli_connect("localhost", "root", "", "Vadimk"); 

if(mysqli_connect_errno()){ // при соединении с базой данных возникла ошибка
    echo 'Ошибка соединения: ' . mysqli_connect_error() . '<br>';
    echo 'Код ошибки: ' . mysqli_connect_errno();
 }else{ // соединение было установлено успешно
    // здесь можно делать запрос к базе, 
    // потому что соединение успешно установлено
    echo "Success";

    $sql = "INSERT INTO Vadimk(name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($db, $sql) or die("Ошибка в запросе: " . mysqli_error($db));
    

 }

// Закрываем соединение с базой данных
mysqli_close($db);
?>