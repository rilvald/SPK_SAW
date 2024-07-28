<!-- judul -->
<div class="panel">
    <div class="panel-middle" id="judul">
        <img src="asset/image/rank.svg">
        <div id="judul-text">
            <h2 class="text-green">PENGELOLAAN PENGGUNA</h2>
            Halaman Administrator Pengelolaan Pengguna
        </div>
    </div>
</div>
<!-- judul -->
<div class="row">
    <div class="col-4">
        <div class="panel">
            <?php
            if (@htmlspecialchars($_GET['aksi']) == 'ubah') {
                include 'ubahpengguna.php';
            } else {
                include 'tambahpengguna.php';
            }
            ?>
        </div>
    </div>
    <div class="col-8">
        <div class="panel">
            <div class="panel-top">
                <b class="text-green">Daftar Pengguna</b>
            </div>
            <div class="panel-middle">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM user";
                        $execute = $konek->query($query);
                        
                        if ($execute->num_rows > 0) {
                            $no = 1;
                            while ($data = $execute->fetch_array(MYSQLI_ASSOC)) {
                                $id_admin = isset($data['Id_admin']) ? $data['Id_admin'] : null;
                                $username = isset($data['username']) ? $data['username'] : "Tidak ada username";
                                $role = isset($data['role']) ? $data['role'] : "Tidak ada role";
                        
                                if ($id_admin !== null) {
                                    echo "
                                    <tr id='data'>
                                        <td>$no</td>
                                        <td>$username</td>
                                        <td>$role</td>
                                        <td>
                                            <div class='norebuttom'>
                                                <a class='btn btn-light-green' href='./?page=pengguna&aksi=ubah&id=$id_admin'><i class='fa fa-pencil-alt'></i></a>
                                                <a class='btn btn-yellow' data-a='$username' id='hapus' href='./proses/proseshapus.php/?op=pengguna&id=$id_admin'><i class='fa fa-trash-alt'></i></a>
                                            </div>
                                        </td>
                                    </tr>";
                                    $no++;
                                } else {
                                    echo "<tr><td class='text-center text-green' colspan='4'><b>ID User tidak ditemukan</b></td></tr>";
                                }
                            }
                        } else {
                            echo "<tr><td class='text-center text-green' colspan='4'><b>Kosong</b></td></tr>";
                        }                        
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-bottom"></div>
        </div>
    </div>
</div>
