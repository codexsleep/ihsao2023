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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Peserta</a></li>
                                <li class="breadcrumb-item active">Tambah</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tambah Peserta </h4>
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
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="nama" class="form-control" id="nama" name="nama"
                                            aria-describedby="nama" placeholder="Masukkan Nama peserta" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="email" placeholder="Masukkan Email Peserta" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nis" class="form-label">Nis</label>
                                        <input type="nis" class="form-control" id="nis" name="nis"
                                            aria-describedby="nis" placeholder="Masukkan Nis Peserta" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sekolah" class="form-label">Asal Sekolah</label>
                                        <input type="sekolah" class="form-control" id="sekolah" name="sekolah"
                                            aria-describedby="sekolah" placeholder="Masukkan Asal Sekolah" required>
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

