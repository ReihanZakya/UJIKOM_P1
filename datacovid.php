<?php

$connected = @fopen('https://data.covid19.go.id/public/api/skor.json', 'r');
if($connected){
    $api_url = 'https://data.covid19.go.id/public/api/skor.json';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$data = $response_data->data;
?>
<div class="app-main__outer mx-auto animated bounceInDown">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <a href="?url=catatan_perjalanan">
                            <i class="pe-7s-folder"></i>
                        </a>
                    </div>
                    <div><a href="?url=catatan_perjalanan">Informasi Kasus COVID-19 Di Indonesia</a>
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
                    <div class="card-header"><i class="fa fa-table"></i>Informasi Covid-19</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="default-datatable" class="table table-bordered">
                                    <thead>
                                        <tr>
										<th>no</th>
										<th>Provinsi</th>
										<th>Daerah</th>
										<th>Resiko</th>								
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									$no=1;
									foreach($data as $item) { 

									?>
										<tr>
											<td><?= $no++ ?></td>
											<td style="text-overflow: ellipsis; overflow: hidden;"><?= $item->prov ?></td>
											<td><?= $item->kota ?></td>
											<td><?= $item->hasil ?></td>					
										</tr>
										<?php } ?>
                                    </tbody>  
                                </table>
                            </div>
                        </div>
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
<?php } ?>
<?php if(!$connected){ ?>
    <div class="app-main__outer mx-auto animated bounceInDown">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <a href="?url=data_covid">
                            <i class="pe-7s-folder"></i>
                        </a>
                    </div>
                    <div><a href="?url=data_covid">Data Kasus COVID 19 Di Indonesia</a>
                        <div class="page-title-subheading">
                        </div>
                    </div>
                </div> 
            </div>
        </div>            
    <div class="tab-content">
        <div class="row">
            <div class="col-lg-12">
                <h2>Tidak Ada Koneksi Internet <i class="pe-7s-global"></i></h2>
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
    <?php } ?>
  

