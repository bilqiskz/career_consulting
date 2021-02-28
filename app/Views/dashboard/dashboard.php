<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<div class="container-fluid greeting">
    <div class="row">
        <div class="col-lg-10 col-md-5 col-10">
            <div class="greet">
                <h1>Halo, <?= user()->username; ?></h1>
                <p><?= user()->email; ?></p>
            </div>
        </div>
        <div class="col-lg-2 col-md-7 col-2">
            <img class="rounded-circle" alt="100x100" src="<?= base_url(); ?>/assets/images/icons/<?= user()->user_image; ?>" data-holder-rendered="true">
        </div>
    </div>
</div>

<main>
    <div class="alert alert-info text-success text-center mr-2 ml-2" role="alert">
        Total konseling kamu : 0
    </div>

    <div class="dsb-menu">
        <div class="row">
            <?php if (in_groups('user')) : ?>
                <!-- <div class="column col-lg-4 col-md-4 col-sm-6">
                    <div class="card bg-light">
                        <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                        <h4>Guru BK</h4>
                    </div>
                </div> -->

                <!-- <div class="column col-lg-4 col-md-4 col-sm-6">
                    <div class="card bg-light">
                        <img src="<?= base_url('assets/images/icons/kalender.svg'); ?>" alt="jadwal-bk">
                        <h4>Jadwal BK</h4>
                    </div>
                </div> -->
            <?php endif; ?>

            <?php if (in_groups('admin')) : ?>
                <div class="column col-lg-4 col-md-4 col-sm-6">
                    <a href="\admin\manage">
                        <div class="card bg-light">
                            <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                            <h4>Manage User</h4>
                        </div>
                    </a>
                </div>

                <div class="column col-lg-4 col-md-4 col-sm-6">
                    <div class="card bg-light">
                        <a href="\admin\newuser">
                            <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                            <h4>Tambah user baru</h4>
                        </a>
                    </div>
                </div>
            <?php endif; ?>


            <!-- <div class="column col-lg-4 col-md-4 col-sm-6">
                <div class="card bg-light">
                    <img src="<?= base_url('assets/images/icons/guru.svg'); ?>" alt="wali-kelas">
                    <h4>Wali Kelas</h4>
                </div>
            </div>

            <?php if (in_groups('guru')) : ?>
                <div class="column col-lg-4 col-md-4 col-sm-6">
                    <a href="\daftarsiswa" style="text-decoration: none; color: #343434;">
                        <div class="card bg-light">
                            <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                            <h4>Daftar Siswa</h4>
                        </div>
                    </a>
                </div>

                <div class="column col-lg-4 col-md-4 col-sm-6">
                    <div class="card bg-light">
                        <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                        <h4>-</h4>
                    </div>
                </div>
            <?php endif; ?> -->
        </div>
    </div>

    <div class="mt-5 mb-5"></div>

</main>


<?= $this->endSection(); ?>