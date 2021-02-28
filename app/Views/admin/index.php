<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<div class="container-fluid greeting">
    <div class="row">
        <div class="col-11">
            <div class="greet">
                <h1><?= user()->fullname; ?></h1>
                <p><?= user()->email; ?></p>
            </div>
        </div>
        <div class="col-1">
            <img class="rounded-circle" alt="100x100" src="<?= base_url('assets/images/admin/' . user()->user_image); ?>" data-holder-rendered="true">
        </div>
    </div>
</div>

<main>
    <div class="alert alert-info text-success text-center mr-2 ml-2" role="alert">
        Jumlah akun : 0
    </div>


    <div class="dsb-menu">
        <div class="row">
            <div class="column col-lg-4 col-md-4 col-12">
                <a href="\admin\manage">
                    <div class="card bg-light">
                        <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                        <h4>Manage User</h4>
                    </div>
                </a>
            </div>

            <div class="column col-lg-4 col-md-4 col-12">
                <a href="\admin\newuser">
                    <div class="card bg-light">
                        <img src="<?= base_url('assets/images/icons/kalender.svg'); ?>" alt="jadwal-bk">
                        <h4>Tambah user baru</h4>
                    </div>
                </a>
            </div>


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