<?php 
$ux_decision_title = get_field('ux_decision_title');
$ux_decision_content = get_field('ux_decision_content');
$ui_decision_title = get_field('ui_decision_title');
$ui_decision_content = get_field('ui_decision_content');

if (!$ui_decision_title && !$ux_decision_content && !$ui_decision_title && !$ui_decision_content) return;
?>


<!-- MOBILE/TABLET LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <!-- Top section - UX Decision Card -->
    <div class="bg-primary py-16 px-6">
        <div class="bg-accent-orange p-6 md:p-8 rounded-2xl">
            <h3 class="font-manrope normal-60 text-primary mb-4"><?php echo esc_html($ux_decision_title); ?></h3>
            <div class="font-inter normal-16 text-primary"><?php echo wp_kses_post($ux_decision_content); ?></div>
        </div>
    </div>
    
    <!-- Bottom section - UI Decision Card -->
    <div class="bg-secondary py-16 px-6">
        <div class="bg-primary p-6 md:p-8 rounded-2xl">
            <h3 class="font-manrope normal-60 text-title mb-4"><?php echo esc_html($ui_decision_title); ?></h3>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($ui_decision_content); ?></div>
        </div>
    </div>
</div>

<!-- DESKTOP LAYOUT (visible above 1280px) -->
<section class="hidden xl:block relative xl:h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
         <div class="bg-primary"></div>
        <div class="bg-secondary"></div>
    </div>
    <div class="relative container-wide mx-auto xl:min-h-screen tall-tablet-scroll short-mobile-scroll pointer-events-auto flex items-center">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">
            <div class="vertical-text-scroll space-y-8 w-full xl:w-[95%] bg-accent-orange p-20 rounded-2xl">
                <h3 class="font-manrope normal-60 text-primary"><?php echo esc_html($ux_decision_title); ?></h3>
                <div class="font-inter normal-16 text-primary"><?php echo wp_kses_post($ux_decision_content); ?></div>
            </div>
            <!-- Right column content -->
            <div class="vertical-text-scroll space-y-8 w-full xl:w-[95%] flex justify-self-end flex-col bg-primary p-20 rounded-2xl">
                <h3 class=" font-manrope normal-60 text-title text-left lg:text-left"><?php echo esc_html($ui_decision_title); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($ui_decision_content); ?></div>
            </div>
            <div>
            </div>
        </div>
</section>