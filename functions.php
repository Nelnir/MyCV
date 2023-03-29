<?php
require_once 'db_config.php';

function get_personal_info() {
    global $conn;

    $sql = "SELECT id, first_name, last_name, email, phone, about FROM personal_info";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
?>