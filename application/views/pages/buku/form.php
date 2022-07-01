<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Buku</h1>
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
              <form action="<?= base_url('buku_save')?>" method="post" >
              <div class="card-body">
              
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" class="form-control" name="pengarang">
                      </div>
                    </div>


                    
                  
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" class="form-control" name="penerbit">
                      </div>
                    </div>


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" class="form-control" name="tahun">
                      </div>
                    </div>
                   
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Category</label>
                      <select name="category" class="form-control">
                        <?php foreach($category as $c ){?>
                        <option value="<?= $c->name?>"> <?= $c->name?></option>
                          <?php } ?>
                    </select>
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