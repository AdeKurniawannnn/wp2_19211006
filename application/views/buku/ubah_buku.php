<div class="container">
    <?= form_open_multipart('buku/ubahBuku/' . $buku[0]['id']); ?>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?= $buku[0]['judul_buku']; ?>">
        <?= form_error('judul_buku', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <select name="id_kategori" class="form-control form-control-user">
            <option value="">Pilih Kategori</option>
            <?php
            foreach ($kategori as $k) { ?>
                <option value="<?= $k['id_kategori']; ?>" <?= $buku[0]['id_kategori'] == $k['id_kategori'] ? "selected" : ""; ?>><?= $k['nama_kategori']; ?></option>
            <?php } ?>
        </select>
        <?= form_error('id_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang" value="<?= $buku[0]['pengarang']; ?>">
        <?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit" value="<?= $buku[0]['penerbit']; ?>">
        <?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <select name="tahun" class="form-control form-control-user">
            <option value="">Pilih Tahun</option>
            <?php
            for ($i = date('Y'); $i > 1000; $i--) {
            ?>
                <option value="<?= $i; ?>" <?= $buku[0]['tahun_terbit'] == $i ? "selected" : ""; ?>><?= $i; ?></option>
            <?php } ?>
            <?php print_r($i); ?>
        </select>
        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value="<?= $buku[0]['isbn']; ?>">
        <?= form_error('isbn', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok" value="<?= $buku[0]['stok']; ?>">
        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3" align="center">
                <img src="<?= base_url('assets/img/upload/') . $buku[0]['image']; ?>" class="img-thumbnail" alt="">
                <font>Gambar Sebelumnya ...</font>
            </div>
            <input type="hidden" name="old_pict" value="<?= $buku[0]['image']; ?>">
            <div class="col-sm-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Pilih file</label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url('buku'); ?>" type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</a>
        <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Ubah</button>
    </div>
</div>