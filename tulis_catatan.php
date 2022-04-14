  <div class="app-main__outer mx-auto animated bounceInDown">
      <div class="app-main__inner">
          <div class="app-page-title">
              <div class="page-title-wrapper">
                  <div class="page-title-heading">
                      <div class="page-title-icon">
                          <a href="?url=tulis_catatan">
                              <i class="pe-7s-pen"></i>
                          </a>
                      </div>
                      <div style="color: blue;"> Tulis Catatan Perjalanan
                      </div>
                  </div>
                  <div class="page-title-actions">
                      <div class="d-inline-block dropdown">
                          <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-primary">
                              <span class="btn-icon-wrapper pr-2 opacity-7">
                                  <i class="fa fa-business-time fa-w-20"></i>
                              </span>
                              Menu
                          </button>
                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                              <ul class="nav flex-column">
                                  <li class="nav-item">
                                      <a href="user.php" class="nav-link">
                                          <i class="nav-link-icon lnr-inbox"></i>
                                          <span>
                                              Beranda
                                          </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="?url=tulis_catatan" class="nav-link">
                                          <i class="nav-link-icon lnr-book"></i>
                                          <span>
                                              Tulis Catatan
                                          </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="?url=catatan_perjalanan" class="nav-link">
                                          <i class="nav-link-icon lnr-picture"></i>
                                          <span>
                                              Kelola Catatan
                                          </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="?url=data_covid" class="nav-link">
                                          <i class="nav-link-icon lnr-file-empty"></i>
                                          <span>
                                              Informasi Covid-19
                                          </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="tab-content-0">

              <div class="tab-pane tabs-animation fade show active" role="tabpanel">
                  <div class="main-card mb-3 card">
                      <div class="card-body">
                          <h5 class="card-title">Tulis Catatan Perjalanan</h5>
                          <hr>
                          <form class="" action="simpan_catatan.php" method="POST">
                              <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                                  <div class="col-sm-10"><input name="tanggal" id="exampleEmail" placeholder="Tanggal" type="date" min="2022-1-1" class="form-control" required></div>
                              </div>
                              <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Jam</label>
                                  <div class="col-sm-10"><input name="jam" id="examplePassword" placeholder="Jam" type="time" class="form-control" required></div>
                              </div>
                              <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Lokasi yang dituju</label>
                                  <div class="col-sm-10"><input name="lokasi" id="examplePassword" placeholder="Masukan Lokasi" type="text" class="form-control" required></div>
                              </div>
                              <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Suhu tubuh</label>
                                  <div class="col-sm-10"><input name="suhu" id="examplePassword" placeholder="Masukan Suhu Tubuh Dalam Celcius" type="number" step="any" max="45" min="30" class="form-control" required></div>
                              </div>
                              <div class="position-relative row form-check">
                                  <div class="col-sm-10 offset-sm-2">
                                      <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                      <button class="btn btn-primary" type="reset"><i class="fa fa-trash"></i> Batal</button>
                                  </div>
                              </div>
                          </form>
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