<?php
get_header();
?>

<div class="themeFP">
    <?php
        if(have_posts()):
            while(have_posts()):
                the_post();
    ?>
        <article class="theme-article">
            <p class="myName"><?php bloginfo('name'); ?></p>
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('thumbnail'); ?>
            <div>
                <?php the_content(); ?>
            </div>
        </article>

    <?php
        endwhile;
    else:
        echo 'Aucun contenu';
    endif;
    ?>
</div>

<aside class="categorie">
    <h2>CATEGORIES</h2>
    <?php 
        dynamic_sidebar('main-sidebar');
    ?>
</aside>

<?php
get_footer();
