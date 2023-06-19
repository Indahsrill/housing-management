<?php $this->load->view('template/header.php'); ?>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('notif'); ?>"></div>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="feather icon-home"></i>
                                    Dashboard</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="col-md-12">
            <!-- page statustic card start -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h6 class="text-muted m-b-0">Pembayaran Bulan <?= bulan(date('m')) ?></h6>
                                    <br>
                                    <h4 class="text-c-yellow"><?= $jumlah_warga_bayar ?> Warga Sudah membayar</h4>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="feather icon-bar-chart-2 f-28"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h6 class="text-muted m-b-0">Total Warga</h6>
                                    <br>
                                    <h4 class="text-c-green"><?= $jumlah_warga ?> Warga</h4>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="feather icon-file-text f-28"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page statustic card end -->
        </div>
        <!-- [ Main Content ] end -->
        <script>
            const flashData = $('.flash-data').data('flashdata');
            if (flashData) {
                Swal.fire(
                    flashData, '',
                    'success'
                )
            }
        </script>
        <?php $this->load->view('template/footer.php'); ?>