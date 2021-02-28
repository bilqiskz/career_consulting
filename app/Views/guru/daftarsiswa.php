<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<main>
    <div class="container pt-2 mt-5">
        <h2 class="text-center font-weight-bold pb-3">Daftar Siswa</h2>
        <form action="" method="get">
            <div class="form-row">
                <div class="form-group col-md-2 col-sm-6">
                    <select id="inputState" class="form-control" name="keyword">
                        <option selected value="">Jurusan</option>
                        <option value="rpl">RPL</option>
                        <option value="sija">SIJA</option>
                        <option value="Meka">Mekatronika</option>
                        <option value="toi">TOI</option>
                        <option value="tptu">TPTU</option>
                        <option value="iop">IOP</option>
                        <option value="eind">EIND</option>
                        <option value="pfpt">PFPT</option>
                    </select>
                </div>
                <div class="form-group col-md-2 col-sm-6">
                    <select id="inputState" class="form-control" name="keyword">
                        <option selected value="">Kelas</option>
                        <option value="x">X</option>
                        <option value="xii">XI</option>
                        <option value="xii">XII</option>
                        <option value="xii">XIII</option>
                    </select>
                </div>
                <div class="form-group col-md-8 col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder="Masukkan keyword pencarian..." aria-label="Cari" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <table class="table text-center">
            <thead class=" bg-primary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($siswa as $s) : ?>
                    <tr>
                        <th class="align-middle" scope="row"><?= $i++; ?></th>
                        <td class="align-middle"><img src="<?= base_url('assets/images/siswa/' . $s->user_image); ?>" alt=""></td>
                        <td class="align-middle"><?= $s->nis; ?></td>
                        <td class="align-middle"><?= $s->fullname; ?></td>
                        <td class="align-middle"><?= $s->kelas; ?>-<?= $s->jurusan; ?>-<?= $s->rombel; ?></td>
                        <td class="align-middle"><a role="button" class="text-white btn btn-primary btn-edit" data-id="<?= $s->id; ?>" data-name="<?= $s->fullname; ?>" data-kelas="<?= $s->kelas; ?>" data-nis="<?= $s->nis; ?>" data-jurusan="<?= $s->jurusan; ?>" data-rombel="<?= $s->rombel; ?>" data-no_telp="<?= $s->no_telp; ?>" data-email="<?= $s->email; ?>" data-alamat="<?= $s->alamat; ?>" data-gambar="<?= $s->image_user; ?>">Detail</a>
                            <a href="<?= base_url('dashboard/konsultasi/' . $s->id); ?>" class="btn btn-success">Mulai Konseling</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="konsulmodal" tabindex="-1" role="dialog" aria-labelledby="konsulmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="konsulmodalLabel">Profil Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body pl-5">
                            <label for="_nis">Nis : </label>
                            <input type="text" class="_nis  bg-white" name="_nis" style="border: none;" disabled><br>
                            <label for="_name">Nama Lengkap : </label>
                            <input type="text" class="_name bg-white" name="_name" style="border: none;" disabled><br>
                            <label for="_kelas">Kelas : </label>
                            <input type="text" class="_kelas  bg-white" name="_kelas" style="border: none;" disabled><br>
                            <label for="_no_telp">Nomor Telpon : </label>
                            <input type="text" class="_no_telp  bg-white" name="_no_telp" style="border: none;" disabled><br>
                            <label for="_email">Email : </label>
                            <input type="text" class="_email  bg-white" name="_email" style="border: none;" disabled><br>
                            <label for="_no_telp">Alamat : </label>
                            <input type="text" class="_alamat  bg-white" name="_alamat" style="border: none;" disabled><br>
                            <hr>
                            <label for="_id">Total konseling : </label>
                            <input type="text" class="_id  bg-white" name="_id" style="border: none;" disabled><br>
                            <!-- <a class="btn btn-secondary" data-bs-dismiss="modal">Kembali</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    $(document).ready(function() {

        // get Edit Product
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const kelas = $(this).data('kelas');
            const jurusan = $(this).data('jurusan');
            const rombel = $(this).data('rombel');
            const kelass = [kelas, jurusan, rombel]
            const no_telp = $(this).data('no_telp');
            const nis = $(this).data('nis');
            const alamat = $(this).data('alamat');
            const email = $(this).data('email');
            // const gambar = $(this).data('gambar');
            // Set data to Form Edit
            $('._id').val(id);
            $('._name').val(name);
            $('._kelas').val(kelass.join('-'));
            $('._jurusan').val(jurusan);
            $('._rombel').val(rombel);
            $('._no_telp').val(no_telp);
            $('._nis').val(nis);
            $('._alamat').val(alamat);
            $('._email').val(email);
            // $('._gambar').val(gambar);
            // $("#image").attr('src', '<?= base_url('assets/images/siswa/') ?>' + gambar);
            // Call Modal Edit
            $('#konsulmodal').modal('show');
        });

    });
</script>

<?= $this->endSection(); ?>