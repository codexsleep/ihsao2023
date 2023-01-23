

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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Administrator</a></li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Admin </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?=$this->session->flashdata('message')?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                        <form action="" method="POST">
                                        
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="nama" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="Masukkan Nama Admin" value="<?= $adminData['name'];?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Masukkan Email Admin" value="<?= $adminData['email'];?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Masukkan Password Admin">
                                                <small style="muted">*Kosongkan jika tidak ada perubahan pada password</small>
                                            </div>
                                            <div class="mb-3">
                                                <label for="role" class="form-label">Role</label>
                                                <select class="form-control" id="role" name="role" required>
                                                    <option value="">Pilih Role Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="1">Superadmin</option>
                                                </select>
                                            </div>
                                            <button type="submit" name="simpan" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- end row-->
                </div> <!-- container -->

            </div> <!-- content -->
