<!doctype html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<? wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css?<?php echo file_date(get_template_directory() . '/style.css'); ?>" type="text/css">
    <title><?php if(is_home()){ bloginfo('name'); } ?><?php if(is_single()){ the_title(); } ?><?php if(is_category()){ single_cat_title();} ?><?php if(is_category()){ echo ' | ';} ?><?php if(is_category()){ bloginfo('name');} ?><?php if(is_tag()){ single_tag_title();} ?><?php if(is_tag()){ echo ' | ';} ?><?php if(is_tag()){ bloginfo('name');} ?><?php if(is_page()){ the_title();} ?><?php if(is_page()){ echo ' | ';} ?><?php if(is_page()){ bloginfo('name');} ?></title>
  </head>
  <body>
    <div class="all--wrap">

