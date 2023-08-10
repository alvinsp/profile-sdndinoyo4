<div class="container-fluid">
    <h4><b>SETTING ESKUL</b></h4>
    <table class="table table-bordered">
        <tr>
            <th>Nama Eskul</th>
            <th>Icon Eskul</th>
            <th>Deskripsi Eskul</th>
            <th colspan="2">Gambar Background</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($set_eskul_model as $sem) : ?>
            <tr>
                <td><?php echo $sem->nama_eskul ?></td>
                <td><img src="<?php echo base_url('assets/database/img/icon_eskul/'.$sem->icon_eskul)?>" alt="futsal" width="80" height="80"></td>
                <td><?php echo $sem->deskripsi_eskul ?></td>
                <td><img src="<?php echo base_url('assets/database/img/foto_kegiatan_eskul/'.$sem->foto_kegiatan)?>" alt="<?php echo $sem->nama_eskul?>" width="80" height="80"></td>
        <?php endforeach; ?>
    </table>
</div>
