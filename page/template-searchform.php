<?php
/*
Template Name: 搜索页面
*/
?>

<?php get_header(); ?>
<div id="primary" class="content-area">
    <div class="page">
        <header class="entry-header">
            <h1 class="entry-title">可以使用下面的搜索功能，查找您喜欢的文章！</h1>
        </header>
        <div class="single-content">
            <p style="width:700px"><?php get_search_form(); ?></p>
        </div>
    </div>
    <?php get_template_part( 'inc/related-img' ); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
