<div class="content">
    <div class="card">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                <h3 class="page-header"><span> Tambah Data Siswa</span></h3>
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

                                        echo form_open_multipart('siswa/tambah');
                                    ?>
                                    <div class="card-body table-full-width table-responsive">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>NISN</label>
                                            <input class="form-control" type="text" name="nisn" placeholder="NISN" Required>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Nama Siswa</label>
                                            <input class="form-control" type="text" name="nama_siswa" placeholder="Nama Siswa" Required>
                                        </div>
                                    </div> 
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" Required>
                                        </div>
                                    </div> 
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="text" name="tgl_lahir" placeholder="Tanggal Lahir" Required>
                                        </div>
                                    </div>  
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select name="kelas" class="form-control">
                                                <option value="">-- Pilih Kelas --</option>
                                                <option value="X IPA 1">X IPA 1</option>
                                                <option value="X IPA 2">X IPA 2</option>
                                                <option value="X IPS 1">X IPS 1</option>
                                                <option value="X IPS 2">X IPS 2</option>
                                                <option value="X BAHASA 1">X BAHASA 1</option>
                                                <option value="X BAHASA 2">X BAHASA 2</option>
                                                <option value="XI IPA 1">XI IPA 1</option>
                                                <option value="XI IPA 2">XI IPA 2</option>
                                                <option value="XI IPS 1">XI IPS 1</option>
                                                <option value="XI IPS 2">XI IPS 2</option>
                                                <option value="XI BAHASA 1">XI BAHASA 1</option>
                                                <option value="XI BAHASA 2">XI BAHASA 2</option>
                                                <option value="XII IPA 1">XII IPA 1</option>
                                                <option value="XII IPA 2">XII IPA 2</option>
                                                <option value="XII IPS 1">XII IPS 1</option>
                                                <option value="XII IPS 2">XII IPS 2</option>
                                                <option value="XII BAHASA 1">XII BAHASA 1</option>
                                                <option value="XII BAHASA 2">XII BAHASA 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Foto Siswa</label>
                                            <input type="file" class="form-control" name="foto_siswa" Required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                                        <button type="reset" class="btn btn-warning"><i class="fa-redo"></i> Reset</button>
                                        <a href="<?= base_url('siswa')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
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
