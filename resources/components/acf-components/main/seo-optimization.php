<?php
$seo_title = get_field('seo_title');
$seo_subtitle = get_field('seo_subtitle');
$seo_content = get_field('seo_content');
$optimization = get_field('optimization_scroll');
$optimisation_image = get_field("optimization_image");

if (!$seo_title && !$seo_subtitle && !$seo_content && !$optimization && !$optimisation_image) return;
?>

<!-- Single pinned screen with horizontal scroll -->
<div class="horizontal-scroll-screen min-h-screen bg-primary flex justify-around flex-col">
    <div class="container-wide">
        <div class="bg-secondary rounded-2xl py-8">
        <div class="container-content w-full flex justify-between items-center flex-col xl:flex-row gap-6 xl:gap-0">
            <!-- Top content -->
            <div class="vertical-text-scroll  w-full space-y-4 text-left">
                <h2 class="section-title font-manrope normal-20 text-title mb-4"><?php echo esc_html($seo_title); ?></h2>
                <h3 class="font-manrope bold-48-62 text-title"><?php echo esc_html($seo_subtitle); ?></h3>
                <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($seo_content); ?></div>
            </div>
            <?php
            if (!empty($optimisation_image)) :
            ?>
                <div class="vertical-text-scroll w-full h-auto flex justify-center xl:justify-end items-center">
                    <img class="w-30 h-auto object-contain" src="<?php echo $optimisation_image['url']; ?>" alt="<?php echo $optimisation_image['alt']; ?> ">
                </div>
            <?php endif ?>
        </div>
    </div>
    </div>
    <!-- Horizontal Scroll -->
    <?php if ($optimization):
        $numbers = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight'];
        $items = [];
        foreach ($numbers as $num) {
            $title = $optimization["opt_title_$num"] ?? '';
            $number = $optimization["opt_number_$num"] ?? '';
            $subtitle = $optimization["opt_subtitle_$num"] ?? '';
            $content = $optimization["opt_content_$num"] ?? '';

            if ($title || $number || $subtitle || $content) {
                $items[] = [
                    'title' => $title,
                    'number' => $number,
                    'subtitle' => $subtitle,
                    'content' => $content,
                ];
            }
        }
    ?>
        <div class="optimization-scroll-wrapper overflow-x-hidden">
            <div class="optimization-scroll flex gap-6 pb-4 px-4 sm:px-8 md:px-12 lg:px-16 xl:px-24 2xl:px-32 flex-wrap sm:flex-nowrap">
                <?php foreach ($items as $item): ?>

                    <div class="card-wrapper max-w-100 p-1 shrink-0 w-full sm:w-auto">
                        <div class="card-content p-4 rounded-lg space-y-4 bg-primary h-full min-h-70 flex flex-col m-2">
                            <?php if ($item['title']): ?>
                                <h2 class="font-inter bold-18 text-title"><?php echo esc_html($item['title']); ?></h2>
                            <?php endif; ?>
                            <?php if ($item['number']): ?>
                                <h3 class="font-kelly bold-22 text-accent-orange"><?php echo esc_html($item['number']); ?></h3>
                            <?php endif; ?>
                            <?php if ($item['subtitle']): ?>
                                <h4 class="font-manrope bold-18 text-title"><?php echo esc_html($item['subtitle']); ?></h4>
                            <?php endif; ?>
                            <?php if ($item['content']): ?>
                                <div class="font-inter normal-16 mt-2 text-title"><?php echo wp_kses_post($item['content']); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

</div>