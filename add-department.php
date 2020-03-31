
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Add Department</title>
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

           

            <!-- ========== Left Sidebar Start ========== -->
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
                                <!-- <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
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
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
    
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Add Department</h4>
                                           
                                            <form id="add-department" method="POST">
                                            <div>
                                                <div class="form-group form-group-custom mb-4 mt-4">
                                                    <input type="text" class="form-control" id="department_name" required name="department_name">
                                                    <label for="department_name">Department Name</label>
                                                </div>
                                              
                                                
                                                <div class="mt-4">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- end row -->



                             <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">All Departments</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date Created</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="loadTable">
                                                   
                                                        
                                                </tbody>
                                            </table>
                                        </div>
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

      
      <!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title mt-0" id="myModalLabel">Edit Department</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form class="" id="edit-department" method="POST">
    <input type="hidden" name="depart_id" value="" id="depart_id">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="edit-department-name">Name</label>
                                                    <input type="text" name="department_name" class="form-control edit-department-name" id="edit-department-name" placeholder="Department Name"required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                           
                                            
                                        
</div>
<div class="modal-footer">
<button type="button" class="btn btn-outline-secondary waves-effect" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-outline-primary waves-effect waves-light">Update</button>
</form>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->





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
                   
                    fetchDepartments();

                     alertify.set('notifier','position', 'top-right');
                    $('#add-department').submit(function(e){
                    e.preventDefault();
                    var formdata = $(this).serialize();

                 $.ajax({
                url:'api_calls/add-department.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "success"){
              alertify.success("Department Added Successfully");
              $('#add-department').trigger("reset");
              fetchDepartments();
                }else if(res === "already"){
                 alertify.error("Name Exists Already");
                
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

     

                })


            $('#edit-department').submit(function(e){
                    e.preventDefault();
                    var formdata = $(this).serialize();

                    if($('.edit-department-name').val()===''){
                        alertify.error("Please Enter Name");
                    }else{

                 $.ajax({
                url:'api_calls/update-department-details.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                
                if(res === "success"){
              alertify.success("Updated Successfully");
              $('#myModal').modal('hide');
              $('#edit-department').trigger("reset");
              fetchDepartments();

                }else if(res === "already"){
                 alertify.error("Name Exists Already");
                
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

            }   

                });


            $(document).on('click','.btn-edit',function(e){
                

                var id = $(this).attr('id');

                $('#depart_id').val(id);

                  $.ajax({
                url:'api_calls/get-department-details.php',
                type: 'POST',
                data: {id:id},
                success:function(res){
                
                $('.edit-department-name').val(res.name);
                $('#myModal').modal('show');
            },
                error:function(res){
                    console.log(res);
                }

            });
            })


            $(document).on('click','.btn-delete',function(e){
                var id = $(this).attr('id');
                alertify.confirm("Are You Sure Want To Delete This Department",
                  function(){
                    $.ajax({
                url:'api_calls/delete-department.php',
                type: 'POST',
                data: {id:id},
                success:function(res){
                
                if(res==='success'){
                    alertify.success("Deleted Successfully");
                    fetchDepartments();
                }else{
                    alertify.error("Something went wrong");
                }
                
            },
                error:function(res){
                    console.log(res);
                }

            });
                  },
                  function(){
                   
                  }).set('labels', {ok:'Yes, Delete!', cancel:'Not Today'}).set('movable','true').setHeader('Delete Department');
            })





            });


        function fetchDepartments(){
             $('.loadTable').load('api_calls/fetch-departments.php');
        }
    
    </script>

    </body>
</html>


    </body>
</html>
