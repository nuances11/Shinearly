<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Add Class</h3>
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
                    <?php echo form_open_multipart($this->Sla_model->base_link().'/student/select/sched'); ?>
                        <?php echo $this->session->flashdata('f_error_message'); ?>
                        <div class="form-group">
                            <label>Free Sched
                            <input type="radio" value="1" name="sched"></label>
                            <label>Sched
                            <input type="radio" value="2" name="sched"></label>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>