
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
                                <form action="" method="POST">
                                    <div class="row align-items-center">
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
            <?=$this->session->flashdata('message')?>

            <div class="row" style="margin-bottom:20%">
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
                                                        <th>Jenis</th>
                                                        <th>Waktu</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $no = 1;
                                                    foreach($QuizLog as $value){
                                                       // tanggal berakhir ke timestamp
                                                        $target_time = strtotime($value['end_time']);
                                                        // mengambil timestamp saat ini
                                                        $current_time = time();
                                                        // menghitung selisih antara waktu yang ditentukan dengan waktu saat ini dalam detik
                                                        $seconds_left = $target_time - $current_time;
                                                        if($seconds_left>0){
                                                            if($value['status']==0){
                                                                $badge = "info";
                                                                $badgetext = "Tersedia";
                                                            }elseif($value['status']==1){
                                                                $badge = "warning";
                                                                $badgetext = "Berlangsung";
                                                            }else{
                                                                $badge = "success";
                                                                $badgetext = "Selesai";
                                                            }
                                                            $btnclr = "primary";
                                                        }else{
                                                            $badge = "secondary";
                                                            $badgetext = "Ditutup";  
                                                            $btnclr = "light";
                                                        }
                                                        $soalData = $this->beranda_model->getQuiz_Soal($value['id']); //get unansware quizid
                                                        if($soalData['id']==null){ 
                                                            $btnUrl = base_url('peserta/quiz/generate_soal/').$value['quiz_id'].'/'.$value['id'];
                                                        }else{
                                                            $btnUrl = base_url('peserta/quiz/objektif/').$value['quiz_id'].'/'.$value['id'].'/'.$soalData['id'];
                                                        } 
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?= $no++;?></th>
                                                        <td><?= $value['name'];?></td>
                                                        <td><?php if($value['jumsoal']=='-'){ echo "-";}else{ echo $value['jumsoal']." Soal";}?></td>
                                                        <td><?php if($value['type']==1){ echo "Objektif";}else{ echo "Esay";}?></td>
                                                        <td><?= $value['duration'];?>m</td>
                                                        <td>
                                                            <span class="badge bg-<?= $badge;?>"><?= $badgetext;?></span>
                                                        </td>
                                                        <td><button class="btn btn-<?= $btnclr;?> btn-sm" onclick="window.location.href = '<?= $btnUrl;?>'" <?php if($badgetext=="Ditutup" or $badgetext=="Selesai"){ echo "disabled";}?>>Mulai</button></td>
                                                    </tr>
                                                <?php
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->
