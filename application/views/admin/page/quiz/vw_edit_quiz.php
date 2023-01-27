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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quiz</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Quiz</h4>
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
                                            aria-describedby="nama" placeholder="Masukkan nama quiz"
                                            value="<?= $quiz['name']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="durasi" class="form-label">Durasi</label>
                                        <input type="number" class="form-control" id="durasi" name="durasi"
                                            aria-describedby="durasi" placeholder="Masukkan durasi quiz"
                                            value="<?= $quiz['duration']; ?>" required>
                                    </div>

                                    <label class="form-label">Waktu Mulai</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="date" name="mulaidate" class="form-control"
                                                    value="<?= date('Y-m-d', strtotime($quiz['start_time'])); ?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" name="mulaitime" class="form-control"
                                                value="<?= date('H:i:s', strtotime($quiz['start_time'])); ?>" required>
                                        </div>
                                    </div>

                                    <label class="form-label">Waktu Berakhir</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="date" name="berakhirdate" class="form-control"
                                                    value="<?= date('Y-m-d', strtotime($quiz['end_time'])); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" name="berakhirtime" class="form-control"
                                                value="<?= date('H:i:s', strtotime($quiz['end_time'])); ?>" required>
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

