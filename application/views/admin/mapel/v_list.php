<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="container-fluid">
                        <h3 class="page-header"><span> Daftar Mata Pelajaran</span></h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php
                                               if ($this->session->flashdata('pesan')){
                                                echo '<div class="alert alert-success alert-dismissible">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                                echo $this->session->flashdata('pesan');
                                                echo'</div>';    
                                            }
                                            ?>
                                            <div class="card-body table-full-width table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Id Mata Pelajaran</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $no=1; foreach ($mapel as $key => $value) { ?>
                                                        <tr>
                                                            <td class="text-center"><?= $no++; ?></td>
                                                            <td><?= $value->id_mapel ?></td>
                                                            <td><?= $value->nama_mapel ?></td>
                                                            <td>
                                                                <a class="btn btn-sm btn-success" href="<?= base_url('mapel/ubah/'.$value->id_mapel) ?>"><i class="fa fa-edit"></i> Ubah</a>
                                                                <a href="<?= base_url('mapel/hapus/'.$value->id_mapel) ?>" onclick="return confirm('Apakah data ini akan dihapus ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                            </td>                                                                                                                                    
                                                        </tr>
                                                    <?php }?>    
                                                    </tbody>
                                                </table>
                                                    <a href="<?= base_url('mapel/tambah');?>" class="btn btn-primary">
                                                            <i class="fa fa-plus"></i>
                                                                <span>Tambah</span>
                                                    </a>
                                            </div>
                                        </div>               
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

