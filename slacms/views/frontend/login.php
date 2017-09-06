<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Login</h3>
  		<p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="current-page">Login</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
			<div class="login">
				<?php
				echo $this->session->flashdata('reg_success_message');

				if ($error) {
					echo '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
					if ($error == 'INVALID') {
						echo $this->Sla_model->getLabelLang('login_incorrect');
					}
					if ($error == 'CAPTCHA_WRONG') {
						echo $this->Sla_model->getLabelLang('captcha_wrong');
					}
					if ($error == 'IP_BANNED') {
						echo 'Your IP Address been banned!';
					}
					echo '</div>';
				}
			?>
				<p class="lead">Welcome Back!</p>
				<?php echo form_open($this->Sla_model->base_link(). '/student/login/check') ?>
                    <div class="form-group has-feedback">
                        <?php
                        $data = array(
                            'name' => 'email',
                            'id' => 'email',
                            'type' => 'email',
                            'class' => 'form-control',
                            'required' => 'required',
                            'autofocus' => 'true',
                            'value' => set_value('email'),
                            'placeholder' => $this->Sla_model->getLabelLang('login_email')
                        );
                        echo form_input($data);
                        ?>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <?php
                        $data = array(
                            'name' => 'password',
                            'id' => 'password',
                            'class' => 'form-control',
                            'required' => 'required',
                            'value' => set_value('password'),
                            'placeholder' => $this->Sla_model->getLabelLang('login_password'),
                            'autocomplete' => 'off'
                        );
                        echo form_password($data);
                        ?>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
					<button class="btn btn-primary btn-lg1 btn-block" type="submit" id="login_submit"><?php echo $this->Sla_model->getLabelLang('login_signin'); ?></button>
					<p>Don not have an account? <a href="<?php echo base_url() ?>register" title="Sign Up">Sign Up</a></p>
                    <?php echo form_close() ?>
			</div>
	   </div>
	</div>