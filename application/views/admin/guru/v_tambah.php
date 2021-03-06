<div class="content">
    <div class="card">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <h3 class="page-header"><span> Tambah Data Guru</span></h3>
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

                                            echo form_open_multipart('guru/tambah');
                                        ?>
                                        <div class="card-body table-full-width table-responsive">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>NIP</label>
                                                <input class="form-control" type="text" name="nip" placeholder="NIP" Required>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama Guru</label>
                                                <input class="form-control" type="text" name="nama_guru" placeholder="Nama Guru" Required>
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
                                                <label>Mata Pelajaran</label>
                                                <select name="id_mapel" class="form-control">
                                                    <option value="">-- Pilih Mata Pelajaran --</option>
                                                    <?php foreach ($mapel as $key => $value) { ?>
                                                    <option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Pendidikan</label>
                                                <select name="pendidikan" class="form-control">
                                                    <option value="">-- Pilih Pendidikan --</option>
                                                    <option value="D3">D3</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Foto Guru</label>
                                                <input type="file" class="form-control" name="foto_guru" Required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                                            <button type="reset" class="btn btn-warning"><i class="fa fa-redo"></i> Reset</button>
                                            <a href="<?= base_url('guru')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
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
