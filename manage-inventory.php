<?php require_once 'db.php';  ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Manage Inventory</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
      <link rel="shortcut icon" href="assets/images/logo.jpeg">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

           <!-- alertifyjs Css -->
        <link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

        <!-- alertifyjs default themes  Css -->
        <link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />


        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php  require_once 'sidebar.php';  ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                               <!--  <div class="col-md-8">
                                    <h4 class="page-title mb-1">Form Elements</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Elements</li>
                                    </ol>
                                </div> -->
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                       <!--  <div class="dropdown">
                                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">

                             <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Manage Inventories</h4>
                                        <form id="manage-inventories" method="POST">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th scope="col">Item Name</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Seial</th>
                                                        <th scope="col">Remarks</th>
                                                        <th scope="col">Department</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php   
$counter = 1;
$getInventories = mysqli_query($connectionString,"SELECT * FROM inventory ORDER BY inventory_id ASC")or die(mysqli_error($connectionString));
while($eachInventory = mysqli_fetch_array($getInventories)){  
    $get_name = $eachInventory['name'];
    $get_quantity = $eachInventory['quantity'];
    $get_serial = $eachInventory['serial'];
    $get_remarks= $eachInventory['remarks'];
    $get_department = $eachInventory['departments'];
   ?>
    <tr>
    <td><input type="text" class="form-control" name="name[]" value="<?php echo $get_name; ?>"></td>
    <td><input type="number" class="form-control" name="quantity[]" value="<?php echo $get_quantity; ?>"></td>
    <td><input type="text" class="form-control" name="serial[]" value="<?php echo $get_serial; ?>"></td>
    <td><textarea class="form-control" rows="2" name="remarks[]"><?php echo $get_remarks; ?></textarea></td>
    <td><select class="form-control" name="department[]">
        <?php 

        $get_departments = mysqli_query($connectionString,"SELECT * FROM departments")or die(mysqli_error($connectionString));

        while($each_department = mysqli_fetch_array($get_departments)){

        $department_id = $each_department["department_id"];
        $department_name = $each_department["department_name"];

        ?>

<option value="<?php echo $department_id; ?>" <?php  if($get_department === $department_id){echo 'selected';} ?>><?php echo $department_name;  ?></option>


                                              <?php  }    ?>
    </select></td>                                                                        
</tr>


<?php $counter++; }
?>
                                                        
                                                </tbody>

                                                <tfoot>
                                                    <tr>
                                                        <td><button type="submit" class="btn btn-outline-primary">Save All Entries</button></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>






                        </div>
                        <!-- end container-fluid -->
                    </div> 
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->

                
                 <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2020 © Step Network.
                            </div>
                           
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->






        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

         <!-- alertifyjs js -->
        <script src="assets/libs/alertifyjs/build/alertify.min.js"></script>

        <script src="assets/js/pages/alertifyjs.init.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>


        <script src="assets/js/app.js"></script>

        <script type='text/javascript'>
                $(document).ready(function(){

                     alertify.set('notifier','position', 'top-right');
                    $('#manage-inventories').submit(function(e){
                    e.preventDefault();
                    var formdata = $(this).serialize();

                 $.ajax({
                url:'api_calls/update-inventories.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "success"){
               alertify.notify('Updated Successfully', 'success', 2, function(){ window.location.reload()});
                }else if(res === "already"){
                 alertify.error("Name Exists Already");
                
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

                })


            });
    
    </script>

    </body>
</html>


    </body>
</html>
