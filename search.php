<?php
get_header(); ?>

<?php if ( have_posts() ) : ?>
<header class="result-content-header">
    <h2 >検索結果：<?php echo esc_html( get_search_query()) ?> </h1>
</header><!-- .page-header -->

<section class="is-posts-container" >
            <?php
            while ( have_posts() ) : 
                the_post();
                get_template_part( 'content', 'page' );
            endwhile;
        ?>
    </section>
<?php endif;
        ?>
<?php get_footer(); ?>
    


























