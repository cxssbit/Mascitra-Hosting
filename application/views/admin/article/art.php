        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mb-5">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">List Artikel</strong>
                                <a href="<?=base_url('article/tambah')?>" class="btn btn-primary btn-outline-primary btn-sm float-right">
                                    <i class="fa fa-plus"></i>&nbsp; Buat Artikel
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0;foreach($article as $data){$no++;?>
                                      <tr>
                                        <td><?=$data->judul?></td>
                                        <td><?=$data->kategori?></td>
                                        <td><?=$data->tanggal?></td>
                                        <td class="text-center">
                                          <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class='btn btn-primary btn-sm' href="<?=base_url('article/ubah/'.$data->id)?>">Ubah</a>
                                            <a class='btn btn-primary btn-sm' href="<?=base_url('blog/page/'.$data->id)?>">Lihat</a>
                                            <a class='btn btn-danger btn-sm' href="<?=base_url('article/hapus/'.$data->id)?>">Hapus</a>
                                          </div>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>