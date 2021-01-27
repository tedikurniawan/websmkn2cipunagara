<div class="content">
    <div class="card">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                <h3 class="page-header"><span> Tambah Galeri</span></h3>
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

                                        echo form_open_multipart('galeri/tambah');
                                    ?>
                                    <div class="card-body table-full-width table-responsive"> 
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Nama Galeri</label>
                                            <input class="form-control" name="nama_galeri" placeholder="Nama Galeri" required>
                                        </div>
                                    </div> 
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Sampul</label>
                                            <input type="file" class="form-control" name="sampul" Required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                                        <button type="reset" class="btn btn-warning"><i class="fa fa-redo"></i> Reset</button>
                                        <a href="<?= base_url('galeri')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
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

