<?php
/*
    Template Name: e-commerce
*/

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="templateHeader">
            <div class="frontpageTitre">
                <h1><?php the_title() ?></h1>
                <h2>Vendre en ligne</h2>
            </div>
            <div class="siteEcommerceSvg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.67 329.3">
                    <g id="icone-opton-1">
                        <rect class="mainFill" x="101.69" y="78.63" width="5.16" height="28.52" rx="2.58" transform="translate(32.5 -44.17) rotate(21.46)" />
                        <rect class="mainFill" x="341.5" y="58.16" width="5.16" height="50.13" rx="2.58" transform="translate(538.73 -219) rotate(111.46)" />
                        <rect class="mainFill" x="80.92" y="135.72" width="5.16" height="20" rx="2.58" transform="translate(50.4 -32.91) rotate(21.46)" />
                        <polygon class="mainFill" points="14.98 329.3 14.97 329.3 14.98 329.3 14.98 329.3" />
                        <path class="mainFill" d="M216.29,91.68a4.26,4.26,0,1,1,5.52-2.41A4.25,4.25,0,0,1,216.29,91.68Zm51.06-16.2a5.81,5.81,0,1,1-7.53,3.28A5.81,5.81,0,0,1,267.35,75.48Zm12.24,37.36a2.58,2.58,0,0,1-3.35,1.46L234.4,97.84a2.58,2.58,0,0,1-1.46-3.34l.58-1.47a2.58,2.58,0,0,1,3.34-1.46L278.71,108a2.58,2.58,0,0,1,1.46,3.35Zm96.2-17.94L248.86,45l-75.29-29.6C134.06-.15,120.46,51.24,120.46,51.24L9.69,333.35l-1,2.52,15,5.89L123.22,88.64A2.72,2.72,0,0,1,127.06,87l235.16,92.46a2.73,2.73,0,0,1,1.69,3.9l-62.3,158.43h17.46l72.46-184.29C411,108,375.79,94.9,375.79,94.9Z" transform="translate(-8.72 -12.46)" />
                        <g id="caddie">
                            <circle class="mainFill" cx="163.4" cy="261.75" r="9.54" />
                            <circle class="mainFill" cx="203.16" cy="277.38" r="9.54" />
                            <path class="mainFill" d="M158.73,150.69a.65.65,0,0,0-.34-.06,5.54,5.54,0,0,0-3.56.12,3.88,3.88,0,0,0-2.49,2.78c-1.27,3.22.16,4.42,3.38,5.69l15.54,6.11c-2,5.12,3.45,40.6-6.88,66.95l.06,0-.05.12c-.08.41-.13.53-.12.32l-7.34,18.65a5.68,5.68,0,0,0,3.19,7.32l68.29,26.85c1.65.65,3.61,1.49,5.11.84s2-.7,2.67-2.35c1.29-3.29-1.27-3.88-4.56-5.17l-66.55-26.17,6.36-17.66,59.21,23.28c5.69,2.24,11.55,2.57,16.17-2.12l26.36-37.16-4.9-2.62-79.17-31.13s-3.81-1.39-10.57-4.05c-1.66-2.48.5-20.32-2.91-23.91m49.63,48.42L263,220.51l-10.34,14-33.48-13.16Zm-8.25,21,32.1,12.64-8.62,14.29L211,242.06Zm-38.43-21.34L180,188l37.3,14.66-6.13,15.59Zm-2.9,22.78,2.37-16.94,30.87,12.29-6,15.32Z" transform="translate(-8.72 -12.46)" />
                            <path class="mainFill" d="M164.23,232.76c0-.09,0-.28,0-.55l.19.07c0,.05,0,.1,0,.15C164.32,232.85,164.28,233,164.23,232.76Z" transform="translate(-8.72 -12.46)" />
                            <path class="mainFill" d="M164.23,232.76l.14-.33C164.32,232.85,164.28,233,164.23,232.76Z" transform="translate(-8.72 -12.46)" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>

        <div class="content">
            <?php the_content(); ?>
        </div>

<?php endwhile;
endif; ?>

<?php
get_footer(); ?>