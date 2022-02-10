<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0 ">
                <div class="row col-12 d-flex justify-content-end">
                    <h6>Data Master Kategori</h6>
                    <a class="badge bg-success col-1" data-bs-toggle="modal" data-bs-target="#modaltambahkategori">Tambah</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-3">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                    <table class="table table-bordered" id="dataTable" width=auto cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kategori as $b) : ?>
                                <tr>
                                    <td align="center"><?= $i; ?></td>
                                    <td><?= $b['nama_kategori']; ?></td>
                                    <td>
                                        <a class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#modaldetailkategori" id="detailkategori" name="detailkategori" data-kategori="<?= $b['nama_kategori']; ?>">Detail</a>

                                        <a class=" badge bg-success" data-bs-toggle="modal" data-bs-target="#modaleditkategori" id="editkategori" name="editkategori" data-kategori="<?= $b['nama_kategori']; ?>" data-idedit=" <?= $b['id']; ?>">Edit</a>

                                        <a data-kode="<?= $b['id']; ?>" href='javascript:void(0)' class="del_kategori badge bg-danger ">delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <!-- Modal -->
                    <div class="modal fade" id="modaldetailkategori" aria-labelledby="modaldetailkategoriLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modaldetailkategoriLabel">Detail kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <b><label for="kategoridetail">Kategori</label></b>
                                    <input type="text" class="form-control" id="kategoridetail" readonly name="kategoridetail" value="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade noborder-radius" data-backdrop="static" data-keyboard="true" id="modaleditkategori" aria-labelledby="modaleditkategoriLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modaleditkategoriLabel">Edit kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('kategori/editkategori') ?>" method="post">
                                    <div class="modal-body">
                                        <b><label for="kategoriedit">Nama Kategori</label></b>
                                        <input type="hidden" id="idedit" name="idedit">
                                        <input type="text" class="form-control" id="kategoriedit" name="kategoriedit" value="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade noborder-radius" data-backdrop="static" data-keyboard="true" id="modaltambahkategori" aria-labelledby="modaltambahkategoriLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modaltambahkategoriLabel">Edit kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('kategori/tambah') ?>" method="post">
                                    <div class="modal-body">
                                        <b><label for="nama_kategori">Nama Kategori</label></b>
                                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="">
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