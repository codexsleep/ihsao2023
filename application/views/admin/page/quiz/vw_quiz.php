

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
                                        <li class="breadcrumb-item active">Quiz</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Semua Quiz <a href="<?= base_url();?>admin/quiz/tambah" class="btn btn-primary btn-sm waves-effect waves-light ">Tambah Data</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?=$this->session->flashdata('message')?>
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama</th>
                                                    <th>Token</th>
                                                    <th>Waktu</th>
                                                    <th>Mulai</th>
                                                    <th>Berakhir</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                            <tbody>
                                            <?php
                                                $no=1;
                                                foreach($quiz as $value){
                                            ?>
                                                <tr>
                                                    <td><?= $no++;?></td>
                                                    <td><?= $value['name'];?></td>
                                                    <td><?= $value['token'];?></td>
                                                    <td><?= $value['duration'];?>m</td>
                                                    <td><?= $value['start_time'];?></td>
                                                    <td><?= $value['end_time'];?></td>
                                                    <td>
                                                        <a href="<?= base_url();?>admin/soal/quiz/<?= $value['id'];?>" class="btn btn-info btn-sm waves-effect waves-light"><i class="mdi mdi-view-list-outline"></i></a>
                                                        <a href="<?= base_url();?>admin/quiz/edit/<?= $value['id'];?>" class="btn btn-warning btn-sm waves-effect waves-light"><i class="mdi mdi-lead-pencil"></i></a>
                                                        <a href="<?= base_url();?>admin/quiz/hapus/<?= $value['id'];?>" class="btn btn-danger btn-sm waves-effect waves-light"><i class="mdi mdi-trash-can-outline"></i></a>
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

            </div> <!-- content -->
