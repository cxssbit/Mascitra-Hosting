<?php  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>bahan/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bahan/datatables.net-bs/css/dataTables.bootstrap.css">
</head>
<body>
  <div>
    <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body" >
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
              </div>
            <?php endif ?>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-striped table-condensed table-bordered table-hover datatable">
                    <thead>
                      <tr class="info">
                      <th>NO</th>
                      <th>NAME</th>
                      <th>EMAIL</th>
                      <th>SUBJECT</th>
                      <th>MESSAGE </th>
                      <th>ACTION</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php 
                    foreach ($datanya as $x) 
                    {
                    ?>
                      <tr>
                        <td><?php echo $nomer++; ?></td>
                        <td><?php echo $x['name']; ?></td>    
                        <td><?php echo $x['email']; ?></td>
                        <td><?php echo $x['subject']; ?></td>
                        <td><?php echo $x['message']; ?></td>
                        <td>
                         <button class="btn btn-danger btn-sm btn-hapus tombol-hapus" data-toggle="modal" data-target="#konfirmasi" data-id ="<?php echo $x['id']; ?>" data-name="<?php echo $x['name']; ?>">
                          <span class="glyphicon glyphicon-trash"></span>
                         </button>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="modal fade" id="konfirmasi">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            Konfirmasi !
          </h5>
        </div>
        <?php echo form_open(base_url('contact_c/hapus_data/')); ?>
        <div class="modal-body">
          <input type="hidden" name="id_contact" class="id">
          <p>
            Apakah anda yakin ingin menghapus contact dari <span class="name"></span>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-success btn-sm">Ya</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  
  <!-- ki seharuse di seleh ndc halaman admin dduk di seleh ndc kene -->
  <!-- <script src="<?php echo base_url(); ?>bahan/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url(); ?>bahan/js/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>bahan/datatables.net/js/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>bahan/datatables.net-bs/js/dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>bahan/bootstrap_input_file/bootstrap-filestyle.js"></script>
  <script src="<?php echo base_url(); ?>bahan/js/app.js"></script>
  <script src="<?php echo base_url(); ?>bahan/js/app.min.js"></script> -->
  
</body>
</html>