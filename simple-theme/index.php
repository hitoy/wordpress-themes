<?php get_header();?>
<main class="content">
    <h2 class="list-title">Artile List</h2>
<?php
if(have_posts()){
    while(have_posts()){
        the_post();
        get_template_part('content','list');
    }
    }else{
        get_template_part('content','none');
    }
?>
    <div class="pagination">
            <?php the_posts_pagination(array(
                'screen_reader_text' => ' ',
                'mid_size' => 4,
                'prev_next'=> true,
                'prev_text'=> '&lt;&lt;',
                'next_text'=> '&gt;&gt;',
            ));?>
    </div>
</main>
<?php get_sidebar();get_footer();?>
