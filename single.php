<!-- Get header -->
<?php get_header(); ?>

<article class="page-content single-page">
    <!-- header -->
    <header class="content-header">
        <h2 class="single-title"><?php single_post_title(); ?></h1>
    </header>
        <div class="posted">
                        <?php 
                        // Get post date
                        $archive_year  = get_the_time( 'Y' ); 
                        $archive_month = get_the_time( 'm' ); 
                        $archive_day   = get_the_time( 'd' ); 
                        ?>
                        <a class="date-color" href="<?= get_day_link( $archive_year, $archive_month, $archive_day ); ?>"><?php the_time("Y/m/d") ?></a>
                        <?php the_category(",") ?>
        </div>
    
        <!-- posts -->
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
            <section class="page">
            <?php the_content() ?>
            </section>
        <?php endwhile;?>
</article>

<?php get_footer(); ?>