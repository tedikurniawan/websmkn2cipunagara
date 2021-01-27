<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="container-fluid">
                        <h3 class="page-header"><span> Daftar Pengumuman</span></h3>
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
                                                            <th>Judul Pengumuman</th>
                                                            <th>Isi pengumuman</th>
                                                            <th>Tanggal/Waktu</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $no=1; foreach ($pengumuman as $key => $value) { ?>
                                                        <tr>
                                                            <td class="text-center"><?= $no++; ?></td>
                                                            <td><?= $value->judul_pengumuman ?></td>
                                                            <td><?= $value->isi_pengumuman ?></td>
                                                            <td><?= $value->tgl ?></td>
                                                            <td>
                                                                <a href="<?= base_url('pengumuman/ubah/'.$value->id_pengumuman) ?>"class="btn btn-sm btn-success" title="Ubah"><i class="fa fa-edit"></i></a>
                                                                <a href="<?= base_url('pengumuman/hapus/'.$value->id_pengumuman) ?>" onclick="return confirm('Apakah data ini akan dihapus ?')" class="btn btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                                                            </td>                                                                                                                                    
                                                        </tr>
                                                    <?php }?>    
                                                    </tbody>
                                                </table>
                                                    <a href="<?= base_url('pengumuman/tambah');?>" class="btn btn-primary">
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