<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    try {
        $stmt = $conn->prepare("INSERT INTO plans (user_id, name) VALUES (?, ?)");
        $stmt->execute([1, $name]);  // Tymczasowo `user_id` ustawiamy na 1

        echo "✅ Plan został dodany!";
        header("Location: index.php");  // Przekierowanie po dodaniu
        exit;
    } catch (PDOException $e) {
        die("❌ Błąd dodawania: " . $e->getMessage());
    }
}
?>