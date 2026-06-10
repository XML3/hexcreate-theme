<?php
$menu = wp_get_nav_menu_items('Top Nav');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if (function_exists('rank_math_the_breadcrumbs')) : ?>
    <div class="breadcrumbs-container" >
        <?php rank_math_the_breadcrumbs(); ?>
    </div>
<?php endif; ?>

    <header class="sticky xl:top-3 left-0 w-full z-12000 bg-transparent container-wide">
        <div class="header-nav-wrapper flex flex-row items-center justify-between w-full relative z-10 py-2">
            <div class="flex shrink-0 z-40">
                <a href="<?php echo esc_url(home_url('/')); ?>" title="home">
                    <img class="w-6 xl:w-11 h-auto" src="<?php echo get_template_directory_uri(); ?>/src/images/HexCreate-x-orange.png" alt="HexCreate Logo">
                </a>
            </div>
            <!--Hamburger Menu-->
            <div class="flex items-center relative z-2501 xl:bg-secondary xl:rounded-full xl:py-3 xl:px-9">
                <button id="hamburger-menu" type="button" aria-label="Toggle menu" class="relative z-2501">
                    <img class="open w-6 h-auto" src="<?php echo get_template_directory_uri(); ?>/src/images/icons/open-menu-blk.png" alt="Hamburger menu">
                    <img class="close hidden w-4 h-auto" src="<?php echo get_template_directory_uri() ?>/src/images/icons/close-menu-blk.png" alt="Close menu">
                </button>
            </div>
        </div>
    </header>
    <!--Mobile Nav Menu items-->
    <div id="mobile-menu" class="hidden fixed top-20 justify-center items-center w-full h-screen xl:h-200 bg-secondary rounded-2xl z-12500 ">
        <ul class="flex flex-col items-start gap-6 pl-10 pt-[5%] container-wide">
            <?php
            if ($menu) {
                foreach ($menu as $item) {
                    //Contact ID
                    if (strpos($item->url, 'contact') !== false) { ?>
                        <li class="flex no-underline hover:scale-125">
                            <a href="<?php echo esc_url($item->url); ?>" class="text-accent-orange normal-72 font-manrope">
                                <?php
                                echo $item->title;
                                ?>
                            </a>
                        </li>
                    <?php
                    } else { ?>
                        <li class="flex font-source-sans-3 hover:no-underline normal-72 hover:scale-125 font-manrope">
                            <a href="<?php echo esc_url($item->url); ?>" class="text-title">
                                <?php echo $item->title; ?>
                            </a>
                        </li>
            <?php
                    }
                }
            }
            ?>
        </ul>
        <!--Social Media Icons/Links-->

        <div class="socials flex flex-row items-center justify-center z-80 border border-title w-full p-2 mt-10">
            <div class="container-wide w-full flex justify-center xl:justify-end items-center gap-6">
                <a target="_blank" href="https://www.linkedin.com/company/hexcreate"><img class="w-8 h-8 xl:w-12 xl:h-12  hover:scale-125" src="<?php echo get_template_directory_uri(); ?>/src/images/icons/hexcreate-linkedIn-orange.png" alt="LinkedIn"></a>
                <a target="_blank" href="https://www.instagram.com/hexcreatenl"><img class="w-10 h-10 xl:w-14 xl:h-14  hover:scale-125" src="<?php echo get_template_directory_uri(); ?>/src/images/icons/hexcreate-insta-orange.png" alt="Instagram"></a>
            </div>
        </div>
    </div>