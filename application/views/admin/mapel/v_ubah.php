<div class="content">
    <div class="card">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                <h3 class="page-header"><span> Ubah Data Mata Pelajaran</span></h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php

                                        echo validation_errors('<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');


                                        if(isset($error_upload))
                                        {
                                            echo'<div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                                        }

                                        echo form_open_multipart('mapel/ubah/'.$mapel->id_mapel);
                                    ?>
                                    <div class="card-body table-full-width table-responsive">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama Mata Pelajaran</label>
                                                <input class="form-control" type="text" name="nama_mapel"  value="<?= $mapel->nama_mapel ?>" placeholder="Nama Mata Pelajaran" Required>
                                            </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                                            <a href="<?= base_url('mapel')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                        </div>                                            
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>                                            
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
