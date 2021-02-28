<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<div class="container-fluid greeting">
    <div class="row">
        <div class="col-10">
            <div class="greet">
                <h1>Halo, <?= user()->username; ?></h1>
                <p><?= user()->email; ?></p>
            </div>
        </div>
        <div class="col-2">
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
                <div class="column col-lg-4 col-md-4 col-12">
                    <div class="card bg-light">
                        <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                        <h4>Riwayat Konselingku</h4>
                    </div>
                </div>

                <div class="column col-lg-4 col-md-4 col-12">
                    <div class="card bg-light">
                        <img src="<?= base_url('assets/images/icons/kalender.svg'); ?>" alt="jadwal-bk">
                        <h4>Jadwal BK</h4>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_groups('admin')) : ?>
                <div class="column col-lg-4 col-md-4 col-12">
                    <div class="card bg-light">
                        <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                        <h4>Riwayat Konseling Siswa</h4>
                    </div>
                </div>

                <div class="column col-lg-4 col-md-4 col-12">
                    <div class="card bg-light">
                        <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                        <h4>Tambah user baru</h4>
                    </div>
                </div>
            <?php endif; ?>


            <div class="column col-lg-4 col-md-4 col-12">
                <div class="card bg-light">
                    <img src="<?= base_url('assets/images/icons/guru.svg'); ?>" alt="wali-kelas">
                    <h4>Wali Kelas</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 mb-5"></div>

</main>


<?= $this->endSection(); ?>