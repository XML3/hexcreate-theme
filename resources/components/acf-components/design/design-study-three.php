<?php
$my_role_title = get_field('my_role_title');
$my_role_content = get_field('my_role_content');
$the_problem_title = get_field('the_problem_title');
$the_problem_content = get_field('the_problem_content');

if (!$my_role_title && !$my_role_content && !$the_problem_title && !$the_problem_content) return;
?>


<!-- MOBILE/TABLET LAYOUT (visible below 1280px) -->
<div class="block xl:hidden">
    <!-- Top section - My Role Card (bg-secondary area) -->
    <div class="bg-secondary py-16 px-6">
        <div class="bg-accent-orange p-6 md:p-8 rounded-2xl">
            <h3 class="font-manrope normal-60 text-primary mb-4"><?php echo esc_html($my_role_title); ?></h3>
            <div class="font-inter normal-16 text-primary"><?php echo wp_kses_post($my_role_content); ?></div>
        </div>
    </div>
    
    <!-- Bottom section - The Problem (bg-primary area) -->
    <div class="bg-primary py-16 px-6">
        <div class="space-y-6">
            <h3 class="font-manrope normal-60 text-title"><?php echo esc_html($the_problem_title); ?></h3>
            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($the_problem_content); ?></div>
        </div>
    </div>
</div>

<!-- DESKTOP LAYOUT (visible above 1280px) -->
<section class="hidden xl:block relative xl:h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
        <div class="bg-secondary"></div>
        <div class="bg-primary"></div>
    </div>
    < <div class="relative container-wide mx-auto xl:min-h-screen tall-tablet-scroll short-mobile-scroll pointer-events-auto flex items-center">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4  bg-accent-orange p-20 rounded-2xl">
                <h3 class="font-manrope normal-60 text-primary"><?php echo esc_html($my_role_title); ?></h3>
                <div class="font-inter normal-16 text-primary"><?php echo wp_kses_post($my_role_content); ?></div>
            </div>
            <!-- Right column content -->
            <div class="vertical-text-scroll space-y-8 w-full  xl:w-3/4 flex justify-self-end flex-col">
                <h3 class=" font-manrope normal-60 text-title text-left lg:text-left"><?php echo esc_html($the_problem_title); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($the_problem_content); ?></div>
            </div>
            <div>

            </div>
        </div>
</section>