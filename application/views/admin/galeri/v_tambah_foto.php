<div class="content">
    <div class="card">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                <h3 class="page-header"><span> Tambah Foto Galeri</span></h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php

                                        if ($this->session->flashdata('pesan'))
                                        {
                                            echo '<div class="alert alert-success alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                            echo $this->session->flashdata('pesan');
                                            echo'</div>';  
                                            
                                        }

                                        echo validation_errors('<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');


                                        if(isset($error_upload))
                                        {
                                            echo'<div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                                        }


                                        echo form_open_multipart('galeri/tambah_foto/'.$galeri->id_galeri);
                                        
                                    ?>
                                    <div class="card-body table-full-width table-responsive"> 
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Keterangan Foto </label>
                                            <input class="form-control" name="ket_foto" placeholder="Keterangan Foto" required>
                                        </div>
                                    </div> 
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" class="form-control" name="foto" Required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                                        <button type="reset" class="btn btn-warning"><i class="fa fa-redo"></i> Reset</button>
                                        <a href="<?= base_url('galeri')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    </div>                                            
                                    <?php echo form_close(); ?>
                                <hr> 
                                    
                                <?php foreach ($foto as $key => $value) {?>

                                
                                    <div>
                                        <img class="mt-1 mb-1 mr-1 ml-1" src="<?= base_url('foto/'.$value->foto) ?>" height="150px" width="235px">
                                        <a href="<?= base_url('galeri/hapus_foto/'.$value->id_galeri.'/'.$value->id_foto)?>" onclick="return confirm('Apakah data ini akan dihapus ?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <label>Keterangan : <?= $value->ket_foto ?></label>
                                    </div>
                                        
                                   
                                  

                                <?php } ?>

                                </div>                                            
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>