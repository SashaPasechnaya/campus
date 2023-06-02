<?php
    require_once "connection/DBProvider.php";

    $tableName = $_POST['tableName'];

    // Open connection
    $conn = new DBProvider;

    // Создание таблицы
    $sql = "CREATE TABLE $tableName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL
    )";

    if ($conn->request($sql) === TRUE) {
        echo "Таблица $tableName успешно создана.";
    } else {
        echo "Ошибка при создании таблицы";
    }

    $conn->closeConnection();
?>
