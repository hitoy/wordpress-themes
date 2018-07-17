<aside class="right sidebar">
    <section class="widget">
        <h3>Related Topic</h3>
        <ul>
<?php 
if(!is_single()){
    $p = new WP_Query('posts_per_page=5');
    while($p->have_posts()){
        $p->the_post();
        echo "<li><a href=\"".get_the_permalink()."\">".get_the_title()."</a></li>";
        wp_reset_postdata();
    }
}else{
    the_tags('<li>','</li><li>','</li>');
}
?>
        </ul>
    </section>
</aside>
