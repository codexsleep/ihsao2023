
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Peserta</a></li>
                                            <li class="breadcrumb-item active">Beranda</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Beranda</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
            <div class="row h-100">
                <div class="col-md-12 col-lg-6">
                    <div class="card card-light">
                        <div class="card-body p-0">
                            <div class="row align-items-end">
                                <div class="col-sm-8">
                                    <div class="p-3">
                                        <p class="card-text fs-2 lh-base">Hi <span class="fw-semibold"><?= $peserta['nama'];?></span>,</p>
                                        <div class="mt-3">
                                            <p class="card-text fs-5 lh-base">Selamat datang di beranda peserta IHSAO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="px-0">
                                        <img src="<?= base_url();?>assets/admin/images/user-illustarator-2.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-body-->
                    </div>
                </div> <!-- end col-->
                <div class="col-md-12 col-lg-6">
                <div class="card">
                            <div class="card-body" style="margin-bottom:10px;">
                                <h4 class="header-title" style="margin-bottom:20px;">Token Quiz</h4>
                                <form>
                                    <div class="row align-items-    center">
                                        <div class="col-9">
                                            <input type="text" name="token" class="form-control mb-2" id="inlineFormInput"
                                                placeholder="Masukkan token quiz disini">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light mb-2">Proses</button>
                                        </div>
                                    </div>
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                </div> <!-- end col-->
            </div> <!-- end row-->
            

            <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Quiz Saya</h4>
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Quiz</th>
                                                        <th>Jumlah</th>
                                                        <th>Waktu</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Quiz Objektif SMK</td>
                                                        <td>10 Soal</td>
                                                        <td>90m</td>
                                                        <td><span class="badge bg-primary">Selesai</span></td>
                                                        <td><button class="btn btn-primary btn-sm">Mulai</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->
