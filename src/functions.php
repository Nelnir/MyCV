<?php
require_once 'config/db_config.php';

function get_personal_info() {
    global $conn;

    $sql = "SELECT * FROM personal_info";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
?>