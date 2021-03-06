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
                                $pisah = explode('|', $value);
                                if ($pisah['0']==$id_catatan){
                        ?>
                            <form class="" action="simpan_edit_catatan.php" method="POST">
                                <input type="hidden" name="id_catatan" value="<?= $pisah['0']; ?>">
                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10"><input value="<?= $pisah['3']; ?>" name="tanggal" id="exampleEmail" placeholder="Tanggal" type="date" min="2022-1-1" class="form-control" required></div>
                                </div>
                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Jam</label>
                                    <div class="col-sm-10"><input value="<?= $pisah['4']; ?>" name="jam" id="examplePassword" placeholder="Jam" type="time" class="form-control" required></div>
                                </div>
                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Lokasi yang dituju</label>
                                    <div class="col-sm-10"><input value="<?= $pisah['5']; ?>" name="lokasi" id="examplePassword" placeholder="Masukan Lokasi" type="text" class="form-control" required></div>
                                </div>
                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Suhu tubuh</label>
                                    <div class="col-sm-10"><input value="<?= $pisah['6']; ?>" name="suhu" id="examplePassword" placeholder="Masukan Suhu Tubuh Dalam Celcius" type="number" step="any" max="45" min="30" class="form-control" required></div>
                                </div>
                                <div class="position-relative row form-check">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                        <a href="?url=catatan_perjalanan">
                                        <button class="btn btn-primary" type="button"><i class="pe-7s-back"></i>  Kembali</button>
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
        <div class="app-wrapper-footer">
            <div class="app-footer">
                <div class="app-footer__inner">
                    <div class="app-footer-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    &copy; Mohammad Reihan Zakya Alawi
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>  
</div>