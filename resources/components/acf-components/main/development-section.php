<?php

$development_title = get_field('development_title');
$dev_subtitle = get_field('dev_subtitle');
$dev_content = get_field('dev_content');
$dev_section_subtitle_two = get_field('dev_section_subtitle_two');
$dev_section_content_two = get_field('dev_section_content_two');
$dev_section_video = get_field('dev_section_video');
$bg_image_development = get_field('bg_image_development');
$read_more_button = get_field('read_more_button');
$cta_button = get_field('cta_button');

if ( !$development_title && !$dev_subtitle && !$dev_content && !$dev_section_subtitle_two && !$dev_section_content_two && !$dev_section_video && !$bg_image_development && !$read_more_button && !$cta_button) return
?>
<section class="relative flex justify-around items-center flex-col xl:h-screen h-screen-if-tall tall-tablet-scroll short-mobile-scroll pointer-events-auto bg-secondary">
    <div class="container-wide ">
        <div class="flex justify-around items-center flex-col xl:h-screen short-mobile-scroll h-screen-if-tall tall-tablet-scroll">

<div class="vertical-text-scroll w-full bg-accent rounded-2xl min-h-[35vh] overflow-hidden flex justify-center items-center mb-8 xl:mb-0">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-0 md:gap-4 container-wide">
        
        <!-- Left Text -->
        <div class="flex justify-center items-center py-6 xl:py-0">
            <h3 class="text-primary font-manrope bold-48-62 text-center ">
                <?php echo esc_html($dev_subtitle); ?>
            </h3>
        </div>
        
        <!-- Center Canvas -->
        <div class="flex justify-center items-center ">
            <div id="p5-sphere-container-2" class="bg-transparent rounded-full w-37.5 h-[37.5 md:w-50 md:h-50 flex items-center justify-center mx-auto">
                <!-- p5.js canvas will be injected here -->
            </div>
        </div>
        
        <!-- Right Text -->
        <div class="flex justify-center items-center py-6 xl:py-0">
            <h2 class="text-primary font-manrope bold-48-62 text-center">
                <?php echo esc_html($development_title); ?>
            </h2>
        </div>
    </div>
</div>

            <div class="container-wide">
                <div class="vertical-text-scrol flex flex-col xl:flex-row justify-between items-center w-full gap-6 xl:gap-0">
                    <div class="flex flex-col space-y-8 w-full">
                        <h2 class="w-full xl:w-1/2 normal-32 text-title font-inter"><?php echo esc_html($dev_section_subtitle_two); ?></h2>
                        <div class="flex flex-col md:flex-row gap-0 md:gap-2 mb-4 xl:mb-0">
                        <a href="<?php echo esc_url($read_more_button['url']); ?>"
                            class="inline-block py-2 xl:py-3 w-full xl:w-1/6 bg-transparent border border-accent font-inter text-title normal-16 text-center rounded-sm hover:bg-accent hover:border-none hover:text-primary mt-4">
                            <?php echo esc_html($read_more_button['title'])?> </a>
                         <a href="<?php echo esc_url($cta_button['url']); ?>"
                            class="inline-block py-2 xl:py-3 w-full xl:w-1/4 bg-accent border border-accent font-inter text-primary normal-16 text-center rounded-sm hover:bg-transparent hover:border-accent hover:text-title mt-4">
                            <?php echo esc_html($cta_button['title'])?> </a>
                            </div>
                    </div>
                    <?php
            if ($dev_section_video) :
            ?>
                <div class="w-full  md:max-w-sm h-auto flex justify-center xl:justify-end items-center">
                    <video autoplay muted loop playsinline preload="metadata" aria-label=" SEO.">
                        <source src="<?php echo esc_url($dev_section_video) ?>" type="video/mp4">
                    </video>
                </div>
            <?php endif ?>

            </div>
        </div>
    </div>
</section>