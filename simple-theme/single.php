<?php
get_header();
the_post();
?>
<main class="content">
    <article class="single">
        <header><h1><?php the_title();?></h1></header>
        <footer><span class="category">Category: <?php the_category(',');?></span> <span class="pubdate">Date:<time datetime="<?php the_time('d-m-Y')?>" pubdate="pubdate"><?php the_time('d-m-Y')?></time></span></footer>
        <div class="entry-content">
            <?php the_content();?> 
        </div>
    </article>
</main>
<?php get_sidebar();get_footer();?>
