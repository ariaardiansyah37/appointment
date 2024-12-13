<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Dokter | Poliklinik BK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?=base_url('assets/img/medis.png')?>" rel="icon">
    <link href="<?=base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/quill/quill.snow.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/simple-datatables/style.css')?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">


    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?=base_url('assets/img/medis.png')?>" alt="">
                <span class="d-none d-lg-block">Poliklinik BK</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?=base_url('assets/img/profile-img.jpg')?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?=$user['username']?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?=$user['username']?></h6>
                            <span><?=$user['role']?></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?=base_url('auth/logout')?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=base_url('admin/view_data_dokter')?>">
                    <i class="ri ri-stethoscope-line"></i>
                    <span>Data Dokter</span>
                </a>
            </li><!-- End Data Dokter Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=base_url('admin/view_data_pasien')?>">
                    <i class="ri ri-wheelchair-line"></i>
                    <span>Data Pasien</span>
                </a>
            </li><!-- End Data Pasien Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=base_url('admin/view_data_poli')?>">
                    <i class="ri ri-hospital-line"></i>
                    <span>Data Poli</span>
                </a>
            </li><!-- End Data Poli Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=base_url('admin/view_data_obat')?>">
                    <i class="ri ri-first-aid-kit-line"></i>
                    <span>Data Obat</span>
                </a>
            </li><!-- End Data Obat Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=base_url('auth/logout')?>">
                    <i class="ri ri-logout-box-line"></i>
                    <span>Sign Out</span>
                </a>
            </li><!-- End Sign Out Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Dokter</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Dokter</h5>

                            <!-- Tambah Data Dokter Form -->
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Nama Dokter</label>
                                    <input type="text" class="form-control" name="nama" id="inputName5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAlamat5" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="inputAlamat5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputnomorhp" class="form-label">Nomor HP</label>
                                    <input type="number" class="form-control" name="no_hp" id="inputnomorhp">
                                </div>
                                <div class="col-12">
                                    <label for="inputPoli" class="form-label">Poli</label>
                                    <select id="inputPoli" class="form-select" name="poli">
                                        <option value="" selected>Pilih Poli</option>
                                        <?php foreach ($poli as $dataPoli){?>
                                        <option value="<?=$dataPoli['id']?>"><?=$dataPoli['nama_poli']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary submit-data">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">List Data Dokter</h5>

                            <!-- Table with stripped rows -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dokter</th>
                                        <th>Alamat</th>
                                        <th>Nomor HP</th>
                                        <th>Poli</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x=1; foreach($dokter as $dataDokter){?>
                                    <tr>
                                        <td><?=$x++;?></td>
                                        <td><?=$dataDokter['nama']?></td>
                                        <td><?=$dataDokter['alamat']?></td>
                                        <td><?=$dataDokter['no_hp']?></td>
                                        <td><?=$dataDokter['nama_poli']?></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-success update-dokter"
                                                data-bs-toggle="modal" data-bs-target="#updateDokterForm"
                                                data-id='<?=$dataDokter['id']?>'>Update</a>
                                            | <a href="#" class="btn btn-sm btn-outline-danger delete-dokter"
                                                data-id='<?=$dataDokter['id']?>'>Delete</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="updateDokterForm" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Dokter Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <input type="hidden" name="iddokter">
                            <input type="hidden" name="iduser">
                            <label>Nama Dokter: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Nama Dokter" name="namaDokter" class="form-control">
                            </div>
                            <label>Alamat: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Alamat Dokter" name="alamatDokter" class="form-control">
                            </div>
                            <label>Nomor HP: </label>
                            <div class="form-group">
                                <input type="number" placeholder="Nomor HP Dokter" name="no_hpDokter"
                                    class="form-control">
                            </div>
                            <label>Poli: </label>
                            <div class="form-group">
                                <select id="inputPoli" class="form-select" name="idPoli">
                                    <option value="">Pilih Poli</option>
                                    <?php foreach ($poli as $dataPoli){?>
                                    <option value="<?=$dataPoli['id']?>"><?=$dataPoli['nama_poli']?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary update-data">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?=base_url('assets/vendor/apexcharts/apexcharts.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/chart.js')?>/chart.umd.js')?>"></script>
    <script src="<?=base_url('assets/vendor/echarts/echarts.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/quill/quill.js')?>"></script>
    <script src="<?=base_url('assets/vendor/simple-datatables/simple-datatables.js')?>"></script>
    <script src="<?=base_url('assets/vendor/tinymce/tinymce.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/php-email-form/validate.js')?>"></script>

    <!-- Template Main JS File -->
    <script src="<?=base_url('assets/js/main.js')?>"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    $(document).ready(function() {

        $('.submit-data').click(function(event) {
            event.preventDefault();

            var nama = $('[name=nama]').val();
            var alamat = $('[name=alamat]').val();
            var no_hp = $('[name=no_hp]').val();
            var poli = $('[name=poli]').val();

            if (nama.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Nama dokter wajib diisi !",
                    icon: "error"
                });
                return;
            }

            if (alamat.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Alamat dokter wajib diisi !",
                    icon: "error"
                });
                return;
            }

            if (no_hp.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Nomor HP wajib diisi !",
                    icon: "error"
                });
                return;
            }

            if (poli.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Poli dokter wajib diisi !",
                    icon: "error"
                });
                return;
            }

            $.ajax({
                url: '<?=base_url("admin/tambah_dokter")?>',
                type: 'post',
                data: {
                    namaDokter: nama,
                    alamatDokter: alamat,
                    no_hpDokter: no_hp,
                    poliDokter: poli,
                },
                success: function(response) {
                    if (response.status === 'oke') {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Data dokter telah ditambahkan.",
                            showConfirmButton: false,
                            icon: "success",
                            timer: 1500
                        }).then(() => {
                            location.reload();
                        });
                        return;
                    } else {
                        Swal.fire({
                            title: "Gagal!",
                            text: "Data dokter gagal ditambahkan.",
                            icon: "error"
                        });
                        return;
                    }
                },
                error: function() {
                    Swal.fire({
                        title: "Gagal!",
                        text: "Terjadi kesalahan dalam melakukan tambah data dokter !",
                        icon: "error"
                    });
                    return;
                }
            });
        });

        $('.update-dokter').click(function(event) {
            event.preventDefault();

            var iddokter = $(this).data('id');

            $.ajax({
                url: '<?=base_url('admin/ambil_data_dokter_by_id')?>',
                type: 'post',
                data: {
                    id: iddokter
                },
                dataType: 'json',
                success: function(data) {
                    if (data) {
                        $('#updateDokterForm input[name="iddokter"]').val(data.id);
                        $('#updateDokterForm input[name="iduser"]').val(data.id_user);
                        $('#updateDokterForm input[name="namaDokter"]').val(data.nama);
                        $('#updateDokterForm input[name="alamatDokter"]').val(data
                            .alamat);
                        $('#updateDokterForm input[name="no_hpDokter"]').val(data
                            .no_hp);
                        $('#updateDokterForm select[name="idPoli"]').val(data
                            .id_poli);
                    } else {
                        alert('Data not found');
                    }
                },
                error: function() {
                    Swal.fire('Error', 'Terjadi kesalahan saat mengirim data', 'error');
                }
            });
        });

        $('.update-data').click(function(event) {
            event.preventDefault();

            var iddokter = $('[name=iddokter]').val();
            var iduser = $('[name=iduser]').val();
            var namadokter = $('[name=namaDokter]').val();
            var alamatdokter = $('[name=alamatDokter]').val();
            var no_hpdokter = $('[name=no_hpDokter]').val();
            var idpoli = $('[name=idPoli]').val();

            if (namadokter.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Nama dokter wajib diisi !",
                    icon: "error"
                });
                return;
            }

            if (alamatdokter.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Alamat dokter wajib diisi !",
                    icon: "error"
                });
                return;
            }

            if (no_hpdokter.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Nomor HP dokter wajib diisi !",
                    icon: "error"
                });
                return;
            }

            if (idpoli.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Poli dokter wajib diisi !",
                    icon: "error"
                });
                return;
            }

            $.ajax({
                url: '<?=base_url('admin/ubah_dokter')?>',
                type: 'post',
                data: {
                    idDokter: iddokter,
                    iduser: iduser,
                    namaDokter: namadokter,
                    alamatDokter: alamatdokter,
                    no_hpDokter: no_hpdokter,
                    idPoli: idpoli,
                },
                success: function(response) {
                    if (response.status === 'oke') {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Data dokter telah diupdate.",
                            showConfirmButton: false,
                            icon: "success",
                            timer: 1500
                        }).then(() => {
                            location.reload();
                        });
                        return;
                    } else {
                        Swal.fire({
                            title: "Gagal!",
                            text: "Data dokter gagal diupdate.",
                            showConfirmButton: false,
                            icon: "error",
                            timer: 1500
                        }).then(() => {
                            location.reload();
                        });
                        return;
                    }
                },
                error: function() {
                    Swal.fire('Error', 'Terjadi kesalahan saat mengirim data', 'error');
                }
            });
        });

        $('.delete-dokter').click(function(event) {
            event.preventDefault();

            var iddokter = $(this).data('id');

            Swal.fire({
                title: "Anda yakin hapus data?",
                showCancelButton: true,
                confirmButtonText: "Yakin",
                confirmButtonColor: "#48c9b0",
                cancelButtonColor: "#ff0000",
                cancelButtonText: "Tidak",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?=base_url('admin/hapus_dokter')?>',
                        type: 'post',
                        data: {
                            id: iddokter
                        },
                        success: function(response) {
                            if (response.status === 'oke') {
                                Swal.fire({
                                    title: "Berhasil!",
                                    text: "Data dokter telah dihapus.",
                                    showConfirmButton: false,
                                    icon: "success",
                                    timer: 1500
                                }).then(() => {
                                    location.reload();
                                });
                                return;
                            } else {
                                Swal.fire({
                                    title: "Gagal!",
                                    text: "Data dokter gagal dihapus.",
                                    showConfirmButton: false,
                                    icon: "error",
                                    timer: 1500
                                }).then(() => {
                                    location.reload();
                                });
                                return;
                            }
                        },
                        error: function() {
                            Swal.fire('Error',
                                'Terjadi kesalahan saat mengirim data', 'error');
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        });
    });
    </script>

</body>

</html>