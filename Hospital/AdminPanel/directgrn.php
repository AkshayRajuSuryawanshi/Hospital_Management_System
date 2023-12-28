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
                                      <a class="nav-link active fw-bold" href="directgrn.php">DIRECT GRN</a>
                                      <a class="nav-link" href="materialissueentry.php">MATERIAL ISSUE ENTRY</a>
                                      <a class="nav-link" href="materialreturnentry.php">MATERIAL RETURN ENTRY</a>
                                      <a class="nav-link" href="purchasereturn.php">PURCHASE RETURN</a>
                                      <a class="nav-link" href="supplierpayment.php">SUPPLIER PAYMENT</a>
                                     </nav>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                         <div class="row mt-3">
                                                       <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">SUPPLIER NAME</label>
                                                           <button type="button" data-bs-toggle="modal" data-bs-target="#examplesupplier" class="mr btn btn-pill-right btn-primary" style="padding:1px; width:30px; border-radius:2px;" data-placement="right" title="Add New Supplier In Supplier Master...."> <i class="fa fa-plus-circle"></i></button>
                                                           <select class="form-control">
                                                            <option>--Select Supplier--</option>
                                                           </select>
                                                       </div>
                                                       <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">BILL GRN NO</label>
                                                           <input type="text" name="" class="form-control">
                                                       </div>
                                                       <div class="col-xl-3">
                                                           <label class="control-label text-primary fw-bold">BILL GRN DATE</label>
                                                           <input type="date" name="" class="form-control" value="26-12-2023">
                                                       </div>
                                                       <div class="col-xl-3">
                                                       <button type="button" style="margin-top: 26px;" data-bs-toggle="modal" data-bs-target="#examplesearchgrn" class="btn btn-primary"><i class="fa fa-search"></i> SEARCH GRN</button>
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">MATERIAL NAME</label>
                                                           <button type="button" data-bs-toggle="modal" data-bs-target="#examplematerial" class="mr btn btn-pill-right btn-primary" style="padding:1px; width:30px; border-radius:2px;" data-placement="right" title="Add New Supplier In Supplier Master...."> <i class="fa fa-plus-circle"></i></button>
                                                           <select class="form-control">
                                                            <option>--Select Material Name--</option>
                                                           </select>
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">UOM</label>
                                                           <button type="button" data-bs-toggle="modal" data-bs-target="#exampleuom" class="mr btn btn-pill-right btn-primary" style="padding:1px; width:30px; border-radius:2px;" data-placement="right" title="Add New Supplier In Supplier Master...."> <i class="fa fa-plus-circle"></i></button>
                                                           <select class="form-control">
                                                            <option>--Select Uom--</option>
                                                           </select>
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">STORE</label>
                                                           <button type="button" data-bs-toggle="modal" data-bs-target="#examplestore" class="mr btn btn-pill-right btn-primary" style="padding:1px; width:30px; border-radius:2px;" data-placement="right" title="Add New Supplier In Supplier Master...."> <i class="fa fa-plus-circle"></i></button>
                                                           <select class="form-control">
                                                            <option>--Select Store--</option>
                                                           </select>
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">PUR. QTY</label>
                                                           <input type="text" name="" class="form-control" value="0">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">UNIT/QTY</label>
                                                           <input type="text" name="" class="form-control" value="0">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">BATCH NO</label>
                                                           <input type="text" name="" class="form-control" placeholder="Batch No">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">FREE QTY</label>
                                                           <input type="text" name="" class="form-control" value="0">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                           <label class="control-label text-primary fw-bold">TOTAL QTY</label>
                                                           <input type="text" name=""  class="form-control" value="0">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                            <label class="control-label text-primary fw-bold">RATE</label>
                                                            <input type="text" name=""  class="form-control" value="0">
                                                       </div>
                                                       <div class="col-xl-3 mt-3">
                                                            <label class="control-label text-primary fw-bold">TOTAL</label>
                                                            <input type="text" name=""  class="form-control" value="0">
                                                       </div>   <div class="col-xl-2 mt-3">
                                                            <label class="control-label text-primary fw-bold">TAX(%)</label>
                                                            <input type="text" name=""  class="form-control" value="0">
                                                       </div>   <div class="col-xl-2 mt-3">
                                                            <label class="control-label text-primary fw-bold">TAX AMT</label>
                                                            <input type="text" name=""  class="form-control" value="0">
                                                       </div>
                                                       <div class="col-xl-2 ">
                                                       <button type="button" style="margin-top: 42px;" data-bs-toggle="modal" data-bs-target="#exampleadd" class="btn btn-primary">ADD</button>
                                                       </div>
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
                                                        <th>QTY</th>
                                                        <th>PER UNIT QTY</th>
                                                        <th>FREE QTY</th>
                                                        <th>TOTAL QTY</th>
                                                        <th>BATCH NO</th>
                                                        <th>EXPIRY DATE</th>
                                                        <th>RATE</th>
                                                        <th>TOTAL</th>
                                                        <th>TAX(%)</th>
                                                        <th>TAX AMOUNT</th>
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
                                        <div class="row col-lg-12 col-md-12  mt-2" style="margin-left:15%;">
			  <div class="col-md-3"></div>
			   <div class="col-md-4">

			   		  <div class="row" style="margin-top: 35px;padding-bottom: 5px">
			   		  	<div class="col-md-6"></div>
                <div class="col-md-3" style="">
                   <label for="cust_date">Discount(%):</label>
				</div>
               	<div class="col-sm-3">
                   <input type="text" class="form-control  input-sm" id="txt_discount" name="txt_discount" onkeypress="return IsNumeric(event);" onkeyup="d()" value="0.00" placeholder="Enter Discount">
                </div>
            </div> 
              <div class="row">
              	<div class="col-md-6"></div>
                <div class="col-md-3" style="">
                    <label for="cust_date" style="display: none;">Total Tax(%):</label>
				</div>
            	<div class="col-sm-3">   	
                    <input type="text" style="display: none;" class="form-control  input-sm" id="txt_vat" name="txt_vat" onkeypress="return IsNumeric(event);" onkeyup="t()" value="0.00" placeholder="Enter Vat">
              	</div>
            </div>
			   </div>
			   <div class="col-md-5">
			   	<div class="row" style="padding-bottom: 5px">
			   		
                 <div class="col-md-3" style="">
                    <label for="cust_name">Bill Amount:</label>
               	</div>
               	<div class="col-sm-4">
                 	<input type="text" class="form-control  input-sm" id="txt_bill_amount" name="txt_bill_amount" onkeypress="return IsNumeric(event);" value="0.00" placeholder="Enter Bill Amount" readonly="">
               </div>
           </div>
          
            <div class="row" style="padding-bottom: 5px">
                <div class="col-md-3" style="">
                   <label for="cust_date">Discount Amt:</label>
				</div>
            <div class="col-sm-4">   
                   <input type="text" class="form-control  input-sm" id="txt_discount_amt" name="txt_discount_amt" onkeypress="return IsNumeric(event);" onkeyup="d1()" value="0.00" placeholder="Enter Discount">
              	</div>
            </div>
                      
          
                     
             <div class="row" style="padding-bottom: 5px">
                <div class="col-md-3" style="">
                    <label for="cust_date">Total Tax Amt:</label>
				</div>
            	<div class="col-sm-4"> 	
                    <input type="text" class="form-control  input-sm" id="txt_vat_amt" name="txt_vat_amt" readonly="" onkeypress="return IsNumeric(event);" value="0.00" placeholder="Enter Vat">
              	</div>
            </div>
                      
              <div class="row">
                <div class="col-md-3" style="">
                 <label for="cust_date">Transportation Charges:</label>
				 
				 </div>
            	<div class="col-sm-4"> 	
                 <input type="text" class="form-control  input-sm" id="txt_tc" name="txt_tc" onblur="tc()" onkeyup="tc()" onkeypress="return IsNumeric(event);" value="0.00" placeholder="Enter Transportation Charges">
              </div>
            </div>
                     
               <div class="row" style="padding-bottom: 5px">

                <div class="col-md-3" style="">
                 <label for="cust_date">Other Charges:</label>
				 
				  </div>
            	<div class="col-sm-4"> 
                 <input type="text" class="form-control  input-sm" id="txt_other" name="txt_other" onblur="tc()" onkeyup="tc()" onkeypress="return IsNumeric(event);" value="0.00" placeholder="Enter Other Charge">
               </div>
            </div>
                     
               <div class="row" style="padding-bottom: 15px">
                <div class="col-md-3" style="">
                 <label for="cust_date">Final Total:</label>
				 </div>
            	<div class="col-sm-4"> 
                 <input type="text" class="form-control input-sm" id="txt_Total" name="txt_Total" readonly="" onkeypress="return IsNumeric(event);" value="" placeholder="Enter Total">
               </div>
            </div>
     </div> 
 </div>
                                                       <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                       <button type="button"data-bs-toggle="modal" data-bs-target="#exampleadd" class="btn btn-primary"><i class="fa fa-plus-circle"></i> SUBMIT</button>
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
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
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
                <input type="text" class="form-control" name="">
              </div>
              <div class="modal-body">
                <label class="control-label">MATERIAL CATEGORY</label>
           <select class="form-control">
            <option>Select</option>
           </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> SAVE</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
              </div>
            </div>
          </div>
        </div>
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
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> SAVE</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
              </div>
            </div>
          </div>
        </div>
          <!-- Modal-4-->
          <div class="modal fade" id="examplestore" tabindex="-1" aria-labelledby="examplestore" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="examplestore">ADD NEW STORE IN MASTER</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- <label class="control-label">MATERIAL NAME</label> -->
                <input type="text" class="form-control" name="" placeholder="Enter Store Name">
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> SAVE</button>
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
              PLEASE SELECT SUPPLIER NAME
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal"><i class="fa fa-check"></i> OK</button>
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

          <!-- Search GRN -->
          <div class="modal fade" id="examplesearchgrn" tabindex="-1" aria-labelledby="examplesearchgrn" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="examplesearchgrn">OLD PO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-xl-3">
                        <label class="control-label text-primary fw-bold">SUPPLIER NAME</label>
                        <select class="form-control">
                            <option>ALL</option>
                           
                         </select>
                    </div>
                    <div class="col-xl-3">
                        <label class="control-label text-primary fw-bold">FROM PO DATE</label>
                        <input type="date" name="" class="form-control">
                    </div>
                    <div class="col-xl-3">
                        <label class="control-label text-primary fw-bold">TO PO DATE</label>
                        <input type="date" name="" class="form-control">
                    </div>
                    <div class="col-xl-3">
                       <button type="button" style="margin-top: 26px;"  data-bs-toggle="modal" data-bs-target="#examplesearch" class="btn btn-primary"><i class="fa fa-search"></i> SEARCH</button>
                    </div>
                    <div class="row mt-3">
                                        <div class="col-xl-12">
                                            <table id="datatable" class="table dt-responsive nowrap table-striped" 
                                            style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>SR. NO.</th>
                                                        <th>SUPPLIER NAME</th>
                                                        <th>PO DATE</th>
                                                   
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">CLOSE</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Search-->
               
<div class="modal fade" id="examplesearch" tabindex="-1" aria-labelledby="examplesearch" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="examplesearch"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        PLEASE SELECT FROM GRN DATE
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
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