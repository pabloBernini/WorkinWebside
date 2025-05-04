<?php
$serverName = "localhost\SQLEXPRESS03";  // Lub nazwa serwera MSSQL
$database = "training_db";

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database;TrustServerCertificate=true", null, null);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Błąd połączenia: " . $e->getMessage());
}
?>