<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-fw fa-solid fa-download fa-sm text-white-50"></i> 
            Generate Report
        </a>
     </div>

     <!-- Start content -->
     <div class="row">
        <div class="col-lg-9 col-md col-sm mb-4">
            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-solid fa-users fa-sm"></i> Data Jobseeker</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive table-sm" style="height: 320px;overflow: auto;">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover table-xs" width="100%" cellspacing="0">
                                <thead class="thead-light">
									<tr>
										<th class="sm" style="text-align: center;">#</th>
										<th class="sm">Name</th>
                                        <th class="sm">Company Name</th>
                                        <th class="sm" style="text-align: center;">Status</th>
										<th style="text-align: center;">Action</th>
									</tr>
								</thead>
                                <tbody>
                                    <tr>
                                        <td width="2%" style="text-align: center;">1</td>
                                        <td width="20%">Mahisa Taruna</td>
                                        <td width="20%">PT. ABCD</td>
                                        <td width="3%" style="text-align: center;">
                                            <i class="fas fa-fw fa-solid fa-check fa-sm text-primary"></i>
                                        </td>
                                        <td width="4%" style="text-align: center;">
											<a href="" onclick="return confirm('See detail account?')" class="btn btn-circle btn-sm btn-info"><i class="fas fa-fw fa-solid fa-eye fa-sm"></i></a>
                                            <a href="" onclick="return confirm('See detail account?')" class="btn btn-circle btn-sm btn-danger"><i class="fas fa-fw fa-solid fa-trash fa-sm"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     <!-- End -->

</div>

</div>