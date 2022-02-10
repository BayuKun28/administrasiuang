<footer class="footer pt-6  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    AdminKun_
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</main>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Argon Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0 overflow-auto">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="d-flex my-3">
                <h6 class="mb-0">Navbar Fixed</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <div class="mt-2 mb-5 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                </div>
            </div>
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url('assets'); ?>/js/core/popper.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url('assets/') ?>jquery/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>jquery/jquery-easing/jquery.easing.min.js"></script>
<!-- <script src="<?= base_url('assets/') ?>jquery/jquery/jquery.inputmask.bundle.min.js"></script> -->
<script src="<?= base_url('assets/') ?>jquery-mask/jquery.mask.js"></script>
<script src="<?= base_url('assets/') ?>select2/select2.min.js"></script>

<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

<script src="<?= base_url('assets/'); ?>datepicker/jquery.datetimepicker.full.js"></script>

<script src="<?= base_url('assets/'); ?>js/sweetalert/dist/sweetalert2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tanggalawal').datetimepicker({
            format: 'Y-m-d',
            timepicker: false
        });
    });
    $(document).ready(function() {
        $('#tanggalakhir').datetimepicker({
            format: 'Y-m-d',
            timepicker: false
        });
    });
</script>

<script type="text/javascript">
    $(document).on('click', '.del_pengeluaran', function(event) {
        event.preventDefault();
        let kode = $(this).attr('data-kode');
        let delete_url = "<?= base_url(); ?>/Transaksi/deletepengeluaran/" + kode;


        Swal.fire({
            title: 'Hapus Data',
            text: "Apakah Anda Yakin Ingin Menghapus Data Ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then(async (result) => {
            if (result.value) {
                window.location.href = delete_url;
            }
        });
    });
    $(document).on('click', '.del_pemasukan', function(event) {
        event.preventDefault();
        let kode = $(this).attr('data-kode');
        let delete_url = "<?= base_url(); ?>/Transaksi/deletepemasukan/" + kode;


        Swal.fire({
            title: 'Hapus Data',
            text: "Apakah Anda Yakin Ingin Menghapus Data Ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then(async (result) => {
            if (result.value) {
                window.location.href = delete_url;
            }
        });
    });

    $(document).on('click', '.del_kategori', function(event) {
        event.preventDefault();
        let kode = $(this).attr('data-kode');
        let delete_url = "<?= base_url(); ?>/Kategori/deletekategori/" + kode;


        Swal.fire({
            title: 'Hapus Data',
            text: "Apakah Anda Yakin Ingin Menghapus Data Ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then(async (result) => {
            if (result.value) {
                window.location.href = delete_url;
            }
        });
    });
</script>


<?php
if (!empty($this->session->flashdata('message'))) {
    $pesan = $this->session->flashdata('message');
    if ($pesan == "Berhasil") {
        $script = "
                    <script>
                            Swal.fire({
                              icon: 'success',
                              title: 'Data',
                              text: 'Berhasil'
                            }) 
                    </script>
                ";
    } elseif ($pesan == "Berhasil Dihapus") {
        $script = "
                    <script>
                            Swal.fire({
                              icon: 'success',
                              title: 'Data',
                              text: 'Berhasil Dihapus'
                            }) 
                    </script>
                ";
    } elseif ($pesan == "Berhasil Di Update") {
        $script = "
                    <script>
                            Swal.fire({
                              icon: 'success',
                              title: 'Data',
                              text: 'Berhasil Di Update'
                            }) 
                    </script>
                ";
    } else {
        $script =
            "
                    <script>
                                Swal.fire({
                                  icon: 'error',
                                  title: 'Data',
                                  text: 'Gagal'
                                }) 

                    </script>
                    ";
    }
} else {
    $script = "";
}
echo $script;
?>


<script>
    $(document).ready(function() {
        $(document).on('click', '#detailpemasukan', function() {
            var catatan = $(this).data('catatan');
            var tanggal = $(this).data('tanggal');
            var kategori = $(this).data('namakategori');
            var jumlah = $(this).data('jumlah');
            $('#catatandetail').val(catatan);
            $('#tanggaldetail').val(tanggal);
            $('#kategoridetail').val(kategori);
            $('#jumlahdetail').val(jumlah);
        })
        $(document).on('click', '#detailPengeluaran', function() {
            var catatan = $(this).data('catatan');
            var tanggal = $(this).data('tanggal');
            var kategori = $(this).data('namakategori');
            var jumlah = $(this).data('jumlah');
            $('#catatandetail').val(catatan);
            $('#tanggaldetail').val(tanggal);
            $('#kategoridetail').val(kategori);
            $('#jumlahdetail').val(jumlah);
        })

        $(document).on('click', '#detailkategori', function() {
            var kategori = $(this).data('kategori');
            $('#kategoridetail').val(kategori);
        })
    })

    $(document).ready(function() {
        $(document).on('click', '#editpemasukan', function() {
            var idedit = $(this).data('id');
            var catatan = $(this).data('catatan');
            var tanggal = $(this).data('tanggal');
            var kategori = $(this).data('idkategori');
            var jumlah = $(this).data('jumlah');
            $('#idedit').val(idedit);
            $('#catatanedit').val(catatan);
            $('#tanggaledit').val(tanggal);
            $('#kategoriedit').val(kategori);
            $('#jumlahedit').val(jumlah);
        })
        $(document).on('click', '#editPengeluaran', function() {
            var idedit = $(this).data('id');
            var catatan = $(this).data('catatan');
            var tanggal = $(this).data('tanggal');
            var kategori = $(this).data('idkategori');
            var jumlah = $(this).data('jumlah');
            $('#idedit').val(idedit);
            $('#catatanedit').val(catatan);
            $('#tanggaledit').val(tanggal);
            $('#kategoriedit').val(kategori);
            $('#jumlahedit').val(jumlah);
        })
        $(document).on('click', '#editkategori', function() {
            var idedit = $(this).data('idedit');
            var kategori = $(this).data('kategori');
            $('#idedit').val(idedit);
            $('#kategoriedit').val(kategori);
        })
    })
</script>


<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('assets'); ?>/js/argon-dashboard.min.js?v=2.0.0"></script>


<!-- <script type="text/javascript">
    $('#jumlah').mask('#.##0,00', {
        reverse: true
    });
</script> -->



<script type="text/javascript">
    $('.jenis').select2({
        ajax: {
            url: "<?= base_url(); ?>/transaksi/getjenis",
            dataType: "json",
            delay: 250,
            data: function(params) {
                return {
                    jen: params.term
                };
            },
            processResults: function(data) {
                var results = [];
                $.each(data, function(index, item) {
                    results.push({
                        id: item.id,
                        text: item.nama_jenis
                    });
                });
                return {
                    results: results
                }
            }
        }
    });
</script>

<script type="text/javascript">
    $('.kategori').select2({
        ajax: {
            url: "<?= base_url(); ?>/transaksi/getkategori",
            dataType: "json",
            delay: 250,
            data: function(params) {
                return {
                    kat: params.term
                };
            },
            processResults: function(data) {
                var results = [];
                $.each(data, function(index, item) {
                    results.push({
                        id: item.id,
                        text: item.nama_kategori
                    });
                });
                return {
                    results: results
                }
            }
        }
    });
</script>

</body>

</html>