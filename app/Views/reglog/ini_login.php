<?= $this->extend('layout/reglog'); ?>


<?= $this->section('content'); ?>
<title>Login</title>
<?= view('Myth\Auth\Views\_message_block') ?>
<h4 class="text-center">LOGIN</h4>
<?php if ($config->allowRegistration) : ?>
    <p class="text-center">Belum punya akun? <a href="<?= route_to('register') ?>"><?= lang('Auth.signIn') ?></a></p>
<?php endif; ?>
<hr class="my-4">
<form action="<?= route_to('login') ?>" method="post" class="needs-validation" novalidate>
    <?= csrf_field() ?>
    <div class="form-group mb-3">
        <?php if ($config->validFields === ['email']) : ?>
            <label for="email">Email atau username</label>
            <input type="email" class="form-control mb-3" id="email" aria-describedby="email" placeholder="Masukkan Email Anda" required name="login" value="<?= old('email'); ?>">
            <div class="valid-feedback">
                <?= session('errors.login') ?>
            </div>
        <?php else : ?>
            <label for="email">Email atau username </label>
            <input type="text" class="form-control mb-3" name="login" aria-describedby="username" placeholder="Masukkan Username Anda" required>
            <div class="valid-feedback">
                <?= session('errors.login') ?>
            </div>
        <?php endif; ?>
        <label for="password">Password</label>
        <input type="password" class="form-control mb-3" placeholder="<?= lang('Auth.password') ?>" aria-describedby="password" placeholder="Masukkan Password Anda" required name="password" autocomplete="off">
        <div class="valid-feedback">
            <?= session('errors.login') ?>
        </div>

        <?php if ($config->allowRemembering) : ?>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                    <?= lang('Auth.rememberMe') ?>
                </label>
            </div>
        <?php endif; ?>
    </div>
    <button class="btn btn-primary" type="submit"><?= lang('Auth.loginAction') ?></button>
</form>
<?= $this->endSection(); ?>