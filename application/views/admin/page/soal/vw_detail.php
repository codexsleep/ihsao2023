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

                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Admin</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/quiz">Soal</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/soal/quiz/<?= $ide; ?>">Bank
                                        Soal</a></li>
                                <li class="breadcrumb-item active">Detail Soal</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Detail Soal
                            <?= $soal['id']; ?>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <?= $this->session->flashdata('message') ?>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="padding:10px;">
                                <div class="col-xl-12">
                                    <h4 class="header-title" style="margin-bottom:30px;">
                                        <?= $soal['question']; ?>
                                    </h4>
                                    <div class="form-check" style="margin-bottom:10px;">
                                        <input type="radio" id="option" name="option" value="a" class="form-check-input"
                                            <?php if ($soal['answare'] == 'a') {
                                                echo "checked";
                                            } ?>>
                                        <label class="form-check-label" for="option">A.
                                            <?= $soal['option_a']; ?>
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-bottom:10px;">
                                        <input type="radio" id="option" name="option" value="b" class="form-check-input"
                                            <?php if ($soal['answare'] == 'b') {
                                                echo "checked";
                                            } ?>>
                                        <label class="form-check-label" for="option">B.
                                            <?= $soal['option_b']; ?>
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-bottom:10px;">
                                        <input type="radio" id="option" name="option" value="c" class="form-check-input"
                                            <?php if ($soal['answare'] == 'c') {
                                                echo "checked";
                                            } ?>>
                                        <label class="form-check-label" for="option">C.
                                            <?= $soal['option_c']; ?>
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-bottom:10px;">
                                        <input type="radio" id="option" name="option" value="d" class="form-check-input"
                                            <?php if ($soal['answare'] == 'd') {
                                                echo "checked";
                                            } ?>>
                                        <label class="form-check-label" for="option">D.
                                            <?= $soal['option_d']; ?>
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-bottom:10px;">
                                        <input type="radio" id="option" name="option" value="e" class="form-check-input"
                                            <?php if ($soal['answare'] == 'e') {
                                                echo "checked";
                                            } ?>>
                                        <label class="form-check-label" for="option">E.
                                            <?= $soal['option_e']; ?>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->

            </div> <!-- content -->