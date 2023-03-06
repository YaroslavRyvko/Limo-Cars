<?php
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'Theme options',
    'menu_title'    => 'Theme options',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
  ));

  acf_add_options_sub_page(
    array(
      'page_title'    => 'Header',
      'menu_title'    => 'Header',
      'parent_slug'     => 'theme-general-settings',
    )
  );
  acf_add_options_sub_page(
    array(
      'page_title'    => 'Footer',
      'menu_title'    => 'Footer',
      'parent_slug'     => 'theme-general-settings',
    )
  );
  acf_add_options_sub_page(
    array(
      'page_title'    => 'Front Section Form',
      'menu_title'    => 'Front Section Form',
      'parent_slug'     => 'theme-general-settings',
    )
  );
  acf_add_options_sub_page(
    array(
      'page_title'    => '404 Page',
      'menu_title'    => '404 Page',
      'parent_slug'     => 'theme-general-settings',
    )
  );
}
