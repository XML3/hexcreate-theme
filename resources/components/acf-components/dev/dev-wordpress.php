<?php 
$wordpress_title = get_field('wordpress_title');
$wordpress_intro = get_field('wordpress_intro');
$wordpress_subtitle = get_field('wordpress_subtitle');
$wordpress_content = get_field('wordpress_content');
$wordpress_subtitle_two = get_field('wordpress_subtitle_two');
$wordpress_content_two = get_field('wordpress_content_two');
$wordpress_subtitle_three = get_field('wordpress_subtitle_three');
$wordpress_content_three = get_field('wordpress_content_three');
$wordpress_subtitle_four = get_field('wordpress_subtitle_four');
$wordpress_content_four = get_field('wordpress_content_four');

if ( !$wordpress_title && !$wordpress_intro && !$wordpress_subtitle && !$wordpress_content && !$wordpress_subtitle_two && !$wordpress_content_two && !$wordpress_subtitle_three && !$wordpress_content_three && !$wordpress_subtitle_four && !$wordpress_content_four)
    return;
?>

<!-- SECTION 2: Content (Two Columns) -->
<section class="relative min-h-screen tall-tablet-scroll short-mobile-scroll">

    <!-- Background colors - absolute positioned to span full width -->
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2 min-h-screen tall-tablet-scroll short-mobile-scroll">
        <div class="bg-secondary"></div>
        <div class="bg-primary"></div>
    </div>

    <!-- Content - relative positioned to stay on top -->
    <div class="relative container-wide mx-auto h-full min-h-screen flex items-center ">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full mt-8 xl:mt-0 gap-30">

            <!-- Left column content -->
             
            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4">
                <div class="space-y-4">
                    <h3 class="font-manrope normal-60 text-title mb-8"><?php echo esc_html($wordpress_title); ?></h3>
                    <h4 class="font-inter normal-16 text-font"><?php echo wp_kses_post($wordpress_intro); ?></h4>
                </div>
                      <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4">
                  <div class="font-manrope normal-16 text-font"><?php echo esc_html($wordpress_subtitle); ?></div>
                  <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($wordpress_content); ?></div>
                      </div>
            </div>

                 <!-- Right column content -->
            <div class="space-y-6 w-full 2xl:w-3/4 flex justify-self-end flex-col bg-secondary p-4 xl:p-20 rounded-2xl mt-8 xl:mt-0">
             <div class="space-y-4 pt-4">
                    <h4 class="font-manrope medium-20 text-title"><?php echo esc_html($wordpress_subtitle_two); ?></h4>
                    <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($wordpress_content_two); ?></div>
                </div>
                <div class="space-y-4 pt-4">
                    <h4 class="font-manrope medium-20 text-title"><?php echo esc_html($wordpress_subtitle_three); ?></h4>
                    <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($wordpress_content_three); ?></div>
                </div>
                  <div class="space-y-4 pt-4">
                    <h4 class="font-manrope medium-20 text-title"><?php echo esc_html($wordpress_subtitle_four); ?></h4>
                    <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($wordpress_content_four); ?></div>
                </div>
               
            </div>
</div>
</div>
</section>