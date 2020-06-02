<div class="container">

    <form class="well form-horizontal" action="" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend><center><h2><b>Registration Form</b></h2></center></legend><br>

            <!-- Text input-->
<?php  echo validation_errors('<div class="alert alert-danger">', '</div>');  
if(isset($success)) {
    
    echo '<div class="alert alert-success">'.$success .'</div>';
} 
?>
 <?php if($this->session->flashdata('success')){
        echo "<p class='alert alert-success'>".$this->session->flashdata('success')."</p>";
 } ?>
            
            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" placeholder="First Name" class="form-control"  type="text" 
                                value="<?php echo (isset($first_name))? $first_name : '' ?>">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label> 
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" placeholder="Last Name" class="form-control"  type="text"
                               value="<?php echo (isset($last_name))? $last_name : '' ?>">
                    </div>
                </div>
            </div>

            <div class="form-group"> 
                <label class="col-md-4 control-label">Department / Office</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="department" class="form-control selectpicker">
                            <option value="0" selected="true">Select your Department/Office</option>
                            <option value="1" <?php echo (isset($department) && $department == 1) ? 'selected' : '' ?>>Department of Engineering</option>
                            <option value="2" <?php echo (isset($department) && $department == 2) ? 'selected' : '' ?> >Department of Agriculture</option>
                            <option value="3" <?php echo (isset($department) && $department == 3) ? 'selected' : '' ?>>Accounting Office</option>
                            <option value="4" <?php echo (isset($department) && $department == 4) ? 'selected' : '' ?>>Tresurer's Office</option>
                            <option value="5" <?php echo (isset($department) && $department == 5) ? 'selected' : '' ?>>MPDC</option>
                            <option value="6" <?php echo (isset($department) && $department == 6) ? 'selected' : '' ?>>MCTC</option>
                            <option value="7" <?php echo (isset($department) && $department == 7) ? 'selected' : '' ?>>MCR</option>
                            <option value="8" <?php echo (isset($department) && $department == 8) ? 'selected' : '' ?>>Mayor's Office</option>
                            <option value="9" <?php echo (isset($department) && $department == 9) ? 'selected' : '' ?>>Tourism Office</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Username</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="user_name" placeholder="Username" class="form-control"  type="text"
                                value="<?php echo (isset($user_name))? $user_name : '' ?>">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Password</label> 
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="user_password" placeholder="Password" class="form-control"  type="password">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Confirm Password</label> 
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Address" class="form-control"  type="text"
                               value="<?php echo (isset($email))? $email : '' ?>" />
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Contact No.</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="contact_no" placeholder="(639)" class="form-control" type="text"
                               value="<?php echo (isset($contact_no))? $contact_no : '' ?>" />
                    </div>
                </div>
            </div>

            <!-- Select Basic -->

            <!-- Success message -->
            
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"> 
                <button type="submit" class="btn btn-warning" >Submit</button>
                <input type="reset" value="cancle" />
                </div>
            </div>

        </fieldset>
    </form>
</div>
</div><!-- /.container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script type="text/javascript">
   /* $(document).ready(function () {
        $('#contact_form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                first_name: {
                    validators: {
                        stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please enter your First Name'
                        }
                    }
                },
                last_name: {
                    validators: {
                        stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please enter your Last Name'
                        }
                    }
                },
                user_name: {
                    validators: {
                        stringLength: {
                            min: 8,
                        },
                        notEmpty: {
                            message: 'Please enter your Username'
                        }
                    }
                },
                user_password: {
                    validators: {
                        stringLength: {
                            min: 8,
                        },
                        notEmpty: {
                            message: 'Please enter your Password'
                        }
                    }
                },
                confirm_password: {
                    validators: {
                        stringLength: {
                            min: 8,
                        },
                        notEmpty: {
                            message: 'Please confirm your Password'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your Email Address'
                        },
                        emailAddress: {
                            message: 'Please enter a valid Email Address'
                        }
                    }
                },
                contact_no: {
                    validators: {
                        stringLength: {
                            min: 12,
                            max: 12,
                            notEmpty: {
                                message: 'Please enter your Contact No.'
                            }
                        }
                    },
                    department: {
                        validators: {
                            notEmpty: {
                                message: 'Please select your Department/Office'
                            }
                        }
                    },
                }
            }
        })
                .on('success.form.bv', function (e) {
                    $('#success_message').slideDown({opacity: "show"}, "slow") // Do something ...
                    $('#contact_form').data('bootstrapValidator').resetForm();

                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    $.post($form.attr('action'), $form.serialize(), function (result) {
                        console.log(result);
                    }, 'json');
                });
    });*/
</script>