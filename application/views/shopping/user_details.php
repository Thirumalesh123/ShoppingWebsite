<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>USER DETAILS</title>

    <!-- Icons font CSS-->
    <link href="./assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="./assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="./assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./assets2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./assets2/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" >MODIFY DETAILS</h2>
                    <?php foreach($information as $info){
                        ?>
                    <form action="./uptade_user_details?token=<?=base64_encode(base64_encode(base64_encode($info->id)))?>" method="POST" onsubmit="return verify()" >
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">User name : <b><?=$info->username?></b> </label>
                                     <?php echo "<div style='color:green; background-color:white; margin-left:100px;'>".$this->session->flashdata("user_detail_name")."</div>"; ?> 
  
                                </div>
                                </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group form-controler w-100">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" placeholder="Enter Your Old Password " name="old_password" id="password" required>
                                    <?php echo "<div style='color:red; background-color:white;'>".$this->session->flashdata("user_detail_password1")."</div>"; ?> 
                           
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-1">
                            <div class="input-group border">
                                    <label class="label">New Password</label>
                                    <input class="input--style-4 bo-rad-23 sizefull "  type="password" placeholder="Enter Your New Password " id="new_password" name="new_password"required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4 border" type="password" placeholder="ReEnter Your New Password " name="confirm_new_password" id="confirm_password" required>
                                    <?php echo "<div style='color:red; background-color:white;'>".$this->session->flashdata("user_detail_password")."</div>"; ?> 
                                
                                    <div id="warning" class="py-1">
                            </div>
                            
                            </div>
                        
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                <div class="p-t-15">
                                   <button class="btn btn--radius-2 btn--blue" type="submit">Save Changes</button>
                                </div>
                            </div>
                         </form>
                                <?php 
                                      }
                                ?>
                        </div> 
                        </div>
                        
                      
                   
                  
                  
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="./assets2/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="./assets2/vendor/select2/select2.min.js"></script>
    <script src="./assets2/vendor/datepicker/moment.min.js"></script>
    <script src="./assets2/vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="./assets2/js/global.js"></script>
    <script>
    var password="";
    var confirm_password="";
    var new_password="";
    function verify()
    {
        password=document.getElementById("password").value;
        confirm_password=document.getElementById("confirm_new_password").value;
        new_password=document.getElementById("new_password").value;
        if((password==new_password)&&(confirm_password!=new_password))
        {
            document.getElementById("warning").innerHTML="somenthing went wrong";
            return false;
        }else
        {
            return true;
        }
        
    }
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->