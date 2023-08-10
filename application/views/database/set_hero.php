<div class="container-fluid">
    <table class="table table-bordered">
        <h4><b>SETTING HERO</b></h4>
        <tr>
            <th>Kalimat</th>
            <th colspan="2">Gambar Background</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($set_hero_model as $shm) : ?>
            <tr>
                <td><?php echo $shm->kalimat ?></td>
                <td><?php echo $shm->gambar ?></td>
                <td>
                    <img src="<?php echo base_url('assets/database/img/' . $shm->gambar); ?>" alt="gambar-background" width="100" height="80">
                </td>
                <td>
                    <?php echo anchor('database/set_hero/edit/' . $shm->id_kalimat, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>