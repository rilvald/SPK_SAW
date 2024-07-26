<?php
require 'connect.php';
session_start();

$user = isset($_POST['username']) ? $_POST['username'] : null;
$pass = isset($_POST['password']) ? $_POST['password'] : null;

$result = "";

if (empty($user) && empty($pass)) {
    $result = "Username dan password tidak boleh kosong";
} elseif (empty($user)) {
    $result = "Username tidak boleh kosong";
} elseif (empty($pass)) {
    $result = "Password tidak boleh kosong";
} else {
    $query = "SELECT * FROM user WHERE username = ?";
    $stmt = $konek->prepare($query);
    if ($stmt === false) {
        $result = "Failed to prepare query: " . $konek->error;
    } else {
        $stmt->bind_param('s', $user);
        $stmt->execute();
        $resultSet = $stmt->get_result();

        if ($resultSet->num_rows > 0) {
            $data = $resultSet->fetch_array(MYSQLI_ASSOC);
            if (password_verify($pass, $data['password'])) {
                $_SESSION['user'] = $data['username'];
                $_SESSION['role'] = $data['role'];
                $result = "success";
            } else {
                $result = "Username dan Password tidak cocok";
            }
        } else {
            $result = "Username tidak terdaftar";
        }
    }
}

$response = array("result" => $result);
header('Content-Type: application/json');
echo json_encode($response);