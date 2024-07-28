<div class="panel-middle">
    <h2 class="text-green">Tambah Pengguna</h2>
    <form action="./proses/prosestambahpengguna.php" method="POST">
        <div class="group-input">
            <label for="username">Username:</label>
            <input type="text" class="form-custom" id="username" name="username" required autocomplete="off" placeholder="Username">
        </div>
        <div class="group-input">
            <label for="password">Password:</label>
            <input type="password" class="form-custom" id="password" name="password" required autocomplete="off" placeholder="Password">
        </div>
        <div class="group-input">
            <label for="role">Role:</label>
            <select class="form-custom" id="role" name="role" required>
                <option value="adminpsa">Admin PSA</option>
                <option value="adminpba">Admin PBA</option>
            </select>
        </div>
        <button type="submit" class="btn btn-green btn-full"><i class="fa fa-plus-circle text-white"></i> Tambah</button>
    </form>
</div>
