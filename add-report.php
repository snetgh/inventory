<?php  require_once 'db.php';  ?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Add Report</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
         <link rel="shortcut icon" href="assets/images/logo.jpeg">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

             <!-- alertifyjs Css -->
        <link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

        <!-- alertifyjs default themes  Css -->
        <link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />
    
    	<link href="assets/css/flatpickr.css" rel="stylesheet" type="text/css" />

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
                              <!--   <div class="col-md-8">
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

                             <div class="row justify-content-center">
                                <div class="col-xl-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Add Report</h4>

 <form id="add-report" method="POST">
  <div class="row">
            <div class="col-xs-12 col-md-12">
                <div>
                    <h2 class="text-center">Report</h2>
                </div>
            </div>

            <div class="col-xs-12 col-md-12">
                
                    <input type="hidden" name="secret_id" value="<?php echo mt_rand(100000,9999999)  ?>" >
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <address>
                            <strong>To:</strong>
                            <input class="form-control" type="text" name="to" placeholder="Biggie">
                        </address>
                         <address>
                            <strong>From:</strong>
                            <input class="form-control" type="text" name="from" placeholder="Yussif Suleiman">
                           
                        </address>
                         <address>
                            <strong>Date:</strong>
                            <input class="form-control datepicker" type="text" name="date" placeholder="February 10, 2020">
                            
                        </address>
                         <address>
                            <strong>Subject:</strong>
                            <input class="form-control" type="text" name="subject" placeholder="Report for Feb, 2017">
                        </address>
                    </div>
                    
                </div>
                
            </div>
        </div>

        <hr>
        <input class="form-control" type="text" name="title" placeholder="CORPORATE,RADIO & BLUE BUILDING">

  

        <div class="row clearfix">
    <div class="col-md-12"> 
    </div>
  </div>

                                             <div class="row clearfix">
    <div class="col-md-12 mt-4">
      <table class="table table-bordered table-hover" id="customFields">
        <thead>
          <tr>
            <th class="text-center"> # </th>
            <th class="text-center"> Performance </th>
            <th class="text-center"> Downtime </th>
            <th class="text-center"> Cause </th>
            <th class="text-center"> Solution </th>
          </tr>
        </thead>
        <tbody id="">
          <tr>
            <td><textarea rows="5" name="item[]" class="form-control"></textarea></td>
            <td><textarea rows="5" name="performance[]" class="form-control"></textarea> </td>
            <td><textarea rows="5" name="downtown[]" class="form-control"></textarea></td>
            <td><textarea rows="5" name="cause[]" class="form-control"></textarea></td>
            <td><textarea rows="5" name="solution[]" class="form-control"></textarea></td>
          </tr>
        
        </tbody>
      </table>
      <a  href="javascript:void(0)" class="addCF btn btn-primary pull-left">Add Row</a>


      <br><br>

      <button class="btn btn-outline-primary mt-5" type="submit">Save Report</button>
    </div>
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

        <!-- Right Sidebar -->
     
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
    
    	<script src="assets/js/flatpickr.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>


        <script src="assets/js/app.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){

                 alertify.set('notifier','position', 'top-right');
            
            $(".datepicker").flatpickr({
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
});

    $(".addCF").click(function(){
        $("#customFields").append(
            ' <tr><td><textarea rows="5" name="item[]" class="form-control"></textarea></td><td><textarea rows="5" name="performance[]" class="form-control"></textarea> </td><td><textarea rows="5" name="downtown[]" class="form-control"></textarea></td><td><textarea rows="5" name="cause[]" class="form-control"></textarea></td><td><textarea rows="5" name="solution[]" class="form-control"></textarea></td><td><a href="javascript:void(0);" class="btn btn-danger remCF">Remove</a></td></tr>');});


    $("#customFields").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });




    $(document).on('submit','#add-report',function(e){
         e.preventDefault();
         var formdata = $(this).serialize();

          $.ajax({
                url:'api_calls/add-report.php',
                type: 'POST',
                data: formdata,
                success:function(res){
                    res = res.trim();
                if(res === "success"){
                    alertify.notify('Report Saved Successfully', 'success', 2, function(){ window.location.reload()});
                }else if(res === "error"){
                 alertify.error("Error Occured");
                
                }
            },
                error:function(res){
                    console.log(res);
                }

            });

    });








});
        </script>

    </body>
</html>
