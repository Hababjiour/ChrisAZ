<?php
/*
    Template Name: Site vitrine
*/

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="templateHeader">
            <div class="frontpageTitre">
                <h1><?php the_title() ?></h1>
                <h2>Votre identité sur le web</h2>
            </div>
            <div class="siteVitrineSvg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.67 329.3">
                    <g id="Calque_4" data-name="Calque 4">
                        <rect class="mainFill" x="101.69" y="78.63" width="5.16" height="28.52" rx="2.58" transform="translate(32.5 -44.17) rotate(21.46)" />
                        <rect class="mainFill" x="341.5" y="58.16" width="5.16" height="50.13" rx="2.58" transform="translate(538.73 -219) rotate(111.46)" />
                        <rect class="mainFill" x="80.92" y="135.72" width="5.16" height="20" rx="2.58" transform="translate(50.4 -32.91) rotate(21.46)" />
                        <polygon class="mainFill" points="14.98 329.3 14.97 329.3 14.98 329.3 14.98 329.3" />
                        <path class="mainFill" d="M216.29,91.68a4.26,4.26,0,1,1,5.52-2.41A4.25,4.25,0,0,1,216.29,91.68Zm51.06-16.2a5.81,5.81,0,1,1-7.53,3.28A5.81,5.81,0,0,1,267.35,75.48Zm12.24,37.36a2.58,2.58,0,0,1-3.35,1.46L234.4,97.84a2.58,2.58,0,0,1-1.46-3.34l.58-1.47a2.58,2.58,0,0,1,3.34-1.46L278.71,108a2.58,2.58,0,0,1,1.46,3.35Zm96.2-17.94L248.86,45l-75.29-29.6C134.06-.15,120.46,51.24,120.46,51.24L9.69,333.35l-1,2.52,15,5.89L123.22,88.64A2.72,2.72,0,0,1,127.06,87l235.16,92.46a2.73,2.73,0,0,1,1.69,3.9l-62.3,158.43h17.46l72.46-184.29C411,108,375.79,94.9,375.79,94.9Z" transform="translate(-8.72 -12.46)" />
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