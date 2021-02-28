<nav class="navbar">
    <ul class="navbar-nav">
        <li class="logo">
            <a href="#" class="nav-link">
                <span class="link-text logo-text">BK SMKN 1 Cimahi</span>
                <i class="fas fa-angle-double-right fa-2x" role="img"></i>
            </a>
        </li>
        <?php if (in_groups('user')) : ?>
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="fas fa-home fa-2x" role="img"></i>
                    <span class="link-text">Beranda</span>
                </a>
            </li>
        <?php endif; ?>

        <?php if (in_groups('admin')) : ?>
            <li class="nav-item">
                <a href="/admin" class="nav-link">
                    <i class="fas fa-home fa-2x" role="img"></i>
                    <span class="link-text">Beranda</span>
                </a>
            </li>
        <?php endif; ?>

        <?php if (in_groups('guru')) : ?>
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="fas fa-home fa-2x" role="img"></i>
                    <span class="link-text">Beranda</span>
                </a>
            </li>
        <?php endif; ?>
        <?php if (in_groups('user')) : ?>
            <li class="nav-item">
                <a href="/konseling" class="nav-link">
                    <i class="fas fa-comments fa-2x" role="img"></i>
                    <span class="link-text">Konsultasi</span>
                </a>
            </li>
        <?php endif; ?>

        <?php if (in_groups('guru')) : ?>
            <li class="nav-item">
                <a href="/guru_konseling" class="nav-link">
                    <i class="fas fa-comments fa-2x" role="img"></i>
                    <span class="link-text">Konsultasi</span>
                </a>
            </li>
        <?php endif; ?>

        <?php if (in_groups('user')) : ?>
            <li class="nav-item">
                <a href="/daftarguru" class="nav-link">
                    <i class="fas fa-users fa-2x" role="img"></i>
                    <span class="link-text">Daftar Guru BK</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/profil" class="nav-link">
                    <i class="fas fa-user fa-2x" role="img"></i>
                    <span class="link-text">Profil</span>
                </a>
            </li>
        <?php endif ?>

        <?php if (in_groups('admin')) : ?>
            <li class="nav-item">
                <a href="/admin_profil" class="nav-link">
                    <i class="fas fa-user fa-2x" role="img"></i>
                    <span class="link-text">Profil</span>
                </a>
            </li>
        <?php endif ?>

        <?php if (in_groups('guru')) : ?>
            <li class="nav-item">
                <a href="/daftarsiswa" class="nav-link">
                    <i class="fas fa-users fa-2x" role="img"></i>
                    <span class="link-text">Daftar Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/guru_profil" class="nav-link">
                    <i class="fas fa-user fa-2x" role="img"></i>
                    <span class="link-text">Profil</span>
                </a>
            </li>
        <?php endif ?>
        <li></li>

    </ul>
</nav>