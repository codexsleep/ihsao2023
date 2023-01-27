<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ihsao</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Peserta</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Semua Peserta <a href="<?= base_url(); ?>admin/peserta/tambah"
                                class="btn btn-primary btn-sm waves-effect waves-light ">Tambah Data</a></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <?= $this->session->flashdata('message') ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <th>Nama</th>
                                        <td>Nis</td>
                                        <td>Asal Sekolah</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta as $value) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $no++; ?>
                                            </td>
                                            <td>
                                                <?= $value['nama']; ?>
                                            </td>
                                            <td>
                                                <?= $value['nis']; ?>
                                            </td>
                                            <td>
                                                <?= $value['asal_sekolah']; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/peserta/edit/<?= $value['id']; ?>"
                                                    class="btn btn-warning btn-sm waves-effect waves-light"><i
                                                        class="mdi mdi-lead-pencil"></i></a>
                                                <a href="<?= base_url(); ?>admin/peserta/hapus/<?= $value['id']; ?>"
                                                    class="btn btn-danger btn-sm waves-effect waves-light"><i
                                                        class="mdi mdi-trash-can-outline"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div>
        <!-- end row-->
    </div> <!-- container -->

