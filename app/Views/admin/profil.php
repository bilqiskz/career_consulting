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
                        <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" value="password">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= user()->username; ?>">
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
        <!-- <div class="row">
            <div class="col-md-3 card">
                <h5 class="text-center pt-4">Foto Profil Anda</h5>
                <div class="avatar-me mx-auto mb-4">
                    <img id="avatar" src=" base_url('assets/images/icons/user.png');"> 
                </div>
                <div class="form-group pb-4">
                    <label for="exampleFormControlFile1">Ganti Poto Profil</label>
                    <div class="custom-file">
                        <input id="choose" type="file" name="img_file" class="custom-file-input" accept="image/*" files="" onchange="document.getElementById('avatar').src = window.URL.createObjectURL(this.files[0])" />
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <input id=deletePhoto type='submit' name="edit" value="Delete Photo" class="btn btn-danger mt-3 btn-block" onclick="document.getElementById('avatar').src =''">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body"></div>
                </div>
            </div>
        </div> -->
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