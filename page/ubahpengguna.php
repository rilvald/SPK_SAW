<?php
$id = htmlspecialchars($_GET['id']);
$query = "SELECT * FROM user WHERE Id_admin='$id'";
$execute = $konek->query($query);
$data = $execute->fetch_array(MYSQLI_ASSOC);
?>
<div class="panel-middle">
    <h2 class="text-green">Ubah Pengguna</h2>
    <form action="./proses/prosesubahpengguna.php" method="POST">
        <input type="hidden" name="Id_admin" value="<?php echo $id; ?>">
        <div class="group-input">
            <label for="username">Username:</label>
            <input type="text" class="form-custom" id="username" name="username" required autocomplete="off" value="<?php echo $data['username']; ?>">
        </div>
        <div class="group-input">
            <label for="password">Password:</label>
            <input type="password" class="form-custom" id="password" name="password" placeholder="Kosongkan jika tidak diubah">
        </div>
        <div class="group-input">
            <label for="role">Role:</label>
            <select class="form-custom" id="role" name="role" required>
                <option value="adminpsa" <?php if ($data['role'] == 'adminpsa') echo 'selected'; ?>>Admin PSA</option>
                <option value="adminpba" <?php if ($data['role'] == 'adminpba') echo 'selected'; ?>>Admin PBA</option>
            </select>
        </div>
        <button type="submit" class="btn btn-green btn-full"><i class="fa fa-save text-white"></i> Ubah</button>
    </form>
</div>
