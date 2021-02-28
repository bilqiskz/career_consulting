<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<main class="kns bg-white">
    <div class="container">

        <form action="" method="get">
            <div class="form-row mt-4">
                <div class="col-md-6 col-12 pb-3">Riwayat Konseling</div>
                <div class="form-group col-md-6 col-12">
                    <div class="input-group mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder="Masukkan keyword pencarian..." aria-label="cari" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php

    use Config\Database;

    if (in_groups('user')) : ?>
        <div class="container mb-5 pb-4">
            <?php foreach ($riwayat as $riwayat) : ?>
                <div class="kns-konten">
                    <div class="row mb-2">
                        <div class="col-md-11 col-sm-10">
                            <p class="pt-3"><small>Nama Guru : <?= $riwayat->nama_guru; ?></small></p>
                            <h4 class="font-weight-bold"><?= $riwayat->judul; ?></h4>
                            <p><i class="fa fa-folder-open pr-3"></i>Kategori : <?= $riwayat->kategori; ?></p>
                            <!-- <p>rating yang diberikan : </p>
                                        <p class="fa fa-star"></p>
                                        <p class="fa fa-star"></p>
                                        <p class="fa fa-star"></p>
                                        <p class="fa fa-star"></p>
                                        <p class="fa fa-star"></p><br> -->
                            <p class="badge badge-success">selesai</p>
                        </div>
                        <div class="col-md-1 col-sm-2 pt-5 float-right">
                            <a href="">
                                <div class="btn btn-primary float-right">Detail</div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <!-- <div class="container pagi">
        < $pager->links('users', 'user_pagination'); ?>
    </div> -->
    <a class="float bg-success" data-toggle="modal" data-target="#konsulmodal">
        <div class="my-float">+ Tambah konsul</div>
    </a>

    <!-- MODAL KATEGORI KONSULTASI -->
    <div class="modal fade" id="konsulmodal" tabindex="-1" role="dialog" aria-labelledby="konsulmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="konsulmodalLabel">Konsultasi Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <table class="table">
                            <tbody id="dataguru">
                                <script>
                                    var html = "";
                                    <?php
                                    $this->db      = \Config\Database::connect();
                                    $this->tabel = $this->db->table('users');
                                    $this->tabel->select('*');
                                    $this->tabel->where('users.nis', null);
                                    $this->query = $this->tabel->get();
                                    $data = $this->query->getResult();

                                    foreach ($data as $g) : ?>
                                        html += "<tr>";
                                        html += "<td><img src='<?= base_url('assets/images/icons/' . $g->user_image); ?>'></img></td > ";
                                        html += "<td class='align-middle'><?= $g->fullname; ?><br><p class='fa fa-star'></p><br></td>";
                                        html += "<td class='align-middle'><a href='<?= base_url('dashboard/kategorikonsul/' . $g->id); ?>' class='btn btn-primary'>Konsultasi</a></td>";
                                        html += "</tr>";
                                    <?php endforeach; ?>
                                    document.getElementById("dataguru").innerHTML += html;
                                </script>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</main>
<?= $this->endSection(); ?>