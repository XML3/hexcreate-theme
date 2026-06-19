<?php
$case_study_intro_title = get_field('case_study_intro_title');
$case_study_intro_subtitle = get_field('case_study_intro_subtitle');
$case_study_intro_content = get_field('case_study_intro_content');
$my_role_title = get_field('my_role_title');
$my_role_content = get_field('my_role_content');
$yoska_video = get_field('yoska_video');
if (!$case_study_intro_title && !$case_study_intro_subtitle && !$case_study_intro_content && !$my_role_title && !$my_role_content && !$yoska_video) return;
?>
<!-- MOBILE/TABLET LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <!-- Top section with bg-secondary -->
    <div class="bg-secondary py-16 px-6">
        <div class="bg-primary p-6 md:p-8 rounded-2xl mb-8">
            <h4 class="font-manrope semi-bold-20 text-title mb-4"><?php echo esc_html($case_study_intro_subtitle); ?></h4>
            <h3 class="font-manrope normal-60 text-title mb-6"><?php echo esc_html($case_study_intro_title); ?></h3>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($case_study_intro_content); ?></div>
            <div class="bg-accent-orange p-6 md:p-8 rounded-2xl">
            <h3 class="font-manrope normal-60 text-primary mb-4"><?php echo esc_html($my_role_title); ?></h3>
            <div class="font-inter normal-16 text-primary"><?php echo wp_kses_post($my_role_content); ?></div>
        </div>
        </div>
    </div>
    
    <!-- Bottom section with bg-accent for video -->
    <div class="bg-accent py-16 px-6">
        <?php if ($yoska_video) : ?>
            <div class="w-full">
                <video autoplay muted loop playsinline preload="metadata" aria-label="Opening video composed with many different brand related images" class="w-full h-auto rounded-2xl">
                    <source src="<?php echo esc_url($yoska_video) ?>" type="video/mp4">
                </video>
            </div>
        <?php endif; ?>
    </div>
</div>
<!--Desktop-->
<section class="hidden xl:block relative xl:h-screen bg-secondary">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
        <div class="bg-secondary"></div>
        <div class="bg-accent"></div>

    </div>

    <div class="relative container-wide mx-auto xl:min-h-screen tall-tablet-scroll short-mobile-scroll pointer-events-auto flex items-center">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-[95%] bg-primary p-20 rounded-2xl">
                <h4 class="w-full xl:w-3/4 font-manrope semi-bold-20 text-title"><?php echo esc_html($case_study_intro_subtitle); ?></h4>
                <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($case_study_intro_title); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($case_study_intro_content); ?></div>                
                <h3 class="font-manrope bold-40 text-title"><?php echo esc_html($my_role_title); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($my_role_content); ?></div>        
            </div>
            <!-- Right column content -->
            <div class="vertical-text-scroll w-full flex justify-center xl:justify-end items-center">
                <?php if ($yoska_video) : ?>

                    <div class="relative z-10 w-full xl:max-w-[80%]">
                        <video autoplay muted loop playsinline preload="metadata" aria-label="Opening video composed with many different brand related images">
                            <source src="<?php echo esc_url($yoska_video) ?>" type="video/mp4">
                        </video>
                    </div>
                <?php endif; ?>
            </div>
        <div>
       
    </div>
</section>