<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Information</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php echo $this->session->flashdata('f_error_message'); ?>
                    <br />
                    <div class="form-horizontal form-label-left">
                        <?php echo form_open_multipart($this->Sla_model->base_link().'/teacher/edit/save'); ?>
                        <div class="form-group">											
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture"><?php echo $this->Sla_model->getLabelLang('picture'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div><img src="<?php
                                          if ($users->picture != "") {
                                              echo base_url() . 'photo/profile/' . $users->picture;
                                          }
                                          ?>" id="logo_preloaded" <?php
                                if ($users->picture == "") {
                                    echo "style='display:none;'";
                                }
                                ?> width="50%"></div>
                                <?php if ($users->picture != "") { ?><label for="del_file"><input type="checkbox" name="del_file" id="del_file" value="<?php echo $users->picture?>"> <span class="remark">Delete File</span></label><?php } ?>                              
                                <?php
                                $data = array(
                                    'name' => 'file_upload',
                                    'id' => 'file_upload',
                                    'class' => 'form-control col-md-7 col-xs-12'
                                );
                                echo form_upload($data);
                                ?>
                            <input type="hidden" id="picture" name="picture" value="<?php echo $users->picture?>"/>
                        </div> <!-- /controls -->				
                    </div> <!-- /control-group -->
                        <div class="form-group">
                            <?php echo form_error('name', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Display Name <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php
                                    $data = array(
                                        'name' => 'name',
                                        'id' => 'name',
                                        'required' => 'required',
                                        'autofocus' => 'true',
                                        'class' => 'form-control col-md-7 col-xs-12',
                                        'value' => set_value('name', $users->name)
                                    );
                                    echo form_input($data);
                                ?>			
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_error('email', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email Address <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php
                                $data = array(
                                    'name' => 'email',
                                    'id' => 'email',
                                    'type' => 'email',
                                    'required' => 'required',
                                    'autofocus' => 'true',
                                    'class' => 'form-control col-md-7 col-xs-12',
                                    'value' => set_value('email', $users->email)
                                );
                                echo form_input($data);
                                ?>	
                            </div>
                        </div>
                        <div class="x_title"> <div class="clearfix"></div> </div>
                        <div class="form-group">
                            <?php echo form_error('first_name', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                            <label for="first_name" class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php
                                $data = array(
                                    'name' => 'first_name',
                                    'id' => 'first_name',
                                    'class' => 'form-control col-md-7 col-xs-12',
                                    'value' => set_value('first_name', $users->first_name, FALSE)
                                );
                                echo form_input($data);
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_error('last_name', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                            <label for="last_name" class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php
                                $data = array(
                                    'name' => 'last_name',
                                    'id' => 'last_name',
                                    'class' => 'form-control col-md-7 col-xs-12',
                                    'value' => set_value('last_name', $users->last_name, FALSE)
                                );
                                echo form_input($data);
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Birthday</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php
                                    if($users->birthday === NULL) $users->birthday = '0000-00-00';
                                    list($year,$month,$day) = explode('-', $users->birthday);
                                    $att = 'id="year" class="form-control-static" ';
                                    $data = array();
                                    $data[''] = 'Year';
                                    for($i=(date('Y')-90);$i<=(date('Y')-12);$i++) {
                                        $data[$i] = $i;
                                    }
                                    echo form_dropdown('year', $data, $year, $att);
                                ?> - 
                                <?php
                                    $att = 'id="month" class="form-control-static" ';
                                    $data = array();
                                    $data[''] = 'Month';
                                    for($i=1;$i<=12;$i++) {
                                        $i = str_pad($i, 2, '0', STR_PAD_LEFT);
                                        $data[$i] = $i;
                                    }
                                    echo form_dropdown('month', $data, $month, $att);
                                ?> - 
                                <?php
                                    $att = 'id="day" class="form-control-static" ';
                                    $data = array();
                                    $data[''] = 'Day';
                                    for($i=1;$i<=31;$i++) {
                                        $i = str_pad($i, 2, '0', STR_PAD_LEFT);
                                        $data[$i] = $i;
                                    }
                                    echo form_dropdown('day', $data, $day, $att);
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php
                                    $att = 'id="gender" class="form-control" ';
                                    $data = array();
                                    $data[''] = '-- Please Choose --';
                                    $data['male'] = 'Male';
                                    $data['female'] = 'Female';
                                    echo form_dropdown('gender', $data, $users->gender, $att);
                                ?>	
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address<span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="address" id="address" class="form-control"><?php echo $users->address; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact #<span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php
                                $data = array(
                                    'name' => 'phone',
                                    'id' => 'phone',
                                    'maxlength' => '100',
                                    'class' => 'form-control',
                                    'value' => set_value('phone', $users->phone, FALSE)
                                );
                                echo form_input($data);
                                ?>		
                            </div>
                        </div>
                        <div class="x_title"> <div class="clearfix"></div> </div>
                        <div class="form-group">
                            <?php echo form_error('cur_password', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Password<span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php
                                $data = array(
                                    'name' => 'cur_password',
                                    'id' => 'cur_password',
                                    'class' => 'form-control',
                                    'required' => 'required',
                                    'value' => set_value('cur_password'),
                                    'autocomplete' => 'off'
                                );
                                echo form_password($data);
                                ?>	
                                <div class="small">Confirm Changes</div>	
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-primary" href="<?php echo $this->sla_referrer->getIndex('student'); ?>"><?php echo $this->Sla_model->getLabelLang('cancel_btn'); ?></a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>