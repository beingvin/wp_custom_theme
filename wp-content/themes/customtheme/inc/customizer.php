<?php

function wp_theme_customizer($wp_customize)
{
    // Copyright Section
    $wp_customize->add_section('sec_copyright', array(
        'title'       => 'Copyright',
        'description' => 'Please, type here your copyright'
    ));

    // Copyright Setting
    $wp_customize->add_setting('set_copyright', array(
        'type'                 => 'theme_mod',
        'default'              => 'Copyright X - All Rights Reserved',
        'sanitize_callback'    => 'esc_attr', // Fixed typo
    ));

    // Copyright Control
    $wp_customize->add_control('ctrl_copyright', array(
        'label'       => 'Copyright Information',
        'description' => 'Please, type here your copyright',
        'section'     => 'sec_copyright',
        'settings'    => 'set_copyright',
        'type'        => 'text', // Fixed typo
    ));
}

add_action('customize_register', 'wp_theme_customizer');
