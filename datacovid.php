<?php

$api_url = 'https://data.covid19.go.id/public/api/prov.json';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$data = $response_data->list_data;
?>

                    
<div class="app-main__outer mx-auto animated bounceInDown">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <a href="?url=tulis_catatan">
                            <i class="pe-7s-folder"></i>
                        </a>
                    </div>
                    <div><a href="?url=tulis_catatan"> Data Kasus Covid 19 Di Indonesia</a></div>
                </div>   
            </div>
        </div>            

        <div class="tab-content-0">
    
            <div class="tab-pane tabs-animation fade show active"role="tabpanel">
				<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header"><i class="fa fa-table"></i> Data covid 19 di berbagai provinsi di Indonesia</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered">
												<thead>
													<tr>
														<th>no</th>
														<th>Provinsi</th>
														<th>Jumlah Kasus</th>
														<th>Jumlah Sembuh</th>
														<th>Jumlah Dirawat</th>
														<th>Jumlah Dirawat</th>
													</tr>
												</thead>
												<tbody>
												<?php
												$no=1;
												foreach($data as $item) { 

												?>
													<tr>
														<td><?= $no++ ?></td>
														<td><?= $item->key ?></td>
														<td><?= number_format($item->jumlah_kasus)?></td>
														<td><?= number_format($item->jumlah_sembuh)?></td>
														<td><?= number_format($item->jumlah_dirawat)?></td>
														<td><?= number_format($item->jumlah_meninggal)?></td>
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
        </div>

    </div>  
</div>