<?php
$seo_ai_search_title = get_field('seo_ai_search_title');
$seo_ai_search_subtitle = get_field('seo_ai_search_subtitle');
$seo_ai_search_content = get_field('seo_ai_search_content');
$seo_ai_search_video = get_field('seo_ai_search_video');

if (!$seo_ai_search_title && !$seo_ai_search_subtitle && !$seo_ai_search_content && !$seo_ai_search_video) return;
?>

<!-- Single pinned screen with horizontal scroll -->
<section class="min-h-screen bg-primary flex justify-around flex-col">
        <div class="container-content w-full flex justify-between items-center flex-col xl:flex-row gap-6 xl:gap-0">
            <!-- Top content -->
            <div class="vertical-text-scroll w-full xl:w-1/2 space-y-4 text-left">
                <h2 class="section-title font-manrope normal-20 text-title mb-4"><?php echo esc_html($seo_ai_search_title); ?></h2>
                 <h3 class="section-title font-manrope bold-48-62 text-title mb-4"><?php echo esc_html($seo_ai_search_subtitle); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($seo_ai_search_content); ?></div>

            </div>
            <?php
            if ($seo_ai_search_video) :
            ?>
                <div class="vertical-text-scroll w-full  md:max-w-sm h-auto flex justify-center xl:justify-end items-center">
                    <video autoplay muted loop playsinline preload="metadata" aria-label=" SEO.">
                        <source src="<?php echo esc_url($seo_ai_search_video) ?>" type="video/mp4">
                    </video>
                </div>
            <?php endif ?>
        </div>
</section>