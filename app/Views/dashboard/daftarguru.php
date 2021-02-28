<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<main>
    <div class="container pt-2 mt-3">
        <h2 class="text-center font-weight-bold pb-3">Daftar Siswa</h2>
        <form action="" method="get">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" name="keyword" class="form-control" placeholder="Masukkan keyword pencarian..." aria-label="Cari" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Cari</button>
                    </div>
                </div>
            </div>
        </form>

        <table class="table text-center">
            <thead class=" bg-primary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Lengkap</th>
                    <!-- <th scope="col">Rating</th> -->
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($siswa as $s) : ?>
                    <tr>
                        <th class="align-middle" scope="row"><?= $i++; ?></th>
                        <td class="align-middle"><img src="<?= base_url('assets/images/guru/' . $s->user_image); ?>" alt=""></td>
                        <td class="align-middle"><?= $s->fullname; ?></td>
                        <!-- <td class="align-middle">
                            <p class="fa fa-star"></p>
                            <p class="fa fa-star"></p>
                            <p class="fa fa-star"></p>
                            <p class="fa fa-star"></p>
                            <p class="fa fa-star"></p>
                        </td> -->
                        <td class="align-middle"><a href="<?= base_url('dashboard/konsultasi/' . $s->id); ?>" class="btn btn-success">Mulai Konseling</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container pagi">
        <?= $pager->links('users', 'user_pagination'); ?>
    </div>
</main>
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