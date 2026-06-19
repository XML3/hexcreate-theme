<?php
$testimonial_title = get_field('testimonial_title');
$testimonials = get_field('testimonials');
$maintenance_title = get_field('maintenance_title');
$maintenance_intro = get_field('maintenance_intro');
$maintenance_button = get_field('maintenance_button');
$maintenance_image = get_field('maintenance_image');

if (!$testimonial_title && !$testimonials && !$maintenance_title && !$maintenance_intro && !$maintenance_button && !$maintenance_image) return;
?>

<!--Testimonials & Maintenance Plans-->
<section class="h-screen short-mobile-scroll h-screen-if-tall bg-primary flex justify-center items-center flex-col">
    <div class="h-1/2 w-full flex justify-center items-center flex-col">
        <div class="container-wide my-8">
            <div class="vertical-text-scroll bg-accent-orange rounded-2xl p-1 xl:p-8">
                <div class="flex justify-start items-center flex-col space-y-4">
                    <div class="w-full">
                        <?php
                        $testimonials = get_field('testimonials');
                        if ($testimonials) :
                            $items = [
                                ['img' => $testimonials['testimonial_img_one'], 'title' => $testimonials['testimonial_one_title'], 'subtitle' => $testimonials['testimonial_subtitle_one'], 'content' => $testimonials['testimonial_one'], 'location' => $testimonials['testimonial_one_location'], 'business' => $testimonials['testimonial_one_business']],
                                ['img' => $testimonials['testimonial_img_two'], 'title' => $testimonials['testimonial_two_title'], 'subtitle' => $testimonials['testimonial_subtitle_two'], 'content' => $testimonials['testimonial_two'], 'location' => $testimonials['testimonial_two_location'], 'business' => $testimonials['testimonial_two_business']],
                            ];
                        ?>

                            <div class="container-content grid grid-cols-1 lg:grid-cols-3 gap-8">
                                <div class="flex justify-center lg:justify-between items-center mt-4 xl:mt-0">
                                    <h2 class="font-manrope bold-62 text-title"><?php echo esc_html($testimonial_title); ?></h2>
                                </div>
                                <?php foreach ($items as $item): ?>
                                    <div class="flex flex-col justify-self-center lg:justify-between items-center text-center bg-secondary shadow-lg/30 p-3 lg:p-5 rounded-xl max-w-lg h-full">
                                        <div class="space-y-8">
                                            <div class="flex flex-row justify-around items-center bg-font shadown-lg/30 rounded-lg p-4">
                                                <img class="w-17 h-17 rounded-full object-cover shadow-lg/30 border border-accent-orange p-1" src="<?php echo esc_url($item['img']['url']) ?>" alt="<?php echo esc_attr($item['title']) ?>">
                                                <div class="flex flex-col space-y-1">
                                                    <h3 class="font-manrope bold-18 text-primary"><?php echo esc_html($item['title']); ?></h3>
                                                    <h4 class="font-inter normal-14 text-primary"><?php echo esc_html($item['subtitle']); ?></h4>
                                                </div>
                                            </div>
                                            <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($item['content']); ?></div>
                                        </div>
                                        <div class="space-y-1/2 mt-6">
                                            <p class="font-inter normal-14 text-font"><?php echo esc_html($item['business']); ?></a></p>
                                            <p class="font-inter normal-14 text-font"><?php echo esc_html($item['location']); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Second half-->
        <div class="h-1/2 w-full">
            <div class="bg-secondary flex justify-between items-center flex-col">
                <div class="container-content flex justify-center items-center xl:py-10 flex-col xl:flex-row">
                    <div class="vertical-text-scroll  w-full xl:w-2/4 flex flex-col space-y-4 my-8 xl:my-0">
                        <h2 class="section-title font-manrope normal-32 text-title mb-8 w-full"><?php echo esc_html($maintenance_title); ?></h2>
                        <div class="font-inter normal-16 text-font"><?php echo wp_kses_post($maintenance_intro); ?></div>
                        <?php if ($maintenance_button) : ?>
                            <a href="<?php echo esc_url($maintenance_button['url']); ?>"
                                class="w-full xl:w-3/4 inline-block bg-accent-orange text-white xl:px-8 py-3 rounded-md hover:bg-accent hover:text-primary transition mt-4 text-center">
                                <?php echo esc_html($maintenance_button['title']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="vertical-text-scroll  w-full h-auto flex justify-center xl:justify-end items-center mb-8 xl:mb-0">
                        <img class="max-w-[70%] xl:w-[35%] h-auto object-contain rounded-lg" src="<?php echo $maintenance_image['url']; ?>" alt="<?php echo $maintenance_image['alt']; ?> ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>