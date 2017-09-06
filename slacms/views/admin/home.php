<?php $config = $this->Sla_admin_model->load_config(); ?>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h2 class="box-title"><b>Welcome to Shinearly Learning Academy! </b></h2>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <p>SLA offers conversational English courses to any nationality of any age, designed to attain English 
                            fluency in a span of time. We have prepared exciting and informative lessons and articles from Beginner 
                            Level to Upper-Intermediate Level	students. We are here to help you master spoken English, listening, 
                            grammar, vocabulary,	writing and comprehension, should you simply want to develop your skills or prepare 
                            for an IELTS, TOEIC, or TOEFL test in the future.</p>
                    </div>
                    <div class="box-footer">
                        <p><b><a href="https://www.facebook.com/ShinEarlyLA/" target="_blank">Official Facbook Page</a></b></p>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h2 class="box-title"><i><span class="glyphicon glyphicon-dashboard"></span></i> <?php echo $this->lang->line('nav_dash') ?></h2>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row col-sm-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <h1><i><span class="glyphicon glyphicon-user"></span></i></h1>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php echo $total_student ?></div>
                                                <div>Total Students!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo $this->Sla_model->base_link().'/admin/members' ?>">
                                        <div class="panel-footer">
                                            <span class="pull-left"><?php echo $this->lang->line('dashboard_viewdetail') ?></span>
                                            <span class="pull-right"><i><span class="glyphicon glyphicon-expand"></span></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                        </div>
                        <div class="row col-sm-12">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <h1><i><span class="glyphicon glyphicon-link"></span></i></h1>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php echo $total_linkstats; ?></div>
                                                <div><?php echo $this->lang->line('dashboard_totallink') ?>!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo $this->Sla_model->base_link().'/admin/linkstats'; ?>">
                                        <div class="panel-footer">
                                            <span class="pull-left"><?php echo $this->lang->line('dashboard_viewdetail'); ?></span>
                                            <span class="pull-right"><i><span class="glyphicon glyphicon-expand"></span></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                        </div>
                        <div class="row col-sm-12">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <h1><i><span class="glyphicon glyphicon-envelope"></span></i></h1>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php echo $total_emaillogs ?></div>
                                                <div><?php echo $this->lang->line('dashboard_totalemail') ?>!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo $this->Sla_model->base_link().'/admin/emaillogs' ?>">
                                        <div class="panel-footer">
                                            <span class="pull-left"><?php echo $this->lang->line('dashboard_viewdetail') ?></span>
                                            <span class="pull-right"><i><span class="glyphicon glyphicon-expand"></span></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"><i><span class="fa fa-rss"></span></i> Recent Blogs</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="word-wrap:break-word;">
                        Lorem Ipsum
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- Page Heading -->
<!-- /.row -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title"><i><span class="glyphicon glyphicon-envelope"></span></i> <?php echo $this->lang->line('dashboard_emailrecent') ?></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12" style="word-wrap:break-word;">
                <div class="list-group">
                    <?php if ($this->Sla_auth_model->is_group_allowed('email logs', 'backend') === FALSE){ ?>
                        <div class="list-group-item">
                            <span class="badge"><?php echo date('Y-m-d H:i:s')?></span>
                            <b><?php echo  $this->lang->line('user_not_allow_txt') ?></b>
                        </div> 
                    <?php }else{
                        if ($email_logs === FALSE) { ?>
                            <div class="list-group-item">
                                <span class="badge"><?php echo date('Y-m-d H:i:s')?></span>
                                <b><?php echo  $this->lang->line('data_notfound') ?></b>
                            </div>                          
                        <?php } else { ?>
                            <?php foreach ($email_logs as $el) { 
                                $i = 0;
                                if($el['email_result'] != 'success'){
                                    $error_rs = '<span class="error">Error - '.strip_tags($el['email_result']).'</span>';
                                }else{
                                    $error_rs = '<span class="success">Success</span>';
                                }
                                $i++;
                            ?>
                            <span class="list-group-item">
                                <span class="badge"><?php echo $el['timestamp_create'] ?></span>
                                <b><?php echo $this->lang->line('forms_subject') ?>:</b> <?php echo $el['subject'] ?><br>
                                <span style="font-size:12px;"><b><?php echo $this->lang->line('dashboard_fromemail') ?>: <?php echo $el['from_email'] ?> | <?php echo $this->lang->line('dashboard_toemail') ?>: <?php echo $el['to_email'] ?></b></span> [<span style="font-style: italic; font-size:12px;"><?php echo $el['ip_address'] ?></span>] [<span style="font-style: italic; font-size:12px;"><?php echo $el['user_agent'] ?></span>] [<b><?php echo $error_rs?></b>]<br>
                                <pre><?php echo strip_tags($el['message']) ?></pre>
                                <div class="control-group text-right">
                                    <a class="btn btn-danger btn-sm" role="button" onclick="return confirm('<?php echo $this->lang->line('delete_message')?>')" href="<?php echo $this->Sla_model->base_link().'/admin/admin/deleteEmailLogs/'.$el['email_logs_id']?>">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </a>
                                </div>
                            </span>
                            <?php } ?>        
                        <?php } 
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.box -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i><span class="glyphicon glyphicon-link"></span></i> <?php echo $this->lang->line('dashboard_linkrecent') ?></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12" style="word-wrap:break-word;">
                <div class="list-group">
                    <?php if ($this->Sla_auth_model->is_group_allowed('linkstats', 'backend') === FALSE){ ?>
                        <div class="list-group-item">
                            <span class="badge"><?php echo date('Y-m-d H:i:s')?></span>
                            <b><?php echo  $this->lang->line('user_not_allow_txt') ?></b>
                        </div> 
                    <?php }else{
                    if ($link_stats === FALSE) { ?>
                        <div class="list-group-item">
                            <span class="badge"><?php echo date('Y-m-d H:i:s')?></span>
                            <b><?php echo  $this->lang->line('data_notfound') ?></b>
                        </div>                          
                    <?php } else { ?>
                        <?php foreach ($link_stats as $ls) { ?>
                        <span class="list-group-item">
                            <span class="badge"><?php echo $ls['timestamp_create'] ?></span>
                            <b>[<?php echo $ls['ip_address'] ?>]</b> - <?php echo $ls['link'] ?>
                        </span>
                        <?php } ?>
                    <?php } 
                    }?>
                </div>               
                <div class="text-right">
                    <a href="<?php echo $this->Sla_model->base_link().'/admin/linkstats' ?>" style="text-decoration: none;"><?php echo $this->lang->line('dashboard_viewdetail') ?> <i><span class="glyphicon glyphicon-expand"></span></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.box -->
