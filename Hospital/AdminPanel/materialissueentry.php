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
                                      <a class="nav-link " aria-current="page" href="purchaseorder.php">PURCHASE ORDER</a>
                                      <a class="nav-link " href="grnagainstpo.php">GRN AGAINST PO</a>
                                      <a class="nav-link " href="directgrn.php">DIRECT GRN</a>
                                      <a class="nav-link active fw-bold" href="materialissueentry.php">MATERIAL ISSUE ENTRY</a>
                                      <a class="nav-link" href="materialreturnentry.php">MATERIAL RETURN ENTRY</a>
                                      <a class="nav-link" href="purchasereturn.php">PURCHASE RETURN</a>
                                      <a class="nav-link" href="supplierpayment.php">SUPPLIER PAYMENT</a>
                                     </nav>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                         <div class="row mt-3">
                                                       <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">DEPARTMENT NAME</label>
                                                        <select class="form-control">
                                                            <option>-Select Department Name-</option>
                                                        </select>
                                                       </div>
                                                       <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">ISSUE PERSON NAME</label>
                                                           <input type="text" name="" class="form-control" placeholder="Remark:Issue Person Name">
                                                       </div>
                                                       <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">ISSUE DATE</label>
                                                           <input type="date" name="" class="form-control" value="26-12-2023">
                                                       </div>
                                                       <div class="col-xl-3">
                                                       <button type="button" style="margin-top: 26px;" class="btn btn-primary"><i class="fa fa-search"></i> SEARCH ISSUED DETAILS</button>
                                                       </div>
                                                     
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">MATERIAL NAME</label>
                                                           <select class="form-control">
                                                            <option>-Select Material Name-</option>
                                                        </select>
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">UOM</label>
                                                           <button type="button" data-bs-toggle="modal" data-bs-target="#exampleuom" class="mr btn btn-pill-right btn-primary" style="padding:1px; width:30px; border-radius:2px;" data-placement="right" title="Add New Supplier In Supplier Master...."> <i class="fa fa-plus-circle"></i></button>
                                                           <select class="form-control">
                                                            <option>-Select Uom-</option>
                                                        </select>
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">ISSUE FROM STORE</label>
                                                           <select class="form-control">
                                                            <option>-Select Store-</option>
                                                        </select>
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">AVAILABLE QTY</label>
                                                           <input type="text" name="" class="form-control" placeholder="Available QTY">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">ISSUE QTY</label>
                                                           <input type="text" name="" class="form-control" value="0">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">RATE</label>
                                                           <input type="text" name="" class="form-control" placeholder="Rate">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">REMARK</label>
                                                           <input type="text" name="" class="form-control" placeholder="Remark">
                                                       </div>
                                                       <div class="col-xl-3">
                                                       <button type="button" style="margin-top: 42px;" data-bs-toggle="modal" data-bs-target="#exampleadd" class="btn btn-primary">ADD TO ISSUE</button>
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                       <button type="button" class="btn btn-primary"><i class="fa fa-user"></i> OPD PATIENT</button>
                                                       <button type="button" class="btn btn-primary"><i class="fa fa-user"></i> IPD PATIENT</button>
                                                       </div>
                                                       <!-- <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">MIDDLE NAME</label>
                                                           <input type="text" name=""  class="form-control">
                                                       </div>
                                                       <div class="col-xl-3">
                                                            <label class="control-label text-primary fw-bold">LAST NAME</label>
                                                            <input type="text" name=""  class="form-control">
                                                       </div> -->
                                                   </div>
                                     </div>
                                    <div class="row mt-3">
                                        <div class="col-xl-12">
                                            <table id="datatable" class="table dt-responsive nowrap table-striped" 
                                            style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>MATERIAL NAME</th>
                                                        <th>UOM</th>
                                                        <th>STORE</th>
                                                        <th>EXPIRY DATE</th>
                                                        <th>ISSUED QTY</th>
                                                        <th>RATE</th>
                                                        <th>REMARK</th>
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
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                         
                                                       <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                                       <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleadd" class="btn btn-primary"><i class="fa fa-plus-circle"></i> SUBMIT</button>
                                                       <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
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
 
         <!-- Modal-3-->
        <div class="modal fade" id="exampleuom" tabindex="-1" aria-labelledby="exampleuom" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleuom">ADD NEW UOM IN MASTER</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- <label class="control-label">MATERIAL NAME</label> -->
                <input type="text" class="form-control" name="" placeholder="Enter UOM">
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" ><i class="fa fa-check"></i> SAVE</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
              </div>
            </div>
          </div>
        </div>

        <!-- ADD-->
        <div class="modal fade" id="exampleadd" tabindex="-1" aria-labelledby="exampleadd" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <!-- <h1 class="modal-title fs-5" id="exampleadd">ADD NEW STORE IN MASTER</h1> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              PLEASE SELECT DEPARTMENT NAME
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-success"data-bs-dismiss="modal"><i class="fa fa-check"></i> OK</button>
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