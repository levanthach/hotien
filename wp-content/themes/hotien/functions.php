<?php 

	function register_my_menu() {
	    register_nav_menu('header-menu',__( 'Menu chính' ));
	}
	add_action( 'init', 'register_my_menu' );

require_once trailingslashit( get_template_directory() ) . 'inc/init.php';

/**
 * Classic Editor.
 */
add_filter('use_block_editor_for_post', '__return_false');


add_theme_support( 'post-thumbnails' ); 

function custom_excerpt_length( $length ) {
	return 22;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Xem thêm...', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


if (function_exists('register_sidebar')){
    register_sidebar(array(
    'name'=> 'Right_sidebar',
    'id' => 'sidebar',
    'description' => 'Right_sidebar được hiển thị ở chi tiết bài viết',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
    ));
}

/*insert to functions.php*/
function devvn_comment($comment, $args, $depth)    {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class();?> id="li-comment-<?=get_comment_ID();?>">    
        <div id="comment-<?=get_comment_ID();?>" class="clearfix">
             <div class="comment-author vcard">
                <?php echo get_avatar($comment, $size='70', ''); ?>  
             </div><!-- end comment autho vcard-->
        
             <div class="commentBody">
                 <div class="comment-meta commentmetadata">
                  <?php printf(__('<p class="fn">%s</p>'), get_comment_author_link()); ?>                 
                 </div><!--end .comment-meta-->
                <?php if($comment->comment_approved == '0') : ?>
                    <em><?php echo 'Your coment is waiting for moderation.';?></em>
                    <?php endif; ?>
                <div class="noidungcomment">
                    <?php comment_text(); ?>
                </div>
                <div class="tools_comment">                 
                    <?php comment_reply_link(array_merge($args,array('respond_id' => 'formcmmaxweb','depth' => $depth, 'max_depth'=> $args['max_depth'])));?>                   
                    <?php edit_comment_link(__('Sửa'),' ',''); ?>
                    <?php printf(__('<a href="#comment-%d" class="ngaythang">%s</a>'),get_comment_ID(),get_comment_date('d/m/Y'));?>
                </div>
                    
            </div><!--end #commentBody-->
        </div><!--end #comment-author-vcard-->
    </li>
<?php }
//validate comments
function comment_validation_init() {
    if(is_singular() && comments_open() ) { ?>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#commentform').validate({         
            onfocusout: function(element) {
              this.element(element);
            },
            rules: {
              author: {
                required: true,
                minlength: 2
              },
              email: {
                required: true,
                email: true
              },
              comment: {
                required: true,
              }
            },
            messages: {
              author: "Ô họ và tên là bắt buộc.",
              email: "Ô Email là bắt buộc.",
              comment: "Ô bình luận là bắt buộc."
            },
            errorElement: "div",
            errorPlacement: function(error, element) {
              element.after(error);
            }
        });
    });
    </script>
    <?php
    }
}
add_action('wp_footer', 'comment_validation_init');
 ?>