<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "blog";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Rest of the code...
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// SQL-запрос для выборки данных из таблицы users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Проверка наличия строк
if ($result->num_rows > 0) {
    // Вывод данных каждой строки
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Имя: " . $row["name"] . " " . $row["surname"] . "<br>";
    }
} else {
    echo "0 результатов";
}

// Закрытие соединения
$conn->close();