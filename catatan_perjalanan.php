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
                        <div class="page-title-subheading">
                        </div>
                    </div>
                </div> 
            </div>
        </div>            
    <div class="tab-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i>Riwayat Perjalanan</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="default-datatable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu Tubuh</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no=1;
                                        $halaman = 10;
                                        $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                                        $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
                                        foreach($data as $value){
                                            $pecah = explode("|", $value);
                                            @$key = $pecah['1']."|".$pecah['2'];
                                            if($key==$user){
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $pecah['3'];?></td>
                                            <td><?= $pecah['4'];?></td>
                                            <td><?= $pecah['5'];?></td>
                                            <td><?= $pecah['6'];?></td>
                                            <td>
                                                <a href="?url=edit_catatan&id_catatan=<?= $pecah['0'] ?>" class="btn btn-warning">
                                                    <i class="fa fa-pen"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <?php }} ?>
                                    </tbody>  
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>

