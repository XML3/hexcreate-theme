<?php
$trust_title = get_field('trust_title');
$trust_content = get_field('trust_content');
$hexcreate_title = get_field('hexcreate_title');
$about_video = get_field('about_video');
$hexcreate_mask_image = get_field('hexcreate_mask_image');

if (!$trust_title && !$trust_content && !$hexcreate_title && !$hexcreate_mask_image) return;
?>
<section class="relative min-h-screen tall-tablet-scroll short-mobile-scroll ">
    <div class="absolute inset-0 grid grid-cols-1 lg:grid-cols-2">
        <div class="bg-secondary"></div>
        <div class="bg-primary"></div>
    </div>
    <div class="relative container-wide mx-auto xl:min-h-screen tall-tablet-scroll short-mobile-scroll pointer-events-auto flex items-center">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-[80%] 2xl:w-3/4">
                <div class="space-y-4 ">
                    <h2 class="bold-62 font-manrope text-title"><?php echo esc_html($trust_title) ?></h2>
                    <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($trust_content); ?></div>
                </div>
            </div>
            <!-- Right column content -->
                   <div class="vertical-text-scroll w-full flex justify-center xl:justify-end">
                    <div class="flex justify-center items-center bg-secondary rounded-2xl p-10">
            <?php if ($hexcreate_title) : ?>
         
                    <div class="font-manrope extrabold-120 text-center leading-none
                    text-transparent bg-clip-text bg-cover bg-center"
                        style="background-image: url('<?php echo esc_url($hexcreate_mask_image['url']); ?>'); 
                    background-size: 105%;
                    background-position: bottom;
                    background-repeat: no-repeat;
                    -webkit-background-clip: text;
                    background-clip: text;">
                        <?php echo esc_html($hexcreate_title); ?>
                    </div>
          
            <?php endif; ?>
            </div>
      </div>
        </div>
</section>