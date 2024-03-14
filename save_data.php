<?php
// Подключение к базе данных
$mysqli = new mysqli("Host", "User", "Password", "Basedate");

// Проверка подключения
if($mysqli === false){
    die("Connection error: " . $mysqli->connect_error);
}

// Получение данных из формы
$new_username = $mysqli->real_escape_string($_POST['new_username']);
$new_email = $mysqli->real_escape_string($_POST['new_email']);
$new_password = $mysqli->real_escape_string($_POST['new_password']);

// SQL запрос для проверки уникальности имени пользователя и email
$check_query = "SELECT * FROM Users WHERE Username='$new_username' OR Email='$new_email'";
$check_result = $mysqli->query($check_query);


if($check_result->num_rows > 0) {
    echo "User with same username or email already exists.";
} else {
    // SQL запрос для вставки данных нового пользователя в таблицу Users
    $insert_query = "INSERT INTO Users (Username, Email) VALUES ('$new_username', '$new_email', '$new_password)";
    if($mysqli->query($insert_query) === true){
        echo "User created successfully.";
    } else{
        echo "Error: " . $mysqli->error;
        
    }
}

// Закрытие соединения с базой данных
$mysqli->close();
?>
