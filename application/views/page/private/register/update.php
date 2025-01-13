<div class="container-xl my-5" style="">
    <?= form_open_multipart('/RegisterController/edit/' . $registration['id_reg'] ); ?>

    <?php if($this->session->flashdata('error')) : ?>
        <div class="alert bg-danger">
            <div class="bg-danger rounded">
                <p class="mb-0"><?= $this->session->flashdata('error') ?></p>
            </div>
        </div>
    <?php endif ?>
    
    <!-- input method -->
    <input type="text" name="_method" value="UPDATE" hidden>
    
    <div class="form-group">
            <label for="bid_lomba">Bidang Lomba</label>
            <select name="bid_lomba" id="bid_lomba" class="form-control">
                <?php foreach ($bidang_lombas as $key => $bidang_lomba) :?>
                    <option value="<?= $bidang_lomba['id'] ?>"><?= $bidang_lomba['name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <label for="asal_sekolah">Asal sekolah</label>
            <input type="text" id="asal_sekolah" name="asal_sekolah" required placeholder="Masukkan nama sekolah" value="<?= $registration['asal_sekolah'] ?>" class="form-control">
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Masukkan nama siswa" value="<?= $registration['nama_siswa'] ?>" required class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="jk_siswa">Jenis Kelamin Siswa</label>
                    <select name="jk_siswa" id="jk_siswa" placeholder="Masukkan jenis kelamin siswa" class="form-control">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="nisn">NISN siswa</label>
                    <input type="number" name="nisn" id="nisn" maxlength="10" placeholder="Masukkan NISN siswa" value="<?= $registration['nisn'] ?>" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="tempat_lahir_siswa">Tempat lahir siswa</label>
                    <input type="text" name="tempat_lahir_siswa" placeholder="Masukkan tempat lahir siswa " value="<?= $registration['tempat_lahir_siswa'] ?>" class="form-control" id="tempat_lahir_siswa">
                </div>
                
                <div class="form-group">
                    <label for="tgl_lahir_siswa">Tanggal lahir siswa</label>
                    <input type="date" name="tgl_lahir_siswa" class="form-control" value="<?= $registration['tgl_lahir_siswa'] ?>" id="tgl_lahir_siswa">
                </div>
            
                <div class="form-group">
                    <label for="no_hp_guru">Nomor HP siswa</label>
                    <input type="number" name="no_hp_siswa" placeholder="masukkan nomor hp siswa" maxlength="14" value="<?= $registration['no_hp_siswa'] ?>" class="form-control" id="no_hp_guru">
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="nama_guru">Nama guru</label>
                    <input type="text" id="nama_guru" name="nama_guru" placeholder="masukkan nama guru" value="<?= $registration['nama_guru'] ?>" required class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="jk_guru">Jenis Kelamin guru</label>
                    <select name="jk_guru" id="jk_guru" class="form-control">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="nip">NIP guru</label>
                    <input type="text" name="nip" id="nip" placeholder="Masukkan NIP guru" maxlength="12" value="<?= $registration['nip'] ?>" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="tempat_lahir_guru">Tempat lahir guru</label>
                    <input type="text" name="tempat_lahir_guru" id="tempat_lahir_guru" value="<?= $registration['tempat_lahir_guru'] ?>" placeholder="Masukkan tempat lahir guru" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="tgl_lahir_guru">Tanggal lahir guru</label>
                    <input type="date" name="tgl_lahir_guru" id="tgl_lahir_guru" value="<?= $registration['tgl_lahir_guru'] ?>" class="form-control" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="no_hp_guru">Nomor HP guru</label>
                    <input type="number" min="0" name="no_hp_guru" id="no_hp_guru" maxlength="14" value="<?= $registration['no_hp_guru'] ?>" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="file_bukti">File input</label>
            <div class="input-group">
                <div class="">
                    <input type="file" name="file_bukti" id="file_bukti" value="<?= $registration['file_bukti'] ?>" accept="application/pdf">
                    <label class="custom-file-label" for="file_bukti">Choose file</label>
                </div>
            </div>
        </div>  
               
        <button class="btn btn-submit btn-primary w-100 rounded mt-3" type="submit">Submit</button>

    </form>
</div>