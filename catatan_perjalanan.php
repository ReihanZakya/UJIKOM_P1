<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph text-success">
                        </i>
                    </div>
                    <div>Edit perjalanan
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
                                <table id="example" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu Tubuh</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = file('catatan.txt',FILE_IGNORE_NEW_LINES);
                                        $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
                                    foreach($data as $value){
                                        $a =explode("|",$value);
                                        @$b =$a['1']."|".$a['2'];
                                        if($b==$user){

                                        ?>
                                        <tr>
                                            <td><?= $a['3'];?></td>
                                            <td><?= $a['4'];?></td>
                                            <td><?= $a['5'];?></td>
                                            <td><?= $a['6'];?></td>
                                            <td>
                                                <a href="?url=edit_catatan$id_catatan=<? $pecah['0'] ?>" class="btn btn-warning">
                                                    <i class="fa fa-pen"></i>Edit
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

