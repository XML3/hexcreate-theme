<?php
$more_design_work = get_field('more_design_work');
$salon_image = get_field('salon_image');
$salon_study_img = get_field('salon_study_img');
$salon_title = get_field('salon_title');
$salon_content = get_field('salon_content');
$salon_link = get_field('salon_link');
$email_img = get_field('email_img');
$email_study_img = get_field('email_study_img');
$email_title = get_field('email_title');
$email_content = get_field('email_content');
$email_testimonial = get_field('email_testimonial');
$email_link = get_field('email_link');

if (!$more_design_work && !$salon_image && !$salon_study_img && !$salon_title && !$salon_content && !$salon_link && !$email_img && !$email_study_img && !$email_title && !$email_content && !$email_testimonial && !$email_link)
    return;
?>

<div class="block xl:hidden">
    <div class="bg-secondary py-16 px-6">
        <div class="w-full flex items-center xl:items-start  justify-center max-h-112.5 overflow-y-scroll">
            <img class="max-w-full md:max-w-md lg:max-w-lg h-auto object-contain drop-shadow-sm/50 rounded-lg border border-font p-4" src="<?php echo esc_url($salon_image['url']); ?>" alt="<?php echo esc_attr($salon_image['alt']); ?>">
            
        </div>
        <div class="space-y-8 mt-6">
            <h3 class="font-manrope semi-bold-20 text-title text-center md:text-left"><?php echo esc_html($salon_title); ?></h3>
            <div class="font-manrope normal-16 text-title text-center md:text-left"><?php echo wp_kses_post($salon_content); ?></div>
            <?php if ($salon_link) : ?>
                <a href="<?php echo esc_url($salon_link['url']); ?>"
                    class="w-full inline-block normal-16  text-accent-orange text-center rounded-md hover:text-accent transition mt-4">
                    <?php echo esc_html($salon_link['title']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="bg-primary py-16 px-6">
        <div class="w-full flex items-center xl:items-start  justify-center max-h-112.5 overflow-y-scroll">
            <img class="max-w-full md:max-w-md lg:max-w-lg h-auto object-contain drop-shadow-sm/50 rounded-lg border border-font p-4" src="<?php echo esc_url($email_img['url']); ?>" alt="<?php echo esc_attr($email_img['alt']); ?>">
           
        </div>
        <div class="space-y-8 mt-6">
            <h3 class="font-manrope semi-bold-20 text-title text-center md:text-left"><?php echo esc_html($email_title); ?></h3>
            <div class="font-manrope normal-16 text-title text-center md:text-left"><?php echo wp_kses_post($email_content); ?></div>
              <div class="font-inter normal-14 text-font"><?php echo wp_kses_post($email_testimonial); ?></div>
            <?php if ($email_link) : ?>
                <a href="<?php echo esc_url($email_link['url']); ?>"
                    class="w-full inline-block normal-16  text-accent-orange text-center rounded-md hover:text-accent transition mt-4">
                    <?php echo esc_html($email_link['title']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- DESKTOP LAYOUT (visible above 1280px) -->
<section class="hidden xl:block relative xl:h-screen">
    <div class="absolute inset-0 grid grid-cols-1 xl:grid-cols-2">
        <div class="bg-primary"></div>
        <div class="bg-secondary"></div>
    </div>
    <div class="relative container-wide mx-auto xl:min-h-screen flex items-center tall-tablet-scroll short-mobile-scroll pointer-events-auto">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full">

            <div class="vertical-text-scroll space-y-8 w-full xl:w-3/4 flex items-center xl:items-start  justify-center flex-col">
                <div class="w-full flex items-center xl:items-start  justify-center max-h-112.5 overflow-y-scroll my-10 border border-font p-4">
                    <img class="max-w-full md:max-w-md lg:max-w-md h-auto object-contain drop-shadow-sm/50 rounded-lg" src="<?php echo esc_url($salon_image['url']); ?>" alt="<?php echo esc_attr($salon_image['alt']); ?>">
                   
                </div>
                <h3 class="font-manrope semi-bold-20 text-title"><?php echo esc_html($salon_title); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($salon_content); ?></div>
                <?php if ($salon_link) : ?>
                    <a href="<?php echo esc_url($salon_link['url']); ?>"
                        class="w-full inline-block normal-16  text-accent-orange text-left rounded-md hover:text-accent transition mt-4">
                        <?php echo esc_html($salon_link['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
            <!-- Right column content -->
            <div class="vertical-text-scroll space-y-6 w-full xl:w-[95%] flex justify-self-end flex-col px-20 rounded-2x ">
                <div class="w-full flex items-center xl:items-start  justify-center max-h-112.5 overflow-y-scroll my-10 border border-font p-4">
                    <img class="max-w-full md:max-w-md lg:max-w-xs h-auto object-contain drop-shadow-sm/50 rounded-lg" src="<?php echo esc_url($email_img['url']); ?>" alt="<?php echo esc_attr($email_img['alt']); ?>">  
                </div>
                <h3 class="font-manrope semi-bold-20 text-title"><?php echo esc_html($email_title); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($email_content); ?></div>
                 <div class="font-inter normal-14 text-font mt-4"><?php echo wp_kses_post($email_testimonial); ?></div>
                <?php if ($email_link) : ?>
                    <a href="<?php echo esc_url($email_link['url']); ?>"
                        class="w-full inline-block normal-16  text-accent-orange text-left rounded-md hover:text-accent transition mt-4">
                        <?php echo esc_html($email_link['title']); ?>
                    </a>
                <?php endif; ?>
            
            <div>
        </div>
    </div>
</section>