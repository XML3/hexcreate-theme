<?php 
$about_title = get_field('about_title');
$about_content = get_field('about_content');
$open_statement_title = get_field('open_statement_title');
$open_statement_content = get_field('open_statement_content');
$story_tite = get_field('story_title');
$story_content = get_field('story_content');

if (!$about_title && !$about_content && !$open_statement_title && !$open_statement_content && !$story_tite && !$story_content)  return;
?>
<section class="relative min-h-screen tall-tablet-scroll short-mobile-scroll ">
        <!-- Background colors - absolute positioned to span full width -->
    <div class="absolute inset-0 grid grid-cols-1 lg:grid-cols-2">
        <div class="bg-primary"></div>
        <div class="bg-accent-orange"></div>
    </div>
   <div class="relative container-wide mx-auto h-full min-h-screen flex items-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 w-full mt-8 xl:mt-0">
             
        <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4">
                 <div class="space-y-4 bg-accent-orange p-8 rounded-2xl">
                    <h2 class="bold-62 font-manrope text-secondary"><?php echo esc_html($about_title)?></h2>
                    <div class="font-inter normal-16 text-secondary"><?php echo wp_kses_post($about_content); ?></div>
                 </div>
             </div>
              <!-- Right column content -->
            <div class="space-y-6 w-full xl:w-3/4 flex justify-self-end flex-col bg-primary p-4 xl:p-20 rounded-2xl mt-8 xl:mt-0">
                <h4 class="vertical-text-scroll font-manrope semi-bold-20 text-title text-left lg:text-left"><?php echo esc_html($open_statement_title); ?></h4>
                <div class="vertical-text-scroll font-inter normal-16 text-font text-left lg:text-left"><?php echo wp_kses_post($open_statement_content); ?></div>
                <h4 class="vertical-text-scroll font-manrope semi-bold-20 text-title text-left lg:text-left"><?php echo esc_html($story_tite); ?></h4>
                <div class="vertical-text-scroll font-inter normal-16 text-font text-left lg:text-left"><?php echo wp_kses_post($story_content); ?></div>
            </div>
        </div>
        </div>
   </div>

</section>