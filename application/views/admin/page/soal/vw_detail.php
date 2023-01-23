

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
                                        <li class="breadcrumb-item active">Bank Soal</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Bank Soal </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?=$this->session->flashdata('message')?>
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <?= $soal['question'];?>
                                        <br>    
                                        <br>
                                        A. <?= $soal['option_a'];?>
                                        <br>    
                                        <br>
                                        B. <?= $soal['option_b'];?>
                                        <br>    
                                        <br>
                                        C. <?= $soal['option_c'];?>
                                        <br>    
                                        <br>
                                        D. <?= $soal['option_d'];?>
                                        <br>    
                                        <br>
                                        E. <?= $soal['option_e'];?>
                                        <br>    
                                        <br>
                                        Jawaban. <?= $soal['answare'];?>     
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                </div> <!-- end card-->

                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                    </div>
                    <!-- end row-->
                </div> <!-- container -->

            </div> <!-- content -->
