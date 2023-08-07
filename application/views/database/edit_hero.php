<?php foreach ($set_hero as $sh) : ?>
    <div class="container-fluid">
        <h3><i class="fa fa-desktop"></i>EDIT SETTING HERO</h3>
        <form method="post" action="<?php echo base_url() . 'database/set_hero/update/' ?>">
            <div class="form-group">
                <label>Kalimat</label>
                <input type="hidden" name="id_kalimat" value="<?php echo $sh->id_kalimat ?>">
                <input type="text" name="kalimat" class="form-control" value="<?php echo $sh->kalimat ?>">
            </div>

            <div class="form-group">
                <label>Gambar Background</label>
                <input type="file" name="gambar" class="form-control" value="<?php echo $sh->gambar ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo base_url() . 'database/set_hero' ?>" class="btn btn-warning">Kembali</a>
        </form>
    </div>
<?php endforeach; ?>