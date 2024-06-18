<?php

/**
 * Template Name: Custom Landing Page
 *
 */
include 'header-custom-landing.php'; ?>

<!-- Section starts -->
<section class="hero bg-cover bg-no-repeat bg-center relative z-[1] bg-black/70 lg:before:bg-gradient-to-l lg:before:from-black/0 lg:before:to-black/95 before:absolute before:inset-0 before:-z-[1] max-lg:!bg-none" style="background-image: url('<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/hero-bg.jpg');">
  <figure class="lg:hidden">
    <img class="w-full" src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/hero-bg.jpg" alt="Hero Background Image" width="1440" height="764" loading="lazy">
  </figure>
  <div class="container py-10">
    <div class="grid items-center lg:grid-cols-12 gap-8 2xl:gap-10">
      <div class="text-white/80 lg:col-span-7 py-8 last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-12 xl:last-of-type:[&_p]:mb-16">
        <h1 class="text-white">Scripps Safe:<br> Creating A <span class="bg-primary px-1">Safer Healthcare</span> Environment</h1>
        <p>Scripps Safe is the pharmaceutical and healthcare leader in DEA and State compliant transportation, storage, inventory and dispensing solutions for controlled substances. All solutions are available with integrated patented constant supervision and chain.</p>
        <a href="#heroForm" class="btn btn-outline font-normal text-black bg-white lg:py-5 js-has-smooth">Contact Us For A Free Expert Consultation</a>
      </div>
      <!-- Hero content -->

      <div id="heroForm" class="lg:col-span-5 bg-white rounded-xl text-center py-10 px-6 relative before:absolute before:w-48 before:h-[10px] before:bg-primary before:top-0 before:left-1/2 before:-translate-x-1/2 before:rounded-b">
        <header class="text-dark-grey-1/60">
          <h2 class="text-black text-4xl uppercase mb-0">GET A QUOTE</h2>
          <p>Get in Contact With Us</p>
        </header>
        <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]')?>
      </div>
      <!-- /Form -->
    </div>
  </div>
</section>
<!-- Section ends -->

<!-- Section starts -->
<section class="container py-12 lg:py-16 xl:py-24">
  <div class="grid lg:grid-cols-2 items-center gap-8">
    <div class="relative max-w-md 2xl:max-w-full 2xl:pr-16 before:absolute before:top-0 before:left-0 before:w-5 before:bottom-1/2 before:bg-dark-red">
      <picture class="ml-12 md:ml-14 mb-14 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
        <source srcset="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/about-feature-img01.jpg" type="image/jpg">
        <img src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/about-feature-img01.jpg" alt="About Feature" width="479" height="601" loading="lazy">
      </picture>
      <picture class="absolute left-0 bottom-0 max-w-[250px] lg:max-w-[396px] ml-auto [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
        <source srcset="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/about-feature-img02.jpg" type="image/jpg">
        <img src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/about-feature-img02.jpg" alt="About Feature" width="391" height="231" loading="lazy">
      </picture>
    </div> <!-- /Image wrapper -->

    <div class="space-y-4 lg:space-y-6">
      <header class="text-black">
        <span class="block text-dark-red text-sm font-lead font-bold"><span class="heading-lines"></span> About Our Company</span>
        <h2>We Develop & Innovate Integrated <span class="text-primary">Pharmaceutical</span> Security</h2>
      </header>

      <blockquote class="bg-primary/5 text-black p-5 [&_p]:mb-0 [&_strong]:text-primary [&_strong]:font-bold border border-b-2 border-b-primary">
        <p><strong>Scripps Safe, Inc.</strong> is the nation’s leader of pharmaceutical security, inventory control and storage solutions to prevent controlled substance diversions in a healthcare environment. <strong>Our solutions bring innovation to compliance.</strong></p>
      </blockquote>

      <p>Scripps Safe is the pharmaceutical and healthcare leader in DEA and State compliant transportation, storage, inventory and dispensing solutions for controlled substances. All solutions are available with integrated patented constant supervision and chain of custody requirements.</p>

      <a href="tel:8776721689" class="btn btn-outline font-normal lg:py-5">Call now for a free consultation</a>
    </div> <!-- Content wrapper -->
  </div>
</section>
<!-- Section ends -->

<!-- Section starts -->
<section class="bg-dark-grey-5/5 py-12 lg:py-16 xl:py-24">
  <div class="container">
    <header class="text-black text-center mb-6 lg:mb-12">
      <span class="block text-dark-red text-sm font-lead font-bold">Industry Solutions <span class="heading-lines heading-lines--center block mb-4"></span></span>
      <h2>Our Industry Solutions</h2>
    </header>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="rounded-md overflow-hidden relative z-[1] before:bg-black/[0.1] before:absolute before:inset-0 before:-z-[1] [&_img]:w-full [&_img]:h-full [&_img]:object-cover max-sm:[&_img]:h-96">
        <img src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/industry-feature-img01.jpg" alt="Industry Feature" width="404" height="500" loading="lazy">

        <i class="icon-hospital absolute top-4 right-4 flex items-center justify-center w-12 h-12 md:w-[74px] md:h-[74px] rounded-[4px] bg-primary text-white text-2xl md:text-4xl"></i>

        <div class="absolute inset-x-0 bottom-0 bg-white rounded-sm py-3 px-4 lg:px-6 lg:py-4 m-4">
          <h3 class="text-lg md:text-xl text-black font-semibold mb-0">Hospital & Outpatient</h3>
        </div>
      </div> <!-- card wrapper -->
      <div class="rounded-md overflow-hidden relative z-[1] before:bg-black/[0.1] before:absolute before:inset-0 before:-z-[1] [&_img]:w-full [&_img]:h-full [&_img]:object-cover max-sm:[&_img]:h-96">
        <img src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/industry-feature-img02.jpg" alt="Industry Feature" width="404" height="500" loading="lazy">

        <i class="icon-treatment absolute top-4 right-4 flex items-center justify-center w-12 h-12 md:w-[74px] md:h-[74px] rounded-[4px] bg-primary text-white text-2xl md:text-4xl"></i>

        <div class="absolute inset-x-0 bottom-0 bg-white rounded-sm py-3 px-4 lg:px-6 lg:py-4 m-4">
          <h3 class="text-lg md:text-xl text-black font-semibold mb-0">Treatment Centers</h3>
        </div>
      </div> <!-- card wrapper -->
      <div class="rounded-md overflow-hidden relative z-[1] before:bg-black/[0.1] before:absolute before:inset-0 before:-z-[1] [&_img]:w-full [&_img]:h-full [&_img]:object-cover max-sm:[&_img]:h-96">
        <img src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/industry-feature-img03.jpg" alt="Industry Feature" width="404" height="500" loading="lazy">

        <i class="icon-care absolute top-4 right-4 flex items-center justify-center w-12 h-12 md:w-[74px] md:h-[74px] rounded-[4px] bg-primary text-white text-2xl md:text-4xl"></i>

        <div class="absolute inset-x-0 bottom-0 bg-white rounded-sm py-3 px-4 lg:px-6 lg:py-4 m-4">
          <h3 class="text-lg md:text-xl text-black font-semibold mb-0">Assisted Care Facilities</h3>
        </div>
      </div> <!-- card wrapper -->
      <div class="rounded-md overflow-hidden relative z-[1] before:bg-black/[0.1] before:absolute before:inset-0 before:-z-[1] [&_img]:w-full [&_img]:h-full [&_img]:object-cover max-sm:[&_img]:h-96">
        <img src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/industry-feature-img04.jpg" alt="Industry Feature" width="404" height="500" loading="lazy">

        <i class="icon-fire absolute top-4 right-4 flex items-center justify-center w-12 h-12 md:w-[74px] md:h-[74px] rounded-[4px] bg-primary text-white text-2xl md:text-4xl"></i>

        <div class="absolute inset-x-0 bottom-0 bg-white rounded-sm py-3 px-4 lg:px-6 lg:py-4 m-4">
          <h3 class="text-lg md:text-xl text-black font-semibold mb-0">Fire, EMS, Mobile</h3>
        </div>
      </div> <!-- card wrapper -->
      <div class="rounded-md overflow-hidden relative z-[1] before:bg-black/[0.1] before:absolute before:inset-0 before:-z-[1] [&_img]:w-full [&_img]:h-full [&_img]:object-cover max-sm:[&_img]:h-96">
        <img src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/industry-feature-img05.jpg" alt="Industry Feature" width="404" height="500" loading="lazy">

        <i class="icon-law absolute top-4 right-4 flex items-center justify-center w-12 h-12 md:w-[74px] md:h-[74px] rounded-[4px] bg-primary text-white text-2xl md:text-4xl"></i>

        <div class="absolute inset-x-0 bottom-0 bg-white rounded-sm py-3 px-4 lg:px-6 lg:py-4 m-4">
          <h3 class="text-lg md:text-xl text-black font-semibold mb-0">Law Enforcement & Corrections</h3>
        </div>
      </div> <!-- card wrapper -->
      <div class="rounded-md overflow-hidden relative z-[1] before:bg-black/[0.1] before:absolute before:inset-0 before:-z-[1] [&_img]:w-full [&_img]:h-full [&_img]:object-cover max-sm:[&_img]:h-96">
        <img src="<?php get_stylesheet_directory_uri(); ?>/wp-content/uploads/2023/04/industry-feature-img06.jpg" alt="Industry Feature" width="404" height="500" loading="lazy">

        <i class="icon-animal absolute top-4 right-4 flex items-center justify-center w-12 h-12 md:w-[74px] md:h-[74px] rounded-[4px] bg-primary text-white text-2xl md:text-4xl"></i>

        <div class="absolute inset-x-0 bottom-0 bg-white rounded-sm py-3 px-4 lg:px-6 lg:py-4 m-4">
          <h3 class="text-lg md:text-xl text-black font-semibold mb-0">Animal Handlers & Vets</h3>
        </div>
      </div> <!-- card wrapper -->
    </div>

    <div class="text-center pt-8 lg:pt-12">
      <a href="#heroForm" class="btn btn-outline font-normal lg:py-5 js-has-smooth">Contact Us For A Free Expert Consultation</a>
    </div>
  </div>
</section>
<!-- Section ends -->

<!-- Section starts -->
<section class="container py-12 lg:py-16 xl:py-24">
  <div class="grid lg:grid-cols-2 lg:gap-8 items-end">
    <header class="text-black">
      <span class="block text-dark-red text-sm font-lead font-bold"><span class="heading-lines mb-4"></span> TESTIMONIALS</span>
      <h2>See What Our <span class="text-primary">Clients</span> Says About Us</h2>
    </header>
    <div class="last-of-type:[&_p]:mb-2">
      <p>Scripps Safe is the pharmaceutical and healthcare leader in DEA and State compliant transportation, storage, inventory and dispensing solutions for controlled substances.</p>
    </div>
  </div>

  <div class="slider-col-2 same-height-slide hide-arrow flex flex-wrap -mx-6 pt-8 lg:pt-12 xl:pt-16">
    <div class="lg:w-1/2 px-6">
      <blockquote class="flex flex-col md:flex-row gap-4 lg:gap-8 bg-primary/5 text-black p-5 lg:p-8 [&_strong]:text-primary [&_strong]:font-bold border-transparent border-r-2 border-r-primary">
        <div class="flex-shrink-0 w-16 lg:w-20 h-16 lg:h-20 rounded-full bg-primary flex items-center justify-center relative max-md:mb-6">
          <span class="uppercase text-white font-lead font-medium text-2xl lg:text-3xl">JD</span>

          <i class="icon-close-quote flex items-center justify-center absolute left-1/2 -translate-x-1/2 -bottom-4 w-10 h-10 rounded-full bg-dark-grey-6 text-white text-lg"></i>
        </div>
        <div class="grid justify-between border-transparent border-l-black/[0.1] border-l pl-4 lg:pl-6">
          <div>
            <p>Scripps Safe worked tirelessly to develop a budget-minded solution that worked with our infrastructure.</p>

            <ul class="flex gap-1 text-base lg:text-xl">
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
            </ul>
          </div>

          <div class="flex flex-nowrap justify-between items-end gap-4 md:gap-8">
            <div class="text-black/60 pt-4 mr-4">
              <h3 class="font-semibold text-black text-xl lg:text-2xl mb-0"> JD Faulkner, PharmD, Director of Pharmacy</h3>
              <span>William Bros Health Care Pharmacy</span>
            </div>
            <div>
              <i class="icon-close-quote text-2xl lg:text-4xl xl:text-6xl text-primary opacity-[0.06]"></i>
            </div>
          </div>
        </div>
      </blockquote>
    </div> <!-- slide-item -->
    <div class="lg:w-1/2 px-6">
      <blockquote class="flex flex-col md:flex-row md:flex-nowrap gap-4 lg:gap-8 bg-primary/5 text-black p-5 lg:p-8 [&_strong]:text-primary [&_strong]:font-bold border-transparent border-r-2 border-r-primary">
        <div class="flex-shrink-0 w-16 lg:w-20 h-16 lg:h-20 rounded-full bg-primary flex items-center justify-center relative max-md:mb-6">
          <span class="uppercase text-white font-lead font-medium text-2xl lg:text-3xl">JT</span>

          <i class="icon-close-quote flex items-center justify-center absolute left-1/2 -translate-x-1/2 -bottom-4 w-10 h-10 rounded-full bg-dark-grey-6 text-white text-lg"></i>
        </div>
        <div class="grid justify-between border-transparent border-l-black/[0.1] border-l pl-4 lg:pl-6">
          <div>
            <p>Scripps Safe had the answer that was well within our budget. The follow up and level of customer service we got was most welcome.</p>

            <ul class="flex gap-1 text-base lg:text-xl">
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
            </ul>
          </div>

          <div class="flex flex-nowrap justify-between items-end gap-4 md:gap-8">
            <div class="text-black/60 pt-4 mr-4">
              <h3 class="font-semibold text-black text-xl lg:text-2xl mb-0">Jay Tipps, Director</h3>
              <span>Saint Francis Pharmacy Services</span>
            </div>
            <div class="">
              <i class="icon-close-quote text-2xl lg:text-4xl xl:text-6xl text-primary opacity-[0.06]"></i>
            </div>
          </div>
        </div>
      </blockquote>
    </div> <!-- slide-item -->
    <div class="lg:w-1/2 px-6">
      <blockquote class="flex flex-col md:flex-row md:flex-nowrap gap-4 lg:gap-8 bg-primary/5 text-black p-5 lg:p-8 [&_strong]:text-primary [&_strong]:font-bold border-transparent border-r-2 border-r-primary">
        <div class="flex-shrink-0 w-16 lg:w-20 h-16 lg:h-20 rounded-full bg-primary flex items-center justify-center relative max-md:mb-6">
          <span class="uppercase text-white font-lead font-medium text-2xl lg:text-3xl">CL</span>

          <i class="icon-close-quote flex items-center justify-center absolute left-1/2 -translate-x-1/2 -bottom-4 w-10 h-10 rounded-full bg-dark-grey-6 text-white text-lg"></i>
        </div>
        <div class="grid justify-between border-transparent border-l-black/[0.1] border-l pl-4 lg:pl-6">
          <div>
            <p>Scripps Safe offered the most cost-effective and compliant storage solution that was custom built around our casework.</p>

            <ul class="flex gap-1 text-base lg:text-xl">
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
            </ul>
          </div>

          <div class="flex flex-nowrap justify-between items-end gap-4 md:gap-8">
            <div class="text-black/60 pt-4 mr-4">
              <h3 class="font-semibold text-black text-xl lg:text-2xl mb-0">Carlo Lupano, Pharmacy Resident Director</h3>
              <span>Valley Health System</span>
            </div>
            <div class="">
              <i class="icon-close-quote text-2xl lg:text-4xl xl:text-6xl text-primary opacity-[0.06]"></i>
            </div>
          </div>
        </div>
      </blockquote>
    </div> <!-- slide-item -->
    <div class="lg:w-1/2 px-6">
      <blockquote class="flex flex-col md:flex-row md:flex-nowrap gap-4 lg:gap-8 bg-primary/5 text-black p-5 lg:p-8 [&_strong]:text-primary [&_strong]:font-bold border-transparent border-r-2 border-r-primary">
        <div class="flex-shrink-0 w-16 lg:w-20 h-16 lg:h-20 rounded-full bg-primary flex items-center justify-center relative max-md:mb-6">
          <span class="uppercase text-white font-lead font-medium text-2xl lg:text-3xl">LG</span>

          <i class="icon-close-quote flex items-center justify-center absolute left-1/2 -translate-x-1/2 -bottom-4 w-10 h-10 rounded-full bg-dark-grey-6 text-white text-lg"></i>
        </div>
        <div class="grid justify-between border-transparent border-l-black/[0.1] border-l pl-4 lg:pl-6">
          <div>
            <p>Hurricane Michael completely destroyed our independent pharmacy. When we called Scripps Safe for help, they replaced all the broken parts free of charge.</p>

            <ul class="flex gap-1 text-base lg:text-xl">
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
            </ul>
          </div>

          <div class="flex flex-nowrap justify-between items-end gap-4 md:gap-8">
            <div class="text-black/60 pt-4 mr-4">
              <h3 class="font-semibold text-black text-xl lg:text-2xl mb-0">Laura Gould, RPh, Partner</h3>
              <span>Rx Express Pharmacy</span>
            </div>
            <div class="">
              <i class="icon-close-quote text-2xl lg:text-4xl xl:text-6xl text-primary opacity-[0.06]"></i>
            </div>
          </div>
        </div>
      </blockquote>
    </div> <!-- slide-item -->
    <div class="lg:w-1/2 px-6">
      <blockquote class="flex flex-col md:flex-row md:flex-nowrap gap-4 lg:gap-8 bg-primary/5 text-black p-5 lg:p-8 [&_strong]:text-primary [&_strong]:font-bold border-transparent border-r-2 border-r-primary">
        <div class="flex-shrink-0 w-16 lg:w-20 h-16 lg:h-20 rounded-full bg-primary flex items-center justify-center relative max-md:mb-6">
          <span class="uppercase text-white font-lead font-medium text-2xl lg:text-3xl">RE</span>

          <i class="icon-close-quote flex items-center justify-center absolute left-1/2 -translate-x-1/2 -bottom-4 w-10 h-10 rounded-full bg-dark-grey-6 text-white text-lg"></i>
        </div>
        <div class="grid justify-between border-transparent border-l-black/[0.1] border-l pl-4 lg:pl-6">
          <div>
            <p>Scripps Safe provided us a secure, low-cost solution with simple to use software and analytics.</p>

            <ul class="flex gap-1 text-base lg:text-xl">
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
              <li><i class="icon-star text-vivid-yellow"></i></li>
            </ul>
          </div>

          <div class="flex flex-nowrap justify-between items-end gap-4 md:gap-8">
            <div class="text-black/60 pt-4 mr-4">
              <h3 class="font-semibold text-black text-xl lg:text-2xl mb-0">Rick Ellis, RPh, Owner</h3>
              <span>Medicine Shoppe 1072</span>
            </div>
            <div class="">
              <i class="icon-close-quote text-2xl lg:text-4xl xl:text-6xl text-primary opacity-[0.06]"></i>
            </div>
          </div>
        </div>
      </blockquote>
    </div> <!-- slide-item -->
  </div>
</section>
<!-- Section ends -->

<?php
include 'footer-custom-landing.php';
