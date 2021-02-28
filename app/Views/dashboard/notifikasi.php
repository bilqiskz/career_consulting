<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<main class="notif">
    <h2 class="font-weight-bold">Notifikasi</h2>
    <!-- <div class="float-right">Tandai semua sudah dibaca</div> -->
    <div class="alert alert-primary " role="alert">
        <h5>This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</h5>
        <p class="mb-0 text-muted">4 hours ago</p>
    </div>
    <div class="alert alert-primary " role="alert">
        <h5>This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</h5>
        <p class="mb-0 text-muted">4 hours ago</p>
    </div>
</main>
<?= $this->endSection(); ?>