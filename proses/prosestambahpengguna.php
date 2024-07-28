<?php
require '../connect.php';

$username = htmlspecialchars($_POST['username']);
$password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
$role = htmlspecialchars($_POST['role']);

$query = "INSERT INTO user (username, password, role) VALUES (?, ?, ?)";
$stmt = $konek->prepare($query);
$stmt->bind_param('sss', $username, $password, $role);

if ($stmt->execute()) {
    header('Location: ../index.php?page=pengguna');
} else {
    echo "Error: " . $stmt->error;
}
