<?= $this->extend('layout/reglog'); ?>


<?= $this->section('content'); ?>
<title>Register</title>


<h4 class="text-center">DAFTAR AKUN</h4>
<p class="text-center">Sudah punya akun? <a href="<?= route_to('login') ?>">login</a></p>
<hr class="my-4">
<?= view('Myth\Auth\Views\_message_block') ?>

<form action="<?= route_to('register') ?>" method="post" class="needs-validation" novalidate>
    <?= csrf_field() ?>
    <div class="form-group mb-3">
        <label for="nis">NIS</label>
        <input type="number" class="form-control" name="nis" aria-describedby="nis" placeholder="Masukkan NIS" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="fullname">Nama Lengkap</label>
        <input type="text" class="form-control" name="fullname" aria-describedby="nis" placeholder="Masukkan Nama Lengkap" required>
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
    <div class="form-group mb-3 row">
        <div class="col-md-4">
            <label for="inputState4">Jurusan</label>
            <select id="inputState4" class="form-control" name="jurusan">
                <option selected>pilih</option>
                <option>RPL</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState5">Kelas</label>
            <select id="inputState5" class="form-control" name="kelas">
                <option selected>pilih</option>
                <option>X</option>
                <option>XI</option>
                <option>XII</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState6">Rombel</label>
            <select id="inputState6" class="form-control" name="rombel">
                <option selected>pilih</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
            </select>
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
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
        <button class="btn btn-primary" type="submit">DAFTAR SEKARANG</button>
    </div>
</form>

<?= $this->endSection(); ?>