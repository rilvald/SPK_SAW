<?php
require '../connect.php';

$id = htmlspecialchars($_POST['Id_admin']);
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$role = htmlspecialchars($_POST['role']);

if (empty($password)) {
    $query = "UPDATE user SET username=?, role=? WHERE Id_admin=?";
    $stmt = $konek->prepare($query);
    $stmt->bind_param('ssi', $username, $role, $id);
} else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "UPDATE user SET username=?, password=?, role=? WHERE Id_admin=?";
    $stmt = $konek->prepare($query);
    $stmt->bind_param('sssi', $username, $hashedPassword, $role, $id);
}

if ($stmt->execute()) {
    header('Location: ../index.php?page=pengguna');
} else {
    echo "Error: " . $stmt->error;
}