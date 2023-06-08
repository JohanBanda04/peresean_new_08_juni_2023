<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title"><?php echo $judul_web; ?></h4>
            </div>
            <div class="panel-body">
                <?php
                echo $this->session->flashdata('msg');
                $link4 = strtolower($this->uri->segment(4));
                ?>
                <form class="form-horizontal" action="" data-parsley-validate="true" method="post" enctype="multipart/form-data">
                  <style>
                    #wajib_isi{color:red;}
                  </style>

                  <h4>Informasi Draft Raperda</h4>
                    <div class="form-group">
                      <label class="col-lg-12">Judul <b id='wajib_isi'>*</b></label>
                      <div class="col-lg-12">
                        <input type="text" name="nama_draft" class="form-control" value="" placeholder="Nama.." required>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-11">Jenis<b id='wajib_isi'>*</b></label>
                        <div class="col-lg-12">
                            <select class="form-control default-select2" name="jenis_dokumen" selected="<?php echo $query->level; ?>" required>
                                <option value="">- Pilih Jenis Raperda-</option>
                                <option value="raperda">Raperda</option>
                                <option value="raperkada">Raperkada</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                      <label class="col-lg-12">Permohonan Harmonisasi</label>
                      <div class="col-lg-12">
                        <input  type="file" name="lamp_surat_permohonan" class="form-control" required>
                      </div>
                    </div>


                    <div class="form-group" style="background-color: ">
                        <!--                        <label class="fw-500">Upload File SK / SP / Nodin / Undangan / Paparan / data pendukung lainnya</label>-->
                        <label class="col-lg-12 " style="background-color:  ">Draft Harmonisasi</label>
                        <br>
                        <button class="btn btn-success m-l-15" id="add-more" type="button"
                                style="background-color: ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Dokumen
                        </button>

                        <div id="auth-rows"></div>
                    </div>


                  <hr>



                  <!--<a href="<?php /*echo strtolower($this->uri->segment(1)); */?>/<?php /*echo strtolower($this->uri->segment(2)); */?>.html"
                     class="btn btn-default">
                      << Kembali
                  </a>-->
                  <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Kirim</button>
                </form>
            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
      <script type="text/javascript">
          // $('.clockpicker').clockpicker();

          $("#add-more").click(function(e){

              var html3 = '<div class="form-group input-dinamis m-20"><div class="row"><div class="col-input-dinamis col-lg-10 "><input type="file" name="url_files[]" class="form-control border-grey" id="peserta" placeholder="Upload file" required></div><div class="col-input-dinamis col-lg-2"><button class="btn btn-danger remove" type="button"><i class="fa fa-minus-circle"></i></button></div></div></div>';

              $('#auth-rows').append(html3);
          });

          $('#auth-rows').on('click', '.remove', function(e){
              e.preventDefault();
              $(this).parents('.input-dinamis').remove();
          });

      </script>
