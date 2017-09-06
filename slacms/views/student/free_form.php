<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Select Instructor</h3>
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
                    <br/>
                    <?php 
                        $i = 0;
                        foreach ($teacher as $t) {
                    ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="widget widget_tally_box">
                            <div class="x_panel fixed_height_390">
                            <div class="x_content">

                                <div class="flex">
                                    <ul class="list-inline widget_profile_box">
                                        <li>
                                            <?php if ($t->picture) { ?> 
                                                <img src="<?php echo base_url() . 'photo/profile/' . $users->picture; ?>" class="img-circle profile_img" alt="Profile Photo">
                                                <?php } else { ?>
                                                <img src="<?php echo base_url() . 'photo/no_image.png'; ?>" class="img-circle profile_img" alt="Profile Photo">
                                            <?php } ?>
                                        </li>
                                    </ul>
                                </div>

                                <h3 class="name"><strong><?php echo ($t->last_name) ? ucfirst($t->last_name) : 'Last Name'; ?><br/></strong>
                                <small><?php echo ($t->first_name) ? ucfirst($t->first_name) : 'First Name'; ?></small></h3>

                                <div class="text-center">
                                    <a href="<?php echo base_url()?>student/sched/teacher/<?php echo $t->user_admin_id ?>" class="btn btn-success text-center">Select Teacher</a>
                                </div>
                                <p>
                                    <i>If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.</i>
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php $i++;} ?>
                </div>
            </div>
        </div>
    </div>
</div>