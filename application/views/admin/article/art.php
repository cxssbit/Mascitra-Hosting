       <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                             <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa ti-plus"></i> Tambah article</button>
                            <div class="card-body">

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                    if( ! empty($article)){ 
                                     foreach($article as $data){ 
                                     echo "<tr>
                                    <td>".$data->id."</td>
                                    <td>".$data->judul."</td>
                                    <td>".$data->tanggal."</td>
                                    <td><a href='".base_url("index.php/article/ubah/".$data->id)."'><button class='btn btn-warning btn-sm'>EDIT</button></a> |
                                    <a href='".base_url("index.php/article/hapus/".$data->id)."'><button class='btn btn-danger btn-sm'>DELETE</button></a></td>
                                    </tr>";
                  
                         }
                          }else{ 
                   echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                     }
                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

