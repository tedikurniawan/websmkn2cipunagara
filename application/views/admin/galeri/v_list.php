<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="container-fluid"> 
                        <h3 class="page-header"><span> Daftar Galeri</span></h3>
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
                                                            <th>Nama Galeri</th>
                                                            <th>Sampul</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $no=1; foreach ($galeri as $key => $value) { ?>
                                                        <tr>
                                                            <td class="text-center"><?= $no++; ?></td>
                                                            <td><?= $value->nama_galeri ?></td>
                                                            <td class="text-center">
                                                                <img src="<?= base_url('./sampul/'.$value->sampul)?>" width="125px"><br><br>
                                                                <i class="fa fa-image"> <?= $value->jml_foto ?></i><br>
                                                                <a href="<?= base_url('galeri/tambah_foto/'.$value->id_galeri);?>" class="btn btn-primary">
                                                                        <i class="fa fa-plus"></i>
                                                                        Tambah Foto      
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('galeri/ubah/'.$value->id_galeri) ?>"class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Ubah</a>
                                                                <a href="<?= base_url('galeri/hapus/'.$value->id_galeri) ?>" onclick="return confirm('Apakah data ini akan dihapus ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                            </td>                                                                                                                                    
                                                        </tr>
                                                    <?php }?>    
                                                    </tbody>
                                                </table>
                                                    <a href="<?= base_url('galeri/tambah');?>" class="btn btn-primary">
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