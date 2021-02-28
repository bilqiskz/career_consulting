<?= $this->extend('layout/reglog'); ?>


<?= $this->section('content'); ?>
<title>New Account</title>

<h4 class="text-center">Tambahkan User Baru</h4>
<hr class="my-4">
<?= view('Myth\Auth\Views\_message_block') ?>

<form action="<?= route_to('newuser') ?>" method="post" class="needs-validation" novalidate>
    <?= csrf_field() ?>

    <div class="form-group mb-3">
        <label>Hak User</label>
        <select class="form-control" name="hak_user">
            <option value="guru">guru</option>
            <option value="admin">admin</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="nip">NIP</label>
        <input type="number" class="form-control" name="nip" aria-describedby="nip" placeholder="Masukkan NIP" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="fullname">Nama Lengkap</label>
        <input type="text" class="form-control" name="fullname" aria-describedby="nama" placeholder="Masukkan Nama Lengkap" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="no_telp">Nomor Telepon</label>
        <input type="tel" class="form-control" name="no_telp" aria-describedby="telp" placeholder="Masukkan Nomor Telepon" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="form-group row">
        <div class="col mb-3">
            <label for="email">Email</label>
            <input type="email" value="<?= old('email') ?>" class="form-control" name="email" aria-describedby="email" placeholder="Masukkan Email" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" name=" username" aria-describedby="username" placeholder="Masukkan Username" required value="<?= old('username') ?>">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group mb-3 row">
        <div class="col mb-3">
            <label for="pass">Password</label>
            <input type="password" class="form-control" name="password" aria-describedby="password" placeholder="Masukkan Password" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col mb-3">
            <label for="pass">Ketik Ulang Password</label>
            <input type="password" class="form-control" name="pass_confirm" aria-describedby="password" placeholder="Masukkan Password" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Tambahkan</button>
    </div>
</form>

<?= $this->endSection(); ?>