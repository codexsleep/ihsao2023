

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
                                        <li class="breadcrumb-item"><a href="<?= base_url();?>">Ihsao</a></li>
                                        <li class="breadcrumb-item"><a href="<?= base_url();?>admin">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="<?= base_url();?>admin/quiz">Soal</a></li>
                                        <li class="breadcrumb-item"><a href="<?= base_url();?>admin/soal/quiz/<?= $ide;?>">Bank Soal</a></li>
                                        <li class="breadcrumb-item active">Tambah</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Tambah Soal </h4>
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
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label class="form-label">Pertanyaan</label>
                                                <textarea id="myTextarea" name="pertanyaan"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pilihan A</label>
                                                <textarea id="myTextarea" name="opsia"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pilihan B</label>
                                                <textarea id="myTextarea" name="opsib"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pilihan C</label>
                                                <textarea id="myTextarea" name="opsic"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pilihan D</label>
                                                <textarea id="myTextarea" name="opsid"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pilihan E</label>
                                                <textarea id="myTextarea" name="opsie"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                        <label class="form-label">Jawaban</label>
                                                        <select class="form-select" name="jawaban">
                                                            <option value="a">A</option>
                                                            <option value="b">B</option>
                                                            <option value="c">C</option>
                                                            <option value="d">D</option>
                                                            <option value="e">E</option>
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
            <script src="<?= base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>

<script>
tinymce.init({
    selector: '#myTextarea',
    plugins: 'advlist link image lists preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
    menubar: 'file edit view insert format tools table help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    toolbar_sticky: true,
    autosave_ask_before_unload: true,
    autosave_interval: '30s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
    image_advtab: true,
    link_list: [
      { title: 'My page 1', value: 'https://www.codexworld.com' },
      { title: 'My page 2', value: 'http://www.codexqa.com' }
    ],
    image_list: [
      { title: 'My page 1', value: 'https://www.codexworld.com' },
      { title: 'My page 2', value: 'http://www.codexqa.com' }
    ],
    image_class_list: [
      { title: 'None', value: '' },
      { title: 'Some class', value: 'class-name' }
    ],
    importcss_append: true,
    file_picker_callback: (callback, value, meta) => {
      /* Provide file and text for the link dialog */
      if (meta.filetype === 'file') {
        callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
      }
  
      /* Provide image and alt text for the image dialog */
      if (meta.filetype === 'image') {
        callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
      }
  
      /* Provide alternative source and posted for the media dialog */
      if (meta.filetype === 'media') {
        callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
      }
    },
    templates: [
      { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
      { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
      { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
    ],
    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
    height: 400,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_class: 'mceNonEditable',
    toolbar_mode: 'sliding',
    contextmenu: 'link image table',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});
</script>