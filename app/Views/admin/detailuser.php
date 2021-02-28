<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<main>
    <h3>User Detail</h3>
    <div class="container bcontent">
        <div class="card" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="<?= base_url('assets/images/icons/' . $user->user_image); ?>" alt="<?= $user->username; ?>">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4><?= $user->username; ?></h4>
                            </li>
                            <?php if ($user->fullname) : ?>
                                <li class="list-group-item"><?= $user->fullname; ?></li>
                            <?php endif; ?>
                            <li class="list-group-item"><?= $user->email; ?></li>
                            <li class="list-group-item"><span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning' ?>"><?= $user->name; ?></span></li>
                            <li class="list-group-item"><a href="<?= base_url('admin/manage'); ?>">&laquo; kembali ke user list</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>


<?= $this->endSection(); ?>