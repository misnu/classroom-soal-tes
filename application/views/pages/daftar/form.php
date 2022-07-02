<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contoh Soal | Dashboard</title>
  <link rel="shortcut icon" href="<?= base_url('assets/favicon.ico')?>" type="image/x-icon">
<link rel="icon" href="<?= base_url('assets/favicon.ico')?>" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/css/select2.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/jqvmap/jqvmap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/default_style.min.css?v3') ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote-bs4.min.css') ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="padding: 100px;">
<div class="wrapper">



<div class="row">
<div class="col-md-6">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cek Status Pendaftaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr> <th >No Hp</th>
                  <th>Nama</th>                         <th>Status</th>
                                                                
                                                               
                                                                
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($datas as $d){?>
                                                                    <tr>
                                                                    <td><?= $d->no_hp?></td>
                                                                        <td><?= $d->nama?></td>
                                                                     
                                                                        <td><?php if($d->status == 1){ echo "daftar";}else{echo "Acc silahkan login <a href=".base_url('login').">link</a>";}  ?></td>
                                                                  
                                                                    </tr>
                                                                <?php }?>
                 
                  </tbody>
                 
                </table>
                  </div>
                  

               
              
        
            </div>
            
</div>
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pendaftaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('daftar/cek')?>" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label >Nama </label>
                    <input type="text" class="form-control"  name="nama" >
                  </div>

                  <div class="form-group">
                    <label >Asal Sekolah</label>
                    <input type="text" class="form-control" name="sekolah">
                  </div>

                  <div class="form-group">
                    <label >Alamat</label>
                    <textarea class="form-control" name="alamat"></textarea>
                  </div>

                  <div class="form-group">
                    <label >No Hp </label>
                    <input type="text" class="form-control" name="no_hp">
                  </div>

                  <div class="form-group">
                    <label >Jurusan </label>
                    <select class="form-control" name="jurusan">
                      <?php foreach($data as $s){?>
                      <option value="<?= $s->nama?>"><?= $s->nama?></option>
                      <?php } ?>
                      </select>

                  </div>

                  <div class="form-group">
                    <label >Username </label>
                    <input type="text" class="form-control" name="username">
                  </div>

                  <div class="form-group">
                    <label >Password </label>
                    <input type="text" class="form-control" name="password">
                  </div>

                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


         

          </div>
       
      
        </div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Select2 -->
<script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<!-- <script src="<?= base_url('assets/plugins/sparklines/sparkline.js') ?>"></script> -->
<!-- JQVMap -->
<script src="<?= base_url('assets/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<!-- <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script> -->


<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('assets//plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>

<!-- default_style App -->
<script src="<?= base_url('assets/dist/js/default_style.js')?>"></script>
<!-- default_style for demo purposes -->
<script src="<?= base_url('assets/dist/js/demo.js')?>"></script>
<!-- default_style dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/dist/js/pages/dashboard.js?v1')?>"></script>


<script>
  $(function () {

    // tampil_data(); 


    function tampil_data(){

    
       
                $.ajax({
                    type: "GET",
                    url: 'https://explorer.vexanium.com/api/v1/get_tokens',
                    async : false,
                  
                    success: function (data) {
                   
                    var datatokensstat = data['tokensstat'];
                  
                    var html = '';
                    var i;
                            for(i=0; i<datatokensstat.length; i++){

                            
                                if(datatokensstat[i].currency == 'UPPS'){
                                    satu = '<input type="text" id="output" style="border:white">';

                                }else{
                                    satu = datatokensstat[i].supply;
                                }
                             
                                html += '<tr>'+
                                '<td> <a href="add_token/'+datatokensstat[i].currency+'" class="btn btn-default btn-icon"><i class="fa fa-chevron-circle-right"></i></a></td>'+
                                        '<td>'+datatokensstat[i].currency+'</td>'+
                                        '<td>'+datatokensstat[i].contract+'</td>'+
                                        '<td>'+satu+'</td>'+
                                        '<td>'+datatokensstat[i].max_supply+'</td>'+
                                        '</tr>';
                            }
                            $('#show_data').html(html);
              


              
            }
          });

       
        }

    

   

    $('.summernote').summernote();

    $('.view_data').click(function(){
		
        var id = $(this).attr("id");
        $('#id').val(id);
        $('#delete').modal('show');
         
    
        
    
    });

   

    
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    $('.select2').select2();

    $('#summernote').summernote({
        height: 300,   //don't use px
      });


      $('.view_modal').click(function(){
		
    var id = $(this).attr("id");
    $('#id').val(id);
    $('#delete').modal('show');
     
    
    

});


$('.view_modals').click(function(){
		
    var id = $(this).attr("id");
      
// string jadi array
var convert = id.split("-");  


    $('#id').val(convert[0]);
    $('#ids').val(convert[1]);
    $('#delete').modal('show');
     
    console.log(convert[0]+'-'+convert[1]);
    

});


  });


 

</script>




</body>
</html>
