<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>User Profile</h3>
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
                    <?php echo $this->session->flashdata('edit_success_message'); ?>
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <?php if ($users->picture) { ?> 
                                <img src="<?php echo base_url() . 'photo/profile/' . $users->picture; ?>" class="img-responsive avatar-view" alt="Profile Photo"
                                    width="160" height="160">
                                <?php } else { ?>
                                <img src="<?php echo base_url() . 'photo/no_image.png'; ?>" class="img-responsive avatar-view" alt="Profile Photo" width="160"
                                    height="160">
                                <?php } ?>
                            </div>
                        </div>
                        <h3><strong><?php echo ($users->last_name) ? ucfirst($users->last_name) : 'Last Name'; ?></strong>,
                            <?php echo ($users->first_name) ? ucfirst($users->first_name) : 'First Name'; ?> </h3>

                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-map-marker user-profile-icon"></i>
                                <?php echo($users->address) ? $users->address : '-'; ?>
                            </li>
                            <li class="m-top-xs">
                                <i class="fa fa-at"></i>
                                <?php echo ($users->email) ? $users->email : '-'; ?>
                            </li>
                            <li class="m-top-xs">
                                <i class="fa fa-transgender"></i>
                                <?php echo ($users->gender) ? ucfirst($users->gender) : '-'; ?>
                            </li>
                            <li class="m-top-xs">
                                <i class="fa fa-gift"></i>
                                <?php echo ($users->birthday && $users->birthday != '0000-00-00') ? date('d F Y', strtotime($users->birthday)) : '-'; ?>
                            </li>
                        </ul>

                        <a href="<?php echo base_url() ?>student/edit" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                        <br />
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Placeholder 1</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Placeholder 2</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Placeholder 3</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                    <!-- start recent activity -->
                                    <ul class="messages">
                                        <li>
                                            <?php if ($users->picture) { ?>
                                            <img src="<?php echo base_url() . 'photo/profile/' . $users->picture; ?>" class="avatar" alt="Avatar">
                                            <?php } else { ?>
                                            <img src="<?php echo base_url() . 'photo/no_image.png'; ?>" class="avatar" alt="Avatar">
                                            <?php } ?>
                                            <div class="message_date">
                                                <h3 class="date text-info">24</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Placeholder</h4>
                                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                                    tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                <br />
                                                <p class="url">
                                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                    <a href="#"><i class="fa fa-paperclip"></i> Placeholder </a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end recent activity -->

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                    Placeholder

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                                        Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                        artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo
                                        enim craft beer mlkshk </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>