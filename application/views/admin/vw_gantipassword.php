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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                                <li class="breadcrumb-item active">Ganti Password</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ganti Password </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <?= $this->session->flashdata('message') ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <form action="" method="POST">

                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Password Lama</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="passwordlama" name="lama" class="form-control"
                                                placeholder="Masukkan Password Lama" required>
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Password Baru</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="passwordbaru" name="baru" class="form-control"
                                                placeholder="Masukkan Password Baru" required>
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nis" class="form-label">Konfirmasi Password Baru</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="passwordkonfirm" name="konfirm" class="form-control"
                                                placeholder="Konfirmasi Password baru" required>
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="simpan"
                                        class="btn btn-primary waves-effect waves-light">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row-->
        </div> <!-- container -->