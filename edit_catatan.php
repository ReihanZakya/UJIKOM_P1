 <div class="app-main__outer mx-auto animated bounceInDown">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                        <a href="?url=catatan_perjalanan">
                            <i class="pe-7s-note"></i>
                        </a>
                        </div>
                        <div><a href="?url=catatan_perjalanan">Edit Catatan</a>
                        </div>
                    </div>
                    
                </div>
            </div>            
    
            <div class="tab-content-0">
                <div class="tab-pane tabs-animation fade show active"role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Edit Catatan Perjalanan</h5>
                        <?php 
                            $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                            $id_catatan = $_GET['id_catatan'];
                            foreach($data as $value){
                                $pecah = explode('|', $value);
                                if ($pecah['0']==$id_catatan){
                        ?>
                            <form class="" action="simpan_edit_catatan.php" method="POST">
                                <input type="hidden" name="id_catatan" value="<?= $pecah['0']; ?>">
                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10"><input value="<?= $pecah['3']; ?>" name="tanggal" id="exampleEmail" placeholder="Tanggal" type="date" min="2022-1-1" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Jam</label>
                                    <div class="col-sm-10"><input value="<?= $pecah['4']; ?>" name="jam" id="examplePassword" placeholder="Jam" type="time" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Lokasi yang dituju</label>
                                    <div class="col-sm-10"><input value="<?= $pecah['5']; ?>" name="lokasi" id="examplePassword" placeholder="Masukan Lokasi" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Suhu tubuh</label>
                                    <div class="col-sm-10"><input value="<?= $pecah['6']; ?>" name="suhu" id="examplePassword" placeholder="Masukan Suhu Tubuh" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-check">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                        <a href="?url=catatan_perjalanan">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-mail-reply-all"></i> Kembali</button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
</div>