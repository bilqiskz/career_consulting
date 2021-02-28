<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>


<main class="kns bg-white">
    <div class="row mt-4 det-riwayat">
        <div class="col-12 ml-4 pb-3">
            Riwayat Konseling
        </div>
        <!-- <div class="col-6">
            <p id="riwayat" class="float-right pr-3">Menampilkan <b>3</b> dari <b>10</b></p>
        </div> -->
    </div>
    <div class="container">
        <form action="" method="get">
            <div class="form-row">
                <div class="form-group col-md-2 col-sm-6">
                    <select id="inputState" class="form-control" name="keyword">
                        <option selected value="">Jurusan</option>
                        <option value="rpl">RPL</option>
                        <option value="sija">SIJA</option>
                        <option value="Meka">Mekatronika</option>
                        <option value="toi">TOI</option>
                        <option value="tptu">TPTU</option>
                        <option value="iop">IOP</option>
                        <option value="eind">EIND</option>
                        <option value="pfpt">PFPT</option>
                    </select>
                </div>
                <div class="form-group col-md-2 col-sm-6">
                    <select id="inputState" class="form-control" name="keyword">
                        <option selected value="">Kelas</option>
                        <option value="x">X</option>
                        <option value="xii">XI</option>
                        <option value="xii">XII</option>
                        <option value="xii">XIII</option>
                    </select>
                </div>
                <div class="form-group col-md-8 col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder="Masukkan keyword pencarian..." aria-label="Cari" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div>asjdaskd</div>
    <?php if (in_groups('guru')) : ?>
        <div class="container mb-5 pb-4">
            <?php foreach ($riwayat as $s) : ?>
                <div class="row mb-2">
                    <div class="col-md-12 kns-konten">
                        <div class="row">
                            <div class="col-md-11 col-sm-10">
                                <h5><?= $s->nama_guru; ?></h5>
                            </div>
                            <div class="col-md-1 col-sm-2 pt-4 float-right">
                                <a href="<?= base_url('dashboard/riwayat/' . $s->id); ?>">
                                    <div class="btn btn-primary float-right">Detail</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="container pagi">
        <?= $pager->links('users', 'user_pagination'); ?>
    </div>
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
                        <!-- <div class="form-group">
                            <label class="col-form-label">Pilih kategori</label>
                            <select name="kateg_konsul" id="" class="form-control">
                                <option value="">karir</option>
                                <option value="">karir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tujuan konsultasi</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Tulis Permasalahanmu di sini</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div> -->
                        <table class="table">
                            <tbody id="dataguru">
                                <script>
                                    var html = "";
                                    <?php
                                    $this->db      = \Config\Database::connect();
                                    $this->tabel = $this->db->table('users');
                                    $this->tabel->select('*');
                                    $this->tabel->where('users.nip', null);
                                    $this->query = $this->tabel->get();
                                    $data = $this->query->getResult();

                                    foreach ($data as $g) : ?>
                                        html += "<tr>";
                                        html += "<td><img src='<?= base_url('assets/images/icons/' . $g->user_image); ?>'></img></td > ";
                                        html += "<td class='align-middle'><?= $g->fullname; ?><br><p class='fa fa-star'></p><br></td>";
                                        html += "<td class='align-middle'><a href='<?= base_url('dashboard/konsultasi/' . $g->id); ?>' class='btn btn-primary'>Konsultasi</a></td>";
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
</main>
<?= $this->endSection(); ?>