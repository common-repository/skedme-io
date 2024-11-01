<div class="wrap">
    <h1><?php __('Skedme.io online booking button settings', 'skedme-io'); ?></h1>
    <div class="postbox">
        <div class="inside" style="max-width: 400px;">
            <form class="skedme-settings-form" method="post" action="options.php">
                <div class="skedme-input-group">
                    <label class="skedme-label" style=""><?php echo __('Skedme.io key', 'skedme-io') ?></label>
                    <div class="skedme-input">
                        <input type="text" name="skedmeKey" id="skedmeKey" placeholder="Your Skedme.io key" value="<?php echo(get_option('skedmeKey')) ?>" style="width: 100%" />
                    </div>
                </div>
                <div class="skedme-input-group">
                    <label class="skedme-label" style=""><?php echo __('Theme', 'skedme-io') ?></label>
                    <div class="skedme-radio">
                        <input id="skedme-theme-light" type="radio" name="skedmeTheme" value="light" <?php checked('light', get_option('skedmeTheme'), true); ?>>
                        <label for="skedme-theme-light"><?php echo __('Light', 'skedme-io'); ?></label>
                        <input id="skedme-theme-dark" type="radio" name="skedmeTheme" value="dark" <?php checked('dark', get_option('skedmeTheme'), true); ?>>
                        <label for="skedme-theme-dark"><?php echo __('Dark', 'skedme-io'); ?></label>
                    </div>
                </div>
                <div class="skedme-input-group">
                    <label class="skedme-label" style=""><?php echo __('Size', 'skedme-io') ?></label>
                    <div class="skedme-radio">
                        <input id="skedme-size-small" type="radio" name="skedmeSize" value="small" <?php checked('small', get_option('skedmeSize'), true); ?>>
                        <label for="skedme-size-small"><?php echo __('Small', 'skedme-io'); ?></label>
                        <input id="skedme-size-medium" type="radio" name="skedmeSize" value="medium" <?php checked('medium', get_option('skedmeSize'), true); ?>>
                        <label for="skedme-size-medium"><?php echo __('Medium', 'skedme-io'); ?></label>
                        <input id="skedme-size-large" type="radio" name="skedmeSize" value="large" <?php checked('large', get_option('skedmeSize'), true); ?>>
                        <label for="skedme-size-large"><?php echo __('Large', 'skedme-io'); ?></label>
                    </div>
                </div>
                <div class="skedme-input-group">
                    <label class="skedme-label" style=""><?php echo __('Shape', 'skedme-io') ?></label>
                    <div class="skedme-radio">
                        <input id="skedme-shape-round" type="radio" name="skedmeShape" value="round" <?php checked('round', get_option('skedmeShape'), true); ?>>
                        <label for="skedme-shape-round"><?php echo __('Round', 'skedme-io'); ?></label>
                        <input id="skedme-shape-rectangular" type="radio" name="skedmeShape" value="rectangular" <?php checked('rectangular', get_option('skedmeShape'), true); ?>>
                        <label for="skedme-shape-rectangular"><?php echo __('Rectangular', 'skedme-io'); ?></label>
                    </div>
                </div>
                <div class="skedme-input-group">
                    <label class="skedme-label" style=""><?php echo __('Side', 'skedme-io') ?></label>
                    <div class="skedme-radio">
                        <input id="skedme-side-left" type="radio" name="skedmeSide" value="left" <?php checked('left', get_option('skedmeSide'), true); ?>>
                        <label for="skedme-side-left"><?php echo __('Left', 'skedme-io'); ?></label>
                        <input id="skedme-side-right" type="radio" name="skedmeSide" value="right" <?php checked('right', get_option('skedmeSide'), true); ?>>
                        <label for="skedme-side-right"><?php echo __('Right', 'skedme-io'); ?></label>
                    </div>
                </div>
                <div class="skedme-input-group">
                    <label class="skedme-label" style=""><?php echo __('Side margin', 'skedme-io') ?></label>
                    <div class="skedme-range">
                        <input name="skedmeMargin" type="range" min="0" max="100" value="<?php echo get_option('skedmeMargin', true); ?>" class="">
                        <span><?php echo get_option('skedmeMargin', true); ?></span>px
                    </div>
                </div>

                <div class="skedme-submit">
                <input style="margin-top: 10px;" type="submit" name="submit" id="submit" class="button button-primary" value="<?php echo __('Save', 'skedme-io'); ?>">
                </div>

                <?php settings_fields('skedme') ?>
            </form>
        </div>
    </div>
</div>
