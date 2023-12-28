<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>Hospital Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico"> 
         <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
		<style>
			table tr td{
				text-transform:uppercase;
			}
		</style>
    </head>

    <body data-topbar="light" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include'header.php';?>
    

           
            <!-- Start right Content here -->
           
             <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                               <div class="col-xl-12">
                                <div class="card">
                                <div class="card-header">
                                    <nav class="nav">
                                    <a class="nav-link " aria-current="page" href="incometransaction.php">INCOME TRANSACTION</a>
                                      <a class="nav-link " href="expensestransaction.php">EXPENSES TRANSACTION</a>
                                      <a class="nav-link " href="banktransaction.php">BANK TRANSACTION</a>
                                      <a class="nav-link active fw-bold" href="pettycashtransaction.php">PETTY CASH TRANSACTION</a>
                                      <a class="nav-link" href="countercashtransfer.php">COUNTER CASH TRANSFER</a>
                                     </nav>
                                </div>
                                <div class="row">
							   <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
										<!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
													
                                                    <span class="d-none d-sm-block">FORM</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">COUNTER 1 TRANSACTION LIST</span>
                                                </a>
                                            </li>
                                           
                                            
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          <div class="tab-pane active p-3" id="home2" role="tabpanel">
										                   <div class="card">
												                <div class="card-body">
												                <div class="row">
                                        <div id="tot_cash" class="col-sm-10">
                                          <label style="color:#0066FF; border-radius:2px;">
                                          <h4>Available Cash in Counter &nbsp;(1) &nbsp;: </h4>
                                        </label> <label id="lbl_tot_cash" style="color:#660000">
                                        <h4>Rs. <i class="fa fa-refresh fa-spin animated flip" id="spn_3" style="display: none;">
                                      </i>46226867.00/- </h4>
                                    </label>
                                  </div>
                                                   <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">DATE:</label>
                                                           <input type="date" name="" class="form-control" value="26-12-2023">
                                                       </div>
                                                       <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">TRANSACTION TYPE:</label>
                                                     <select class="form-control">
                                                        <option>-Select Transaction type-</option>
                                                     </select>
                                                       </div>
                                                       <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">NAME:</label>
                                                           <input type="text" name="" class="form-control" placeholder="Enter Name">
                                                       </div>
                                                       <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">AMOUNT:</label>
                                                           <input type="text" name="" class="form-control" placeholder="Enter Amount">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">NARRATION:</label>
                                                           <input type="text" name="" class="form-control" placeholder="">
                                                       </div>
                                                       <div class="col-xl-3" style="margin-top: 42px;">
                                                       <button type="button" data-bs-toggle="modal" data-bs-target="#exampleSubmit"  class="btn btn-primary"><i class="fa fa-plus-circle"></i> SUBMIT</button>
                                                       <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                                                       </div>
                                                       
													
												  </div>
												</div>
											</div>
											
                                            </div>
											<!--IPD Patients-->
											<div class="tab-pane p-3" id="profile2" role="tabpanel">
											 <div class="card">
												  <div class="card-body">
													<div class="row">
                                                     
                                         <div class="row mt-3">
                                        <div class="col-xl-12">
                                            <table id="datatable" class="table dt-responsive nowrap table-striped" 
                                            style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>SR. NO.</th>
                                                        <th>DATE</th>
                                                        <th>NAME</th>
                                                        <th>AMOUNT</th>
                                                        <th>TRANSACTION TYPE</th>
                                                        <th>NARRATION</th>
                                                    
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        
                                                    </tr>
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




                                
                                    
                                     
                                    </div> 
                                </div>
                              </div>
                            </div>
                        </div>
                    </div> 
                </div>




















            <!--End Page-content-->
				</div>
				
                                                
                <?php include'footer.php';?>
             </div>
             <!-- end main content-->
 
         </div>
         <!-- END layout-wrapper -->
         <!-- Add to Po -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        PLEASE SELECT SUPPLIER NAME
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- Submit-->
               
<div class="modal fade" id="exampleSubmit" tabindex="-1" aria-labelledby="exampleSubmit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleSubmit"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        PLEASE SELECT TRANSACTION TYPE
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
                <!-- Modal-1-->
        <div class="modal fade" id="examplesupplier" tabindex="-1" aria-labelledby="examplesupplier" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="examplesupplier">ADD NEW SUPPLIER IN MASTER</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label class="control-label">COMPANY NAME</label>
                <input type="text" class="form-control" name="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> SAVE</button>
                <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> CLOSE</button>
              </div>
            </div>
          </div>
        </div>
                <!-- Modal-2-->
                <div class="modal fade" id="examplematerial" tabindex="-1" aria-labelledby="examplematerial" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="examplematerial">ADD NEW MATERIAL IN MASTER</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label class="control-label">MATERIAL NAME</label>
                <input type="text" class="form-control" name="" placeholder="Enter Material Name">
              </div> 
              <div class="modal-body">
                <label class="control-label">MATERIAL CATEGORY</label>
                <select class="form-control">
                    <option >-Select-</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> SAVE</button>
                <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> CLOSE</button>
              </div>
            </div>
          </div>
        </div>
                <!-- Modal-3-->
                <div class="modal fade" id="exampleUOM" tabindex="-1" aria-labelledby="exampleUOM" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleUOM">ADD NEW UOM IN MASTER</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- <label class="control-label">COMPANY NAME</label> -->
                <input type="text" class="form-control" name="" placeholder="Enter Uom Name">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> SAVE</button>
                <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> CLOSE</button>
              </div>
            </div>
          </div>
        </div>
             <!-- Add to Po-->
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">ADD NEW UOM IN MASTER</h1> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label class="control-label">PLEASE SELECT SUPPLIER NAME</label>
                <!-- <input type="text" class="form-control" name="" placeholder="Enter Uom Name"> -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> OK</button>
                <!-- <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> CLOSE</button> -->
              </div>
            </div>
          </div>
        </div>
        
 
         <!-- Modal Add new reference doctor -->
         <div class="modal fade" id="addnewreferencedoctor" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Add New Reference Doctor</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <div class="row">
                             <div class="col-md-12 mt-3">
                                 <input type="text" name="" placeholder="Enter First Name" class="form-control">
                             </div>
                             <div class="col-md-12 mt-3">
                                 <input type="text" name="" placeholder="Enter Last Name" class="form-control">
                             </div>
                             <div class="col-md-12 mt-3">
                                 <input type="text" name="" placeholder="Enter Mobile No." class="form-control">
                             </div>
                         </div>
                         
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-primary">Save</button>
                     </div>
                 </div>
             </div>
         </div>
 
         <!-- Modal Add new consult doctor -->
         <div class="modal fade" id="addnewconsultdoctor" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Add New Consultant Doctor</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <div class="row">
                             <div class="col-md-6">
                                 <input type="text" name="" placeholder="Enter First Name" class="form-control">
                             </div>
                             <div class="col-md-6">
                                 <input type="text" name="" placeholder="Enter Last Name" class="form-control">
                             </div>
                         </div>
                         <div class="row mt-3">
                             <div class="col-md-6">
                                 <input type="text" name="" placeholder="Enter Mobile No." class="form-control">
                             </div>
                             <div class="col-md-6">
                                 <select class="form-control">
                                     <option>Select Doctor Type</option>
                                     <option>Inhouse</option>
                                     <option>Visiting</option>
                                 </select>
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-primary">Save</button>
                     </div>
                 </div>
             </div>
         </div>
 
        <!-- JAVASCRIPT -->
         <script src="assets/libs/jquery/jquery.min.js"></script>
         <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
         <script src="assets/libs/metismenu/metisMenu.min.js"></script>
         <script src="assets/libs/simplebar/simplebar.min.js"></script>
         <script src="assets/libs/node-waves/waves.min.js"></script>
         <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
         <!-- Required datatable js -->
         <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
         <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
         <!--Morris Chart-->
         <script src="assets/libs/morris.js/morris.min.js"></script>
         <script src="assets/libs/raphael/raphael.min.js"></script>
 
         <script src="assets/js/pages/dashboard.init.js"></script>
         
         <!-- Responsive examples -->
         <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
         <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
 
         <!-- Datatable init js -->
         <script src="assets/js/pages/datatables.init.js"></script>
         
         <!-- App js -->
         <script src="assets/js/app.js"></script>
         
     </body>
 </html>