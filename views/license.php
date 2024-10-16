<?php init_head(); ?>

<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel_s">
                    <div class="panel-body">
                        <h4 class="no-margin"><?php echo _l('activate_module'); ?></h4>
                        <hr class="hr-panel-heading">
                        <p><?php echo _l('please_enter_your_license_key_to_activate_the_module'); ?></p>
                        <?php echo form_open($submit_url, ['autocomplete' => 'off', 'id' => 'verify-form']); ?>
                        <?php echo form_hidden('original_url', $original_url); ?>
                        <?php echo form_hidden('module_name', $module_name); ?>
                        <div class="form-group">
                            <?php echo render_input('purchase_key', 'purchase_key', '', 'text', ['required' => true, 'placeholder' => _l('purchase_key')]); ?>
                        </div>
                        <button id="submit" type="submit" class="btn btn-primary btn-icon icon-checkmark2"><?php echo _l('submit'); ?></button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php init_tail(); ?>