<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<main class="profil mt-2">
    <h3 class="text-center font-weight-bold pt-4 pb-3">Profil Pengguna</h3>
    <?= view('Myth\Auth\Views\_message_block') ?>
    <form method="POST" enctype="multipart/form-data" action="/update">
        <?= csrf_field() ?>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12 prof">
                <div id='profile-upload'>
                    <img id='foto' src="<?= base_url('assets/images/icons/' . user()->user_image) ?>" alt="" style="width: 100%;">

                    <div class="hvr-profile-img">
                        <input type="file" name="logo" id='getval' class="upload" id="imag">

                        <div class="icon" id="icon">
                            <div class="camera4"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-12 prof2">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value="<?= user()->email; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" value="<?= user()->password_hash; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="Username" class="form-control" name="username" id="inputPassword4" placeholder="username" value="<?= user()->username; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tt">NIP</label>
                        <input type="number" class="form-control" name="nip" id="inputPassword4" placeholder="nip" value="<?= user()->nip; ?>">
                    </div>
                </div>

                <!-- <button type="submit" class="btn btn-primary mb-3">Simpan Perubahan</button> -->
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="fullname" aria-describedby="NIShelp" placeholder="fullname" value="<?= user()->fullname; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputNomor">Nomor Telp</label>
                    <input type="number" class="form-control" id="exampleInpuNis" name="no_telp" aria-describedby="NIShelp" placeholder="Masukkan Nomor Telepon" value="<?= user()->no_telp; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?= user()->alamat; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
    </form>
    <a href="<?= base_url('logout'); ?>">logout</button>
</main>

<script>
    document.getElementById('getval').addEventListener('change', readURL, true);

    function readURL() {
        var file = document.getElementById("getval").files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";
            document.getElementById('icon').style.display = "none";
            document.getElementById('foto').style.display = "none";
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {}
    }
</script>
<?= $this->endSection(); ?>