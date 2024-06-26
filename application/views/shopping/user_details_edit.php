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
                    <h2 class="title" style="align=center;">MODIFY DETAILS</h2>
                    <?php foreach($information as $info){
                        ?>
                    <form action="./uptade_user_details_edit?token=<?=base64_encode(base64_encode(base64_encode($info->id)))?>" method="POST">
                       
                            <div class="py-2">
                                <div class="input-group">
                                    <label class="label">User name</label>
                                    <input class="input--style-4" type="text" value=<?=$info->username?> name="username" required>
                                    <?php echo "<div style='color:green; background-color:white; margin-left:100px;'>".$this->session->flashdata("user_detail_name")."</div>"; ?> 
  
                                </div>
                                </div>
                             
                                <div class="py-2">
                            <div class="input-group">
                            <label class="label">Gender</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="type" required>
                                    <option value="<?=$info->type?>" selected="selected"><?=$info->type?></option>
                                    <option value="male">MALE</option>
                                    <option value="female">FEMAIL</option>
                                    <option value="others">OTHERS</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                     
                           
                            
                        </div>
                      
                            <div class="py-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    
                                    <input  class="input--style-4" type="email" value="<?=$info->e_mail?>" name="email" required>
                                </div>
                            </div>
                      
                            <div class="py-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" value="<?=$info->contact?>" name="contact" required>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="input-group">
                                    <label class="label">Address</label>
                                    <input class="input--style-4" type="text" value="<?=$info->address?>" name="address" required>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="input-group">
                                    <label class="label">Pin Code</label>
                                    <input class="input--style-4 " type="text" value="<?=$info->pincode ?>" name="pincode" required>
                                </div>
                            </div>
                    


                        <div class="row row-space">
                            <div class="py-2">
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
                            <div class="py-2">
                                <div class="input-group" style="margin-left:450px;">
                                <div class="p-t-15" >
                          <a href="<?= base_url();?>/index"><button class="btn btn--radius-2 btn--blue" >Back</button></a>
                        </div> </div>
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->