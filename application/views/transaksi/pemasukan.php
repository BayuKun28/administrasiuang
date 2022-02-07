<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Data Pemasukan Hari Ini</h6>
                <div class="row col">
                    <form method="post" action="<?= base_url('transaksi/pemasukan') ?>" class="row g-3">
                        <div class="form-group col-md-4">
                            <input type="text" id="tanggalawal" name="tanggalawal" class="form-control" value="<?= $tanggalawal ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" id="tanggalakhir" name="tanggalakhir" class="form-control" value="<?= $tanggalakhir ?>">
                        </div>
                        <div class="form-group col-md-4 float-right">
                            <button type="submit" class="btn btn-primary btn-col-1 " role="button" aria-disabled="true">Tampilkan</button>
                            <a href="<?= base_url('transaksi/addpemasukan'); ?>" class="btn btn-success btn-col-1 " role="button" aria-disabled="true">Tambah</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Catatan</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pemasukan as $b) : ?>
                                <tr>
                                    <td align="center"><?= $i; ?></td>
                                    <td><?= $b['catatan']; ?></td>
                                    <td><?= $b['tanggal']; ?></td>
                                    <td><?= $b['nama_kategori']; ?></td>
                                    <td><?= $b['jumlah']; ?></td>
                                    <td>
                                        <a class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#modaldetailpemasukan" id="detailpemasukan" name="detailpemasukan" data-catatan="<?= $b['catatan']; ?>" data-tanggal="<?= $b['tanggal']; ?>" data-tanggal="<?= $b['tanggal']; ?>" data-namakategori="<?= $b['nama_kategori']; ?>" data-jumlah="<?= $b['jumlah']; ?>">Detail</a>

                                        <a class="badge bg-success" data-bs-toggle="modal" data-bs-target="#modaleditpemasukan" id="editpemasukan" name="editpemasukan" data-catatan="<?= $b['catatan']; ?>" data-tanggal="<?= $b['tanggal']; ?>" data-tanggal="<?= $b['tanggal']; ?>" data-namakategori="<?= $b['nama_kategori']; ?>" data-jumlah="<?= $b['jumlah']; ?>" data-idkategori="<?= $b['idkategori']; ?>" data-id="<?= $b['id']; ?>">Edit</a>

                                        <a data-kode="<?= $b['id']; ?>" href='javascript:void(0)' class="del_pemasukan badge bg-danger ">delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <!-- Modal -->
                    <div class="modal fade" id="modaldetailpemasukan" tabindex="-1" aria-labelledby="modaldetailpemasukanLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modaldetailpemasukanLabel">Detail Pemasukan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <b><label for="catatandetail">Catatan</label></b>
                                    <input type="text" class="form-control" id="catatandetail" readonly name="catatandetail" value="">
                                    <b><label for="tanggaldetail">Tanggal Input</label></b>
                                    <input type="text" class="form-control" id="tanggaldetail" readonly name="tanggaldetail" value="">
                                    <b><label for="kategoridetail">Kategori</label></b>
                                    <input type="text" class="form-control" id="kategoridetail" readonly name="kategoridetail" value="">
                                    <b><label for="jumlahdetail">Jumlah</label></b>
                                    <input type="text" class="form-control" id="jumlahdetail" readonly name="jumlahdetail" value="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modaleditpemasukan" tabindex="-1" aria-labelledby="modaleditpemasukanLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modaleditpemasukanLabel">Edit Pemasukan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('transaksi/editpemasukan') ?>" method="post">
                                    <div class="modal-body">
                                        <b><label for="catatanedit">Catatan</label></b>
                                        <input type="hidden" id="idedit" name="idedit">
                                        <input type="text" class="form-control" id="catatanedit" name="catatanedit" value="">
                                        <b><label for="tanggaledit">Tanggal Input</label></b>
                                        <input type="text" class="form-control" id="tanggaledit" name="tanggaledit" value="">
                                        <b><label for="kategoriedit">Kategori</label></b>
                                        <!-- <div class="col-md-12">
                                        <select class="form-control kategoriedit col-md-6" id="kategoriedit" name="kategoriedit">
                                        </select>
                                    </div> -->
                                        <input type="text" class="form-control" id="kategoriedit" name="kategoriedit" value="">
                                        <b><label for="jumlahedit">Jumlah</label></b>
                                        <input type="text" class="form-control" id="jumlahedit" name="jumlahedit" value="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>