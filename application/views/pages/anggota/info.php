<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Diri</h1>
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
              <div class="card-body">
              
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data->nama?>">
                  </div>
                </div>

                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" class="form-control" name="sekolah" value="<?= $data->asal_sekolah?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>No HP</label>
                    <input type="text" class="form-control" name="no_hp" value="<?= $data->no_hp?>">
                  </div>
                </div>

                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="no_hp" value="<?= $data->jurusan?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?= @$data_user->username?>">
                  </div>
                </div>

                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password">
                  </div>
                </div>
              </div>
           
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"><?= $data->alamat?></textarea>
                  </div>
                </div>


            
               
              </div>

            
        
            
          </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
     
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>