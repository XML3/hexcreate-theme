<?php
$footer_company_name = get_field('footer_company_name');
$footer_kvk = get_field('footer_kvk');
$footer_location = get_field('footer_location');
$footer_title = get_field('footer_title');
$footer_subscribe_text = get_field('footer_subscribe_text');
$subscribe_button = get_field('subscribe_button');
$hexcreate_brand = get_field('hexcreate_brand');
$hc_brand = get_field('hc_brand');
$hexcreate_copywrite = get_field('hexcreate_copywrite');
?>

<footer class="site-footer bg-primary h-screen tall-tablet-scroll short-mobile-scroll">
    <section class="container-wide">
        <div class="color-shift bg-secondary rounded-2xl p-8 min-h-[80vh] flex justify-between flex-col">
            <div class="vertical-text-scroll w-full flex justify-start items-center mb-8 flex-col">
                <h2 class="bold-105 font-manrope text-title p-10"><?php echo esc_html($footer_title); ?></h2>
                <div class="w-full flex flex-col xl:flex-row justify-center items-center text-center space-y-2 xl:space-y-0 space-x-0 xl:space-x-8 py-4 xl:py-2">
                    <p class="text-title font-inter thin-16"><?php echo esc_html($footer_subscribe_text); ?></p>
                    <a href="<?php echo esc_url($subscribe_button['url']); ?>"
                        class="button-color-shift inline-block px-8 py-2 bg-accent-orange border border-title font-inter text-primary thin-16 rounded-sm text-center">
                        <?php echo esc_html($subscribe_button['title']); ?>
                    </a>
                </div>
            </div>
            <!--menu-grid-->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 justify-center items-center">
                <!-- kvk -->
                <div class="flex flex-col ">
                    <h4 class="thin-12 font-kode text-font mb-2 py-4 pl-4"><?php echo esc_html($footer_company_name); ?></h4>
                    <div class="font-inter text-title normal-14 flex flex-col py-4 pl-4">
                        <p class="normal-14 text-title"><?php echo esc_html($footer_kvk); ?></p>
                        <p class="normal-14 text-title"><?php echo esc_html($footer_location); ?></p>
                    </div>
                </div>

                <!--menu-->
                <div class="w-full">
                    <h4 class="font-kode thin-12 text-font mb-2 py-4 pl-4">01. Page</h4>
                    <div class="font-inter text-title normal-14 py-4 pl-4">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container' => false,
                            'menu_class' => 'space-y-1/2',
                            'fallback_cb' => false,
                        ));
                        ?>
                    </div>
                </div>

                <!--Social Media Icons/Links-->
                <div class="w-full flex flex-col">
                    <h4 class="font-kode thin-12 text-font mb-2 py-4 pl-4">02. Socials</h4>
                    <div class="font-inter text-title normal-14 flex flex-col py-4 pl-4">
                        <a href="https://www.linkedin.com/company/hexcreate" target="_blank" class="font-inter normal-14 text-title">LinkedIn</a>
                        <a href="https://www.instagram.com/hexcreatenl" target="_blank" class="font-inter normal-14 text-title">Instagram</a>
                    </div>
                </div>

                <div class="w-full flex flex-col">
                    <h4 class="font-kode thin-12 text-font mb-2 py-4 pl-4">03. Legals</h4>
                    <div class="font-inter text-title normal-14 flex flex-col py-4 pl-4">
                        <a href="<?php echo esc_url(site_url('/privacy-policy')); ?>" class="font-inter normal-14 text-title">Privacy Policy</a>
                        <a href="<?php echo esc_url(site_url('/cookie-policy')); ?>" target="_blank" class="font-inter normal-14 text-title">Cookie Policy</a>
                    </div>
                </div>

            </div>
            <!-- copyright -->
            <div class="flex justify-center items-center text-center py-4 w-full flex-col xl:flex-row mt-8 gap-2 ">
                <div class="flex shrink-0 z-40 items-center p-4 no-outline">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="home" class="relative inline-block">
                        <img class="logo-default w-10 xl:w-30 h-auto transition-opacity duration-300 hover:opacity-0" src="<?php echo get_template_directory_uri(); ?>/src/images/HexCreate-x-orange.png" alt="HexCreate Logo">
                        <img class="logo-black w-10 xl:w-30 h-auto absolute top-0 left-0 transition-opacity duration-300 opacity-0 hover:opacity-100" src="<?php echo get_template_directory_uri(); ?>/src/images/HexCreate-black.png" alt="HexCreate Logo">
                    </a>
                </div>
                <div class="flex flex-col no-outline text-center">
                    <div class="flex flex-row no-outline">
                        <h3 class="font-inter extrabold-184 text-title"><?php echo esc_html($hexcreate_brand); ?></h3>
                        <h3 class="relative flex size-7 lg:size-11 xl:size-12 items-center justify-center top-0 lg:top-5 xl:top-10 font-manrope bold-24-16 text-title border xl:border-2 border-title rounded-full"><?php echo esc_html($hc_brand); ?></h3>
                    </div>
                    <p class="font-inter thin-12 text-title text-center"><?php echo esc_html($hexcreate_copywrite); ?></p>
                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>