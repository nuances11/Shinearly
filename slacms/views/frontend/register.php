<!-- banner -->
<div class="courses_banner">
    <div class="container">
        <h3>Register</h3>
        <p class="description">
            Create an account to avail services of ShinEarly Learning Academy
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="current-page">Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- //banner -->
<div class="courses_box1">
    <div class="container">
        <div class="register">
            <?php echo  form_open($this->Sla_model->base_link(). '/student/register/save') ?>
        <p class="lead">Register New Account</p>
        <?php echo form_error('name', '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
            <div class="form-group has-feedback">
            <label style="font-weight: bold">Full Name</label>&nbsp;<span class="req" style="color: red;font-weight: bold;position: relative">*</span>
            <?php
                            $data = array(
                                'name' => 'name',
                                'id' => 'name',
                                'class' => 'form-control',
                                'required' => 'required',
                                'autofocus' => 'true',
                                'value' => set_value('name')
                            );
                            echo form_input($data);
                            ?>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <?php echo form_error('email', '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
        <div class="form-group has-feedback">
            <label style="font-weight: bold">Email Address</label>&nbsp;<span class="req" style="color: red;font-weight: bold;position: relative">*</span>
            <?php
                            $data = array(
                                'name' => 'email',
                                'id' => 'email',
                                'type' => 'email',
                                'class' => 'form-control',
                                'required' => 'required',
                                'autofocus' => 'true',
                                'value' => set_value('email')
                            );
                            echo form_input($data);
                            ?>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <?php echo form_error('password', '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
        <div class="form-group has-feedback">
            <label style="font-weight: bold">Password</label>&nbsp;<span class="req" style="color: red;font-weight: bold;position: relative">*</span>
            <?php
                            $data = array(
                                'name' => 'password',
                                'id' => 'password',
                                'class' => 'form-control',
                                'required' => 'required',
                                'value' => set_value('password'),
                                'autocomplete' => 'off'
                            );
                            echo form_password($data);
                            ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <?php echo form_error('con_password', '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
        <div class="form-group has-feedback">
            <label style="font-weight: bold">Confirm Password</label>&nbsp;<span class="req" style="color: red;font-weight: bold;position: relative">*</span>
            <?php
                            $data = array(
                                'name' => 'con_password',
                                'id' => 'con_password',
                                'class' => 'form-control',
                                'required' => 'required',
                                'value' => set_value('con_password'),
                                'autocomplete' => 'off'
                            );
                            echo form_password($data);
                            ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <br>
        <div class="text-center">
            <?php echo $this->Sla_model->showCaptcha(); ?>
        </div>
        <br>
        <div class="text-center"><button class="btn btn-primary btn-lg1 btn-block" type="submit" id="forget_submit"><?php echo $this->Sla_model->getLabelLang('login_register'); ?></button></div>
        <?php echo  form_close() ?>
        </div>
        <p style="text-align: center">Already have an account? <a href="<?php echo base_url()?>login">Sign In</a></p>
    </div>
</div>