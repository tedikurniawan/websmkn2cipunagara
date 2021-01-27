<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="container-fluid"> 
                        <h3 class="page-header"><span> Daftar Guru</span></h3>
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
                                                            <th>NIP</th>
                                                            <th>Nama Guru</th>
                                                            <th>Tempat Lahir</th>
                                                            <th>Tanggal Lahir</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Pendidikan</th>
                                                            <th>Foto Guru</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $no=1; foreach ($guru as $key => $value) { ?>
                                                        <tr>
                                                            <td class="text-center"><?= $no++; ?></td>
                                                            <td><?= $value->nip ?></td>
                                                            <td><?= $value->nama_guru ?></td>
                                                            <td><?= $value->tempat_lahir ?></td>
                                                            <td><?= $value->tgl_lahir ?></td>
                                                            <td><?= $value->nama_mapel ?></td>
                                                            <td><?= $value->pendidikan ?></td>
                                                            <td><img src="<?= base_url('./foto_guru/'.$value->foto_guru)?>" width="100px"></td>
                                                            <td>
                                                                <a href="<?= base_url('guru/ubah/'.$value->id_guru) ?>" class="btn btn-sm btn-success" title="Ubah"><i class="fa fa-edit"></i></a>
                                                                <a href="<?= base_url('guru/hapus/'.$value->id_guru) ?>" onclick="return confirm('Apakah data ini akan dihapus ?')" class="btn btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                                                            </td>                                                                                                                                    
                                                        </tr>
                                                    <?php }?>    
                                                    </tbody>
                                                </table>
                                                    <a href="<?= base_url('guru/tambah');?>" class="btn btn-primary">
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