<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <?php echo form_open($this->Sla_model->base_link(). '/teacher/login/check') ?>
              <h1>Hi Teacher</h1>
              <?php
                if ($error) {
                        echo '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                        if ($error == 'INVALID') {
                            echo $this->lang->line('login_incorrect');
                        }
                        if ($error == 'CAPTCHA_WRONG') {
                            echo $this->lang->line('captcha_wrong');
                        }
                        if ($error == 'IP_BANNED') {
                            echo $this->lang->line('bf_ip_banned_alert');
                        }
                        echo '</div>';
                    }
                ?>
                
              <?php echo form_error('email', '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
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
                            'placeholder' => $this->lang->line('login_email')
                        );
                        echo form_input($data);
                        ?>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
              <?php echo form_error('password', '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                    <div class="form-group has-feedback">
                        
                        <?php
                        $data = array(
                            'name' => 'password',
                            'id' => 'password',
                            'class' => 'form-control',
                            'required' => 'required',
                            'value' => set_value('password'),
                            'placeholder' => $this->lang->line('login_password'),
                            'autocomplete' => 'off'
                        );
                        echo form_password($data);
                        ?>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
              <div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="login_submit"><?php echo $this->lang->line('login_signin'); ?></button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>Shinearly Learning Academy</h1>
                  <p>Shinearly Learning Academy &copy; <?php echo date("Y") ?></p>
                </div>
              </div>
            <?php echo form_close() ?>
          </section>
        </div>
      </div>
    </div>