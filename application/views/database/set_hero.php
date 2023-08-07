<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <th>Kalimat</th>
            <th>Gambar Background</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($set_hero_model as $shm) : ?>
            <tr>
                <td><?php echo $shm->kalimat ?></td>
                <td><?php echo $shm->gambar ?></td>
                <td><?php echo anchor('database/set_hero/edit/' . $shm->id_kalimat, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>