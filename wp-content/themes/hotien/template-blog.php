<?php 
/*
Template name: blog
Template Post Type: post, page
*/
?>

<?php 
	get_header();
 ?>
<?php get_template_part('menu-page'); ?>
 <section id="blog-page">
        <div class="container-fluid">
            <div class="col-xs-12 col-md-6">
                <div class="section-title" style="padding: 0">
                    <h2 style="    margin-top: 6px;padding: 0;">Bầu Đá Hồ Tiên</h2>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <!-- <div class="selection__button">XEM THÊM</div> -->
               <p class="blog-page-breakcum">Trang chủ > Tin tức</p>
            </div>
        </div>

    </section>


    <section id="news-blog">
        <div class="container-fluid">
            <?php 
            $args = array(
                'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                'showposts' => 10, // số lượng bài viết
                'cat' => 2, // lấy bài viết trong chuyên mục có id là 1
            );
        ?>
        <?php $getposts = new WP_query($args); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="new-blog">
                <div class="row">
                    <div class="blog__img col-xs-12 col-md-12 mb-5 p-3">
                        <img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"></img>
                    </div>
                    <div class="content-blog col-xs-12 col-md-12 p-1">
                        <div class="blog__date p-1"><?php echo get_the_date('d-m-Y'); ?> ~ By <?php the_author(); ?></div>
                        <h3 class="blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="blog__text p-1 "><?php the_excerpt(); ?></div>
                    </div>
                </div>
            </a>

        <?php endwhile; wp_reset_postdata(); ?>
           
           
        </div>
        <br><br>
    </section>


<?php
	get_footer();
 ?>
