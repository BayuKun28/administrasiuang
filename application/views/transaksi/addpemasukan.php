<div class="row">
    <div class="col-12">
        <div class="card mb-4 p-3 ">
            <?= $this->session->flashdata('message'); ?></p>
            <form method="post" action="<?= base_url('transaksi/addpemasukan') ?>" class="row g-3">
                <div class="col-md-6">
                    <label for="Jenis" class="form-label">Jenis Transaksi</label>
                    <select class="form-control jenis" id="jenis" name="jenis">
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-control kategori" id="kategori" name="kategori">
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="jumlah" class="form-label">Nominal</label>
                    <input type="numeric" class="form-control jumlah" id="jumlah" name="jumlah">
                </div>
                <div class="col-md-6">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d'); ?>">
                </div>
                <div class="col-md-12">
                    <label for="Catatan" class="form-label">Catatan</label>
                    <textarea rows="3" class="form-control" id="catatan" name="catatan"></textarea>
                </div>
                <div class="col-12">
                    <a href="<?= base_url('transaksi/pemasukan'); ?>" class="btn btn-success btn-col-1" role="button" aria-disabled="true">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>