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
        'sanitize_callback'    => 'esc_attr', // 
    ));

    // Copyright Control
    $wp_customize->add_control('ctrl_copyright', array(
        'label'       => 'Copyright Information',
        'description' => 'Please, type here your copyright',
        'section'     => 'sec_copyright',
        'settings'    => 'set_copyright',
        'type'        => 'text', // o
    ));

    //API KEY
    $wp_customize->add_section('sec_map', array(
        'title'       => 'Map',
        'description' => 'The Map Section'
    ));

    // Map Setting
    $wp_customize->add_setting('set_map_apikey', array(
        'type'                 => 'theme_mod',
        'default'              => '',
        'sanitize_callback'    => 'esc_attr',
    ));

    // Control API Key
    $wp_customize->add_control('ctrl_map_key', array(
        'label'       => 'Maps API Key',
        'description' => 'Get your key <a target="_blank" href="https://console.cloud.google.com/apis/dashboard?project=persuasive-pipe-396710">Here</a>',
        'section'     => 'sec_map',
        'settings'    => 'set_map_apikey',
        'type'        => 'text',
    ));

    // Map Address 
    $wp_customize->add_setting('set_map_address', array(
        'type'                 => 'theme_mod',
        'default'              => '',
        'sanitize_callback'    => 'esc_textarea',
    ));

    // Control API Key
    $wp_customize->add_control('ctrl_map_address', array(
        'label'       => 'Type your address here',
        'description' => 'No special characters allowed',
        'section'     => 'sec_map',
        'settings'    => 'set_map_address',
        'type'        => 'textarea',
    ));

    // embeded Google Map src 
    $wp_customize->add_setting('set_map_src', array(
        'type'                 => 'theme_mod',
        'default'              => '',
        'sanitize_callback'    => 'esc_textarea',
    ));

    // Control Google Map src 
    $wp_customize->add_control('ctrl_map_src', array(
        'label'       => 'Embede Google Map src',
        'description' => 'Paste your google map src link',
        'section'     => 'sec_map',
        'settings'    => 'set_map_src',
        'type'        => 'textarea',
    ));
}

add_action('customize_register', 'wp_theme_customizer');
