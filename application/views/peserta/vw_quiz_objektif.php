
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
                                            <li class="breadcrumb-item active">Quiz Objektif</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Quiz Objektif</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <form method="POST" action="">
            <div class="row h-100">
                <div class="col-md-12 col-lg-8">
                <div class="card">
                                    <div class="card-body">
                                        <div class="row" style="padding:10px;">
                                            <div class="col-xl-12" style="margin-bottom:50%;">
                                                <h4 class="header-title" style="margin-bottom:30px;"><?= $soal['question'];?></h4>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="a" class="form-check-input" <?php if($soal['jawab']=='a'){ echo "checked";}?>>
                                                    <label class="form-check-label" for="option">A. <?= $soal['option_a'];?></label>
                                                </div>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="b" class="form-check-input" <?php if($soal['jawab']=='b'){ echo "checked";}?>>
                                                    <label class="form-check-label" for="option">B. <?= $soal['option_b'];?></label>
                                                </div>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="c" class="form-check-input" <?php if($soal['jawab']=='c'){ echo "checked";}?>>
                                                    <label class="form-check-label" for="option">C. <?= $soal['option_c'];?></label>
                                                </div>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="d" class="form-check-input" <?php if($soal['jawab']=='d'){ echo "checked";}?>>
                                                    <label class="form-check-label" for="option">D. <?= $soal['option_d'];?></label>
                                                </div>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="e" class="form-check-input" <?php if($soal['jawab']=='e'){ echo "checked";}?>>
                                                    <label class="form-check-label" for="option">E. <?= $soal['option_e'];?></label>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div> <!-- end card -->
                </div> <!-- end col-->
                <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                                    <h4 class="header-title text-center">Counter Time</h4>
                                    <h1 class="display-5 text-center" id="msg">00:00:00</h1>

                    </div>
                </div>
                <div class="card">
                            <div class="card-body" style="margin-bottom:10px;">
                                <h4 class="header-title" style="margin-bottom:20px;">Quiz Navigation</h4>
                                <div class="col-auto" style="margin-bottom:30px;">
                                <?php
                                    $soalnumber = 1;
                                    foreach ($allsoal as $valsoal) {
                                    $numUrl = base_url('peserta/quiz/objektif/').$obj['quiz'].'/'.$obj['log'].'/'.$valsoal['id'];
                                    if($valsoal['id']==$obj['soal']){
                                        $numcolor = "primary";
                                    }elseif($valsoal['answare']!='-'){
                                        $numcolor = "success";
                                    }else{
                                        $numcolor = "light";
                                    }
                                    
                                ?>
                                <button type="button" class="btn btn-<?= $numcolor;?> waves-effect btn-sm" style="margin:1px;" onclick="window.location.href = '<?= $numUrl;?>'"><?= $soalnumber++;?></button>
                                <?php
                                    }
                                ?>
                                </div> <!-- end col-->
                                        <div class="col-auto">
                                            <button type="submit" name="prev" class="btn btn-<?php if($obj['soal']==$countSoal['min']){ echo "light";}else{ echo "primary";}?> waves-effect waves-light mb-2">Prev</button>
                                            <button type="submit" name="next" class="btn btn-<?php if($obj['soal']==$countSoal['max']){ echo "light";}else{ echo "primary";}?> waves-effect waves-light mb-2">Next</button>
                                            <button type="submit" name="finish" class="btn btn-<?php if($countSoal['total']<=1 && $countSoal['max']==$obj['soal'] || $countSoal['total']<=0){ echo "primary";}else{ echo "light";}?> waves-effect waves-light mb-2">Finish</button>
                                        </div>
                                    </div>
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                </div> <!-- end col-->
            </div> <!-- end row-->
                </div> <!-- content -->
 <!-- Jquery js-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
   document.addEventListener("keydown", function(event) {
        if (event.ctrlKey && event.keyCode == 67) {
            //make an ajax call to your controller function
            $.ajax({
                url: "<?= base_url() ?>peserta/quiz/punishment/<?= $obj['soal'];?>",
                type: "post",
                success: function(response) {   
                    //this response to punishment                  
                }
            });
        }
    });

var akhir = new Date("2023-01-24 24:00:00").getTime();

var x = setInterval(function() {
  var awal = new Date().getTime();
    
  var distance = akhir - awal;
    
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  if(minutes<10 && minutes>=0){
    var showminutes = "0"+minutes;
  }else{
    var showminutes = minutes;
  }

  if(hours<10 && hours>=0){
    var showhours = "0"+hours;
  }else{
    var showhours = hours;
  }

 if(seconds<10 && seconds>=0){
    var showseconds = "0"+seconds;
  }else{
    var showseconds = seconds;
  }

  document.getElementById("msg").innerHTML = showhours + ":"+ showminutes +":"+ showseconds;
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("msg").innerHTML = "00:00:00";
    var url = "<?= base_url();?>peserta/beranda";
    window.location.href = url;
  }
}, 1000);
</script>