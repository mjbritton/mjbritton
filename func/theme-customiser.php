<?php

function mjb_customize_register($wp_customize)
{
    //Options section
    $wp_customize->add_section('options', array(
        'title'       => __('Useful options', ''),
        'description' => sprintf(__('Options for the options section', ''), ),
        'priority'    => 160,
    ));

    $wp_customize->add_setting('options_GA', array(
        'default' => _x('', ''),
        'type'    => 'theme_mod',
    ));

    $wp_customize->add_control('options_GA', array(
        'label'    => __('Google Analyitics ID', ''),
        'section'  => 'options',
        'priority' => 1,
    ));

    $wp_customize->add_setting('holdingpage', array(
        'default' => _x('', ''),
        'type'    => 'theme_mod',
    ));

    $wp_customize->add_control('holdingpage', array(
        'label'    => __('Activate holding page', ''),
        'section'  => 'options',
        'type'     => 'checkbox',
        'priority' => 2,
    ));
}

add_action('customize_register', 'mjb_customize_register');