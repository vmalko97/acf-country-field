<?php

if ( ! defined('ABSPATH') ) exit;

class ACF_Field_Country extends acf_field {

    public function __construct() {

        $this->name     = 'country';
        $this->label    = __('Country', 'acf-country');
        $this->category = 'choice';

        parent::__construct();
    }

    public function render_field( $field ) {

        $countries = require dirname(__DIR__) . '/countries.php';

        ?>
        <select name="<?php echo esc_attr($field['name']); ?>" class="acf-country-select">
            <option value=""><?php esc_html_e('Select country', 'acf-country'); ?></option>
            <?php foreach ( $countries as $code => $label ) : ?>
                <option value="<?php echo esc_attr($code); ?>"
                    <?php selected($field['value'], $code); ?>>
                    <?php echo esc_html($label); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?php
    }

    public function format_value( $value, $post_id, $field ) {
        return $value;
    }
}

new ACF_Field_Country();
