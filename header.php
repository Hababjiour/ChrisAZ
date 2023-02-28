<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="header">

        <!-- Sur menu -->
        <div id="surmenu">
            <div>
                <a href="mailto:chris.exe32@gmail.com">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511 386">
                        <g id="Calque_3" data-name="Calque 3">
                            <path d="M472.13,11.89h-403a54.16,54.16,0,0,0-54,54v278a54.16,54.16,0,0,0,54,54h403a54.16,54.16,0,0,0,54-54v-278A54.16,54.16,0,0,0,472.13,11.89ZM65.48,33.5s390.46.26,404.65,0,16.52,4.65,16.52,4.65-116.13,127-168.78,184.26-95.81.16-95.81.16L53.23,37.76C54.39,35.05,65.48,33.5,65.48,33.5ZM34.77,345V74.53c0-14.19,4.13-22.45,4.13-22.45l151.23,167L38.9,357.63A20.3,20.3,0,0,1,34.77,345ZM472.71,375.7H68.32c-16.26,0-13.67-3.36-13.67-3.36L204.58,234.79c73.81,80,130.84,0,130.84,0l151,137.55C484.58,375.7,472.71,375.7,472.71,375.7Zm29-17.68L350.47,219.44l151.22-167s4.13,8.26,4.13,22.45V345.37A20.25,20.25,0,0,1,501.69,358Z" transform="translate(-15.13 -11.89)" />
                        </g>
                    </svg>
                    <p>
                        chris.exe32@gmail.com
                    </p>
                </a>
                <a href="tel:+33384294749">
                    <svg id="icone_tel" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 116.82 178.89">
                        <path d="M69.05,55.77c.78-1.32,1.52-2.65,2.32-3.94a35.57,35.57,0,0,1,13.22-12.3c1-.57,1.94-1.32,2.9-2a26.12,26.12,0,0,1,9.12-4.31c6-1.43,11.09.25,15.26,4.74a27.19,27.19,0,0,1,4.81,7.36,58.22,58.22,0,0,1,5.57,22.81,21.44,21.44,0,0,1-1.7,9.39,14.33,14.33,0,0,1-12,8.85c-4.94.57-8.67,3.11-12.16,6.21a15.69,15.69,0,0,0-3.18,4.17,9.31,9.31,0,0,0,.19,9.3c2.76,5.13,5.7,10.16,8.44,15.3q8.5,16,16.87,32.12c.72,1.38,1.16,2.9,1.82,4.3a19.68,19.68,0,0,0,5,6.68c4,3.44,8.55,3.93,13.5,2.46,3.57-1.06,7.18-2.09,10.82-2.88a40.28,40.28,0,0,1,7.43-.85c4.82-.11,8.66,2.06,11.69,5.72a67.09,67.09,0,0,1,8.23,13.44,40.4,40.4,0,0,1,3.48,9.89,17,17,0,0,1-.08,8c-1.09,3.91-3.76,6.43-7.3,8.14a27.75,27.75,0,0,1-8.1,2.38,70.77,70.77,0,0,1-19.5.29,45.25,45.25,0,0,1-4.53-1.1l-.86-.18-4.42-1.8c-.24-.15-.48-.32-.73-.46-1.84-1-3.73-2-5.51-3.15a93.94,93.94,0,0,1-19.31-17.28,209.91,209.91,0,0,1-22.07-30.88c-6.69-11.15-12.6-22.66-16.51-35.14-3.34-10.66-6.07-21.44-7.07-32.6a73.68,73.68,0,0,1,1.2-23.23c.37-1.59.84-3.16,1.27-4.75Z" transform="translate(-64.27 -32.73)" />
                    </svg>
                    <p>
                        +33 7 81 84 41 00
                    </p>
                </a>
            </div>
        </div>

        <!-- Déclaration du menu -->
        <div id="hamburger">
            <div class="maxWidth">
                <div class="div_logo_chrisaz">
                    <a class="logo_chrisaz" href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-chrisaz.svg" alt="Logo" />
                    </a>
                </div>
                <div id="hamburger-content">
                    <nav>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main',
                            'container' => 'ul',
                            'menu_class' => 'chrisaz_header_menu'
                        )) ?>
                    </nav>
                </div>
                <button id="hamburger-button"><span class="hamburgerText">Menu</span>&#9776; </button>
                <div id="hamburger-sidebar">
                    <div id="hamburger-sidebar-header">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clavier-noir-1000.webp" srcset="<?php echo get_template_directory_uri(); ?>/img/clavier-noir-1000.webp 900w,
                                                <?php echo get_template_directory_uri(); ?>/img/menu_overlay/clavier-noir-500.webp 500w" sizes="100vw" alt="">
                    </div>
                    <div id="hamburger-sidebar-body"></div>
                </div>
                <div id="hamburger-overlay"></div>
            </div>
        </div>

    </header>
    <main>