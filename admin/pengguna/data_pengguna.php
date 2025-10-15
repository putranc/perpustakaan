<?php
include "inc/koneksi.php";
?>

<section class="content-header">
    <h1>Manajemen Pengguna</h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">Data Pengguna</li>
    </ol>
</section>

<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Pengguna Sistem</h3>
            <a href="?page=MyApp/add_pengguna" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Tambah Pengguna
            </a>
        </div>

        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="text-align:center; width: 5%;">No</th>
                        <th style="text-align:center;">Nama Pengguna</th>
                        <th style="text-align:center;">Username</th>
                        <th style="text-align:center;">Level</th>
                        <th style="text-align:center; width: 20%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $sql = $koneksi->query("SELECT * FROM tb_pengguna ORDER BY id_pengguna ASC");
                while ($data = $sql->fetch_assoc()) {
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no++; ?></td>
                        <td><?php echo $data['nama_pengguna']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td style="text-align:center;"><?php echo $data['level']; ?></td>
                        <td style="text-align:center;">
                            <a href="?page=MyApp/edit_pengguna&kode=<?php echo $data['id_pengguna']; ?>" title="Ubah Data" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="?page=MyApp/del_pengguna&kode=<?php echo $data['id_pengguna']; ?>" 
                               onclick="return confirm('Yakin hapus pengguna ini?')" 
                               title="Hapus Data" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
