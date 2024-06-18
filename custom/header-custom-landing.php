<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="site-wrapper">

    <header class="site-header py-5 lg:py-7">
      <div class="container flex justify-between items-center">
        <div class="mr-4">
          <a href="/">
            <img src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/scripps-safe-logo.png" alt="Scripps Safe Logo" width="220" height="77" loading="lazy">
          </a>
        </div><!-- /div -->
        <div class="px-4">
          <ul class="flex flex-nowrap gap-1 sm:gap-4 lg:gap-6">
            <li>
              <a href="https://goo.gl/maps/CgN7XvxvwNnw2a4d7" target="_blank" class="text-sm text-dark-grey group hover:dark-grey/70 focus:dark-grey/70 max-xl:text-[0]">
                <i class="icon-pin inline-flex items-center justify-center w-8 h-8 border border-dark-grey rounded-full text-xs mr-2 relative after:absolute after:w-6 after:h-6 after:rounded-full after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-dark-grey/20 group-hover:border-primary group-focus:border-primary"></i>
                9051 Tamiami Trail N, Ste. 201 Naples, FL 34108
              </a>
            </li>
            <li>
              <a href="mailto:info@4saferx.com" class="text-sm text-dark-grey group hover:dark-grey/70 focus:dark-grey/70 max-xl:text-[0]">
                <i class="icon-mail inline-flex items-center justify-center w-8 h-8 border border-dark-grey rounded-full text-xs mr-2 relative after:absolute after:w-6 after:h-6 after:rounded-full after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-dark-grey/20 group-hover:border-primary group-focus:border-primary"></i>
                info@4saferx.com
              </a>
            </li>
          </ul>
        </div> <!-- /div -->
        <div>
          <a href="tel:8776721689" class="btn btn-outline sm:pl-24 text-left max-sm:p-0 max-sm:text-[0] max-sm:border-none max-sm:before:hidden max-sm:after:hidden max-sm:[&_i]:hover:text-primary/50 max-sm:[&_i]:focus:text-primary/50">
            <i class="icon-phone flex items-center justify-center bg-primary/20 shadow-[inset_0_0_0_3px_rgb(255,255,255)] sm:absolute w-8 h-8 sm:w-12 sm:h-12 rounded-full border border-primary sm:left-9 sm:top-1/2 sm:-translate-y-1/2 content-['\e90a'] font-icomoon text-xs sm:text-base text-primary transition ease-in-out duration-500"></i>
            <span class="block small font-normal text-sm mb-1 max-sm:hidden">Have any questions?</span>
            (877) 672-1689
          </a>
        </div> <!-- /div -->
      </div><!-- /.container -->
    </header><!-- /.site-header -->

    <main class="site-main">