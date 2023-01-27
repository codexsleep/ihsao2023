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
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Ihsao</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Admin</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/quiz">Quiz</a></li>
                                <li class="breadcrumb-item active">Bank Soal</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bank Soal <a href="<?= base_url(); ?>admin/soal/tambah/<?= $ide; ?>"
                                class="btn btn-primary btn-sm waves-effect waves-light ">Tambah</a></h4>
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
                                        <th>ID</th>
                                        <th>NO</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($soal as $value) {
                                        ?>
                                        <tr>

                                            <td>
                                                <?= $value['id']; ?>
                                            </td>
                                            <td>Soal
                                                <?= $no++; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/soal/detail/<?= $value['id']; ?>"
                                                    class="btn btn-info btn-sm waves-effect waves-light" target="_blank"><i
                                                        class="mdi mdi-eye"></i></a>
                                                <a href="<?= base_url(); ?>admin/soal/edit/<?= $value['id']; ?>"
                                                    class="btn btn-warning btn-sm waves-effect waves-light"><i
                                                        class="mdi mdi-lead-pencil"></i></a>
                                                <a href="<?= base_url(); ?>admin/soal/hapus/<?= $value['quiz_id']; ?>/<?= $value['id']; ?>"
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