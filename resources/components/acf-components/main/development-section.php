<?php
$stack_banner = get_field('stack_banner');
$development_title = get_field('development_title');
$dev_subtitle = get_field('dev_subtitle');
$dev_content = get_field('dev_content');
$dev_section_subtitle_two = get_field('dev_section_subtitle_two');
$dev_section_content_two = get_field('dev_section_content_two');
$bg_image_development = get_field('bg_image_development');

if (!$stack_banner && !$development_title && !$dev_subtitle && !$dev_content && !$dev_section_subtitle_two && !$dev_section_content_two && !$bg_image_development) return
?>
<section class="relative flex justify-around items-center flex-col h-screen h-screen-if-tall tall-tablet-scroll short-mobile-scroll pointer-events-auto bg-secondary">
    <div class="container-wide ">
        <div class="flex justify-around items-center flex-col h-screen short-mobile-scroll h-screen-if-tall tall-tablet-scroll">

<div class="vertical-text-scroll w-full bg-title rounded-2xl min-h-[40vh] overflow-hidden flex justify-center items-center mb-8 xl:mb-0">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-0 md:gap-4 container-wide">
        
        <!-- Left Text -->
        <div class="flex justify-center items-center py-8 xl:py-0">
            <h3 class="text-primary font-manrope bold-48-62 text-center ">
                <?php echo esc_html($dev_subtitle); ?>
            </h3>
        </div>
        
        <!-- Center Canvas -->
        <div class="flex justify-center items-center ">
            <div id="p5-sphere-container" class="bg-transparent rounded-full w-37.5 h-[37.5 md:w-50 md:h-50 flex items-center justify-center mx-auto">
                <!-- p5.js canvas will be injected here -->
            </div>
        </div>
        
        <!-- Right Text -->
        <div class="flex justify-center items-center py-8 xl:py-0">
            <h2 class="text-primary font-manrope bold-48-62 text-center">
                <?php echo esc_html($development_title); ?>
            </h2>
        </div>
    </div>
</div>

            <div class="container-wide">
                <div class="vertical-text-scrol flex flex-col xl:flex-row justify-between items-center w-full gap-6 xl:gap-0">
                    <div class="flex flex-col space-y-8 w-full">
                        <h2 class="w-full xl:w-3/4 normal-48 text-title font-inter"><?php echo esc_html($dev_section_subtitle_two); ?></h2>
                        <a href="<?php echo site_url('/development'); ?>"
                            class="inline-block py-2 xl:py-3 w-full xl:w-1/4 bg-accent-orange font-inter text-primary normal-16 text-center rounded-sm hover:bg-transparent hover:border hover:border-[#004F5D] hover:text-title mt-4">
                            READ MORE → </a>
                    </div>
                    <img class="w-full lg:max-w-[40%] xl:max-w-[20%] h-auto object-contain rounded-lg" src="<?php echo esc_url($bg_image_development['url']); ?>">
                </div>

            </div>
        </div>
    </div>
</section>