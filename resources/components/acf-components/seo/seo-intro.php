<?php
$seo_ai_search_title = get_field('seo_ai_search_title');
$seo_ai_search_subtitle = get_field('seo_ai_search_subtitle');
$seo_ai_search_content = get_field('seo_ai_search_content');
$seo_cta_button = get_field('seo_cta_button');
$seo_ai_search_video = get_field('seo_ai_search_video');

if (!$seo_ai_search_title && !$seo_ai_search_subtitle && !$seo_ai_search_content && !$seo_cta_button && !$seo_ai_search_video) return;
?>

<!-- Single pinned screen with horizontal scroll -->
<section class="min-h-screen bg-primary flex justify-around flex-col">
    <div class="vertical-text-scroll container-wide w-full h-full bg-secondary rounded-2xl py-12">
        <div class="container-content w-full flex justify-between items-center flex-col xl:flex-row gap-6 xl:gap-0">
            <!-- Top content -->
            <div class="w-full xl:w-1/2 space-y-4 text-left">
                <h2 class="section-title font-manrope normal-20 text-title mb-4"><?php echo esc_html($seo_ai_search_title); ?></h2>
                <h3 class="section-title font-manrope bold-48-62 text-title mb-4"><?php echo esc_html($seo_ai_search_subtitle); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($seo_ai_search_content); ?></div>
                <a href="<?php echo esc_url($seo_cta_button['url']); ?>"
                    class="w-full xl:w-2/4 inline-block py-2 xl:py-3 bg-accent-orange font-inter text-primary primary thin-16 rounded-sm hover:border hover:border-accent hover:bg-light/10 hover:text-accent text-center mt-8 mb-8 xl:mb-0"><?php echo esc_html($seo_cta_button['title']) ?>
                </a>
            </div>
            <?php
            if ($seo_ai_search_video) :
            ?>
                <div class="w-full md:max-w-sm h-auto flex justify-center xl:justify-end items-center shadow-2xl">
                    <div class="border border-font p-4 rounded-md">
                        <video autoplay muted loop playsinline preload="metadata" aria-label=" SEO.">
                            <source src="<?php echo esc_url($seo_ai_search_video) ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>