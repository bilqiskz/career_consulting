<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<main class="kns">
    <div class="container">
        <div class="col-lg-12 card-margin">
            <div class="card search-form">
                <div class="card-body p-0">
                    <form id="search-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="row no-gutters">
                                    <!-- USER -->
                                    <?php if (in_groups('user')) : ?>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Filter</option>
                                                <option>RPL</option>
                                                <option>SIJA</option>
                                                <option>TEI</option>
                                                <option>TPTU</option>
                                                <option>PFPT</option>
                                                <option>TOI</option>
                                                <option>IOP</option>
                                                <option></option>
                                            </select>
                                        </div>
                                    <?php endif; ?>

                                    <!-- NOT USER -->
                                    <?php if (in_groups('admin')) : ?>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Jurusan</option>
                                                <option>RPL</option>
                                                <option>SIJA</option>
                                                <option>TEI</option>
                                                <option>TPTU</option>
                                                <option>PFPT</option>
                                                <option>TOI</option>
                                                <option>IOP</option>
                                                <option></option>
                                            </select>
                                        </div>
                                    <?php endif; ?>

                                    <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                        <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                    </div>
                                    <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                        <button type="submit" class="btn btn-base">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 pl-3 det-riwayat">
        <div class="col-6">
            <p id="riwayat">Riwayat Konsultasi:</p>
        </div>
        <div class="col-6">
            <p id="riwayat" class="float-right pr-3">Menampilkan <b>3</b> dari <b>10</b></p>
        </div>
    </div>

    <?php if (in_groups('user')) : ?>
        <div class="container mb-5 pb-4">
            <div class="row mb-2">
                <div class="col-md-12 kns-konten">
                    <p class="mb-2 mt-3">Nama Guru : Kishibe Rohan <span class="badge badge-success float-right mt-3">Selesai</span></p>
                    <h4 class="font-weight-bold">Bingung antara masuk kuliah atau bekerja</h4>
                    <p class="mt-4 text-muted">Tanggal : 23 September 2020</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12 kns-konten">
                    <p class="mb-2 mt-3">Nama Guru : Caesar <span class="badge badge-danger float-right mt-3">Belum Selesai</span></p>
                    <h4 class="font-weight-bold">Saya ditolak bekerja berkali-kali</h4>
                    <p class="mt-4 text-muted">Tanggal : 17 Mei 2020</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12 kns-konten">
                    <p class="mb-2 mt-3">Nama Guru : Kishibe Rohan <span class="badge badge-success float-right mt-3">Selesai</span></p>
                    <h4 class="font-weight-bold">Bingung antara masuk kuliah atau bekerja</h4>
                    <p class="mt-4 text-muted">Tanggal : 23 September 2020</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <a href="/dashboard/konsultasi" target="_blank" class="float">
        <i class="fa fa-plus my-float"></i>
    </a>
</main>
<?= $this->endSection(); ?>