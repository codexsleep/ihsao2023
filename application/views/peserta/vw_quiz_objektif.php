
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
            <div class="row h-100">
                <div class="col-md-12 col-lg-8">
                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12" style="margin-bottom:50%;">
                                                <h4 class="header-title" style="margin-bottom:30px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h4>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="a" class="form-check-input">
                                                    <label class="form-check-label" for="option">A. Toggle this custom radio</label>
                                                </div>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="b" class="form-check-input">
                                                    <label class="form-check-label" for="option">B. Toggle this custom radio</label>
                                                </div>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="c" class="form-check-input">
                                                    <label class="form-check-label" for="option">C. Toggle this custom radio</label>
                                                </div>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="d" class="form-check-input">
                                                    <label class="form-check-label" for="option">D. Toggle this custom radio</label>
                                                </div>
                                                <div class="form-check" style="margin-bottom:10px;">
                                                    <input type="radio" id="option" name="option" value="e" class="form-check-input">
                                                    <label class="form-check-label" for="option">E. Toggle this custom radio</label>
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
                                <form>
                                <div class="col-auto" style="margin-bottom:30px;">
                                <button type="button" class="btn btn-primary waves-effect btn-sm">1</button>
                                <button type="button" class="btn btn-success waves-effect btn-sm">2</button>
                                <button type="button" class="btn btn-light waves-effect btn-sm">3</button>
                                <button type="button" class="btn btn-light waves-effect btn-sm">4</button>
                                <button type="button" class="btn btn-light waves-effect btn-sm">5</button>
                                <button type="button" class="btn btn-light waves-effect btn-sm">6</button>
                                <button type="button" class="btn btn-light waves-effect btn-sm">7</button>
                                </div> <!-- end col-->
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-light waves-effect waves-light mb-2">Prev</button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mb-2">Next</button>
                                            <button type="submit" class="btn btn-light waves-effect waves-light mb-2">Finish</button>
                                        </div>
                                    </div>
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                </div> <!-- end col-->
            </div> <!-- end row-->
            

                </div> <!-- content -->
                <script>
var akhir = new Date("2023-01-23 24:00:00").getTime();

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