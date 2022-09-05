<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <style>
        :lang(ar) {
            direction: rtl;
        }
    </style>
</head>
<body <?php body_class('example_class'); ?>>
    <?php wp_body_open(); ?>
    <h1>Hello</h1>
    <?php wp_footer(); ?>
</body>
</html>