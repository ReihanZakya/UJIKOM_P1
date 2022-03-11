  <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph text-success">
                        </i>
                    </div>
                    <div>Tulis Catatan Perjalanan
                    </div>
                </div>
                
            </div>
        </div>            

        <div class="tab-content-0">
    
            <div class="tab-pane tabs-animation fade show active"role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Tulis Catatan Perjalanan</h5>
                        <form class="" action="simpan_catatan.php" method="POST">
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10"><input name="tanggal" id="exampleEmail" placeholder="Tanggal" type="date" min="2022-1-1" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Jam</label>
                                <div class="col-sm-10"><input name="jam" id="examplePassword" placeholder="Jam" type="time" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Lokasi yang dituju</label>
                                <div class="col-sm-10"><input name="lokasi" id="examplePassword" placeholder="Masukan Lokasi" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Suhu tubuh</label>
                                <div class="col-sm-10"><input name="suhu" id="examplePassword" placeholder="Masukan Suhu Tubuh" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button class="btn btn-secondary" type="submit">Simpan</button>
                                    <button class="btn btn-secondary" type="reset">Kosongkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>


      
