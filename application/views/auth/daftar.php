<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Daftar Pasien | Poliklinik BK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?=base_url('assets/img/favicon.png')?>" rel="icon">
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

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="<?=base_url('assets/img/medis.png')?>" alt="">
                                    <span class="d-none d-lg-block">Poliklinik BK</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Daftar Akun Pasien</h5>
                                        <p class="text-center small">Masukkan data akun pasien yang akan didaftarkan
                                            dengan benar !</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate>
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Nama</label>
                                            <input type="text" name="namaDaftar" class="form-control" id="yourName" required>
                                            <div class="invalid-feedback">Masukkan nama</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourAddress" class="form-label">Alamat</label>
                                            <input type="text" name="alamatDaftar" class="form-control" id="yourAddress" required>
                                            <div class="invalid-feedback">Masukkan alamat</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourIdentity" class="form-label">Nomor KTP</label>
                                            <input type="text" name="no_ktpDaftar" class="form-control" id="yourIdentity" required>
                                            <div class="invalid-feedback">Masukkan nomor KTP</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPhone" class="form-label">Nomor HP</label>
                                            <input type="text" name="no_hpDaftar" class="form-control" id="yourPhone" required>
                                            <div class="invalid-feedback">Masukkan nomor HP</div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 btnDaftar" type="submit">Buat Akun</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a
                                                    href="<?=base_url('auth')?>">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?=base_url('assets/vendor/apexcharts/apexcharts.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/chart.js/chart.umd.js')?>"></script>
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

        $('.btnDaftar').click(function(event) {
            event.preventDefault();

            var nama = $('[name=namaDaftar]').val();
            var alamat = $('[name=alamatDaftar]').val();
            var no_ktp = $('[name=no_ktpDaftar]').val();
            var no_hp = $('[name=no_hpDaftar]').val();

            if (nama.length == 0 || alamat.length == 0 || no_ktp.length == 0 || no_hp.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Nama wajib diisi !",
                    icon: "error"
                });
                return;
            }

            if (alamat.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Alamat wajib diisi !",
                    icon: "error"
                });
                return;
            }

            if (no_ktp.length == 0) {
                Swal.fire({
                    title: "Gagal!",
                    text: "Nomor KTP wajib !",
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

            Swal.fire({
                title: "Apakah data sudah benar?",
                showCancelButton: true,
                confirmButtonText: "Sudah",
                confirmButtonColor: "#48c9b0",
                cancelButtonColor: "#ff0000",
                cancelButtonText: "Belum",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?=base_url("auth/proses_daftar")?>',
                        type: 'post',
                        data: {
                            namaPasien: nama,
                            alamatPasien: alamat,
                            no_ktpPasien: no_ktp,
                            no_hpPasien: no_hp
                        },
                        success: function(response) {
                            if (response.status === 'oke') {
                                Swal.fire({
                                    title: "Berhasil!",
                                    text: "Data pasien berhasil didaftarkan!",
                                    icon: "success"
                                });
                                return;
                            } else {
                                Swal.fire({
                                    title: "Gagal!",
                                    text: "Nomor KTP telah terdaftar!",
                                    icon: "error"
                                });
                                return;
                            }
                        },
                        error: function() {
                            Swal.fire({
                                title: "Gagal!",
                                text: "Terjadi kesalahan dalam melakukan pendaftaran!",
                                icon: "error"
                            });
                            return;
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