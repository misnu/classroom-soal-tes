<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Anggota</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            
          <div class="card card-warning">
          
              <!-- /.card-header -->
              <form action="<?= base_url('anggota_save')?>" method="post" >
              <div class="card-body">
              
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NOMOR KTP</label>
                        <input type="text" class="form-control" name="ktp">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama">
                      </div>
                    </div>


                    
                  
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <!-- <input type="text" class="form-control" name="jk"> -->

                        <div class="row">
                            <div class="col-sm-6">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="jk1" value="1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                Laki - Laki
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jk" id="jk2" value="2">
                              <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                              </label>
                            </div>
                            </div>
                          </div>






                     

                      </div>
                    </div>


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" class="form-control" name="telepon">
                      </div>
                    </div>
                   
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                      </div>
                    </div>


                
                   
                  </div>

                
            
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-default">Save</button>
                
                </div>


</form>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
     
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>