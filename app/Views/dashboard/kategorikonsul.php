<?= $this->extend('layout/reglog'); ?>


<?= $this->section('content'); ?>
<title><?= $title; ?></title>
<h3 class="text-center pb-3"><b>Halo, <?= user()->username; ?><br>Kami siap membantumu :)</b></h3>
<hr>
<p>Sampaikan Permasalahan karir yang kamu hadapi. Seluruh informasi yang kamu sampaikan akan kami <b>jaga kerahasiannya</B></p>
<form action="<?= base_url('dashboard/masukan/' . $id); ?>" method="POST">
    <div class="mb-3">
        <select name="opt" id="opt" class="form-select">
            <option value="Kesulitan menentukan karir">Kesulitan menentukan karir</option>
            <option value="Kesulitan menentukan perguruan tinggi">Kesulitan menentukan perguruan tinggi</option>
            <option value="Kuliah atau kerja?">Kuliah atau kerja?</option>
            <option value="Minat dan bakat">Minat dan bakat</option>
            <option value="Lainnya">Lainnya</option>
        </select>
        <div class="form-text">Pilih kategori Permasalahanmu</div>
    </div>
    <div class="mb-3">
        <input type="text" name="judul" id="judul" class="form-control" required>
        <div class="form-text">Tulis Judul Permasalahanmu</div>
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="masalah" name="masalah" required></textarea>
        <div class="form-text">Tulis Permasalahanmu</div>
    </div>
    <button type="submit" class="btn btn-primary w-100" id="btn-save">Lanjutkan</button>
</form>

<!-- href="<= base_url('dashboard/konsultasi/' . $id); ?>" -->
<?= $this->endSection(); ?>