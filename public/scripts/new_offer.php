<?php
	require_once 'connection/DBProvider.php';
    $provider = new DBProvider;

    // Получение данных из формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['news-name'];
    $description = $_POST['description'];

    // Подготовка и выполнение SQL-запроса на вставку данных
    $sql = "INSERT INTO info_offer (name, email, title, description) VALUES ('$name', '$email', '$title', '$description')";
    if ($provider->request($sql) === TRUE) {
        // Перенаправление на другую HTML-страницу после успешного вставки
        header("Location: ../index.php");
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }

    // Закрытие соединения с базой данных
    $provider->closeConnection();
?>
