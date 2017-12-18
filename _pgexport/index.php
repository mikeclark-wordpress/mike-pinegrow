<?php
get_header(); ?>

<div class="content-block blog-1">
    <div class="container text-center">
        <div class="underlined-title">
            <h1><?php echo get_theme_mod( 'blocks_blog_1_title', __( 'Our Blog', 'pinegrow' ) ); ?></h1>
            <hr>
            <h2><?php echo get_theme_mod( 'blocks_blog_1_subtitle', __( 'The latest news & posts', 'pinegrow' ) ); ?></h2>
        </div>
        <?php if ( have_posts() ) : ?>
            <div class="col-sm-10 col-sm-offset-1">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="post">
                        <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                        <?php the_post_thumbnail( 'large', array(
                                'class' => 'img-responsive'
                        ) ); ?>
                        <?php the_excerpt( ); ?>
                        <div class="">
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-lg btn-primary"><?php _e( 'Read More', 'pinegrow' ); ?></a>
                            <p class="small text-muted text-uppercase"><?php _e( 'POSTED BY', 'pinegrow' ); ?> <?php the_author_link(); ?> <?php _e( 'IN', 'pinegrow' ); ?> <?php blocks_the_category() ?> <?php _e( 'ON', 'pinegrow' ); ?> <?php the_date(); ?></p>
                        </div>
                    </div>
                    <hr>
                <?php endwhile; ?>
                <?php wp_bootstrap_pagination( array(
                        'previous_string' => '<span class="fa fa-angle-double-left"></span>',
                        'next_string' => '<span class="fa fa-angle-double-right"></span>'
                ) ); ?>
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'pinegrow' ); ?></p>
        <?php endif; ?>
        <!-- /.col-sm-10 -->
    </div>
    <!-- /.container -->
</div>
<?php $image_attributes = wp_get_attachment_image_src( 'wp-attachment-bck', 'large' ); ?>
<section class="content-block min-height-600px bg-white" id="content-1-1" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"> 
    <div class="my-image"></div>                 
    <div class="container text-center"> 
        <div class="col-sm-8"> 
            <h1><?php echo get_theme_mod( 'blocks_content_1_1_title', __( 'Freedom to express your creativity', 'pinegrow' ) ); ?></h1> 
            <div class="col-sm-8 col-sm-offset-2"> 
                <p class="lead"><?php echo get_theme_mod( 'blocks_content_1_1_text', __( 'We don\'t want to overload you with hundreds of styles you don\'t want, or need. We give you a strong base to express your own creativity.', 'pinegrow' ) ); ?></p> 
            </div>                         
        </div>                     
        <div class="col-sm-4"> 
            <div> 
                <div class="underlined-title"> 
                    <h1><?php _e( 'Get in Touch', 'pinegrow' ); ?></h1> 
                    <hr /> 
                    <h2><?php _e( 'Feel free to drop us a line to contact us', 'pinegrow' ); ?></h2> 
                </div>                             
                <div class="row"> 
                    <div class="col-sm-12 col-xs-12 pad25"> 
                        <div class="col-xs-2"> 
                            <span class="fa fa-pencil"></span> 
                        </div>                                     
                        <div class="col-xs-10"> 
                            <h4><?php _e( 'Branding', 'pinegrow' ); ?></h4> 
                            <p><?php _e( 'Retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'pinegrow' ); ?></p> 
                        </div>                                     
                    </div>                                 
                    <div class="col-sm-12 col-xs-12 pad25"> 
                        <div class="col-xs-2"> 
                            <span class="fa fa-code"></span> 
                        </div>                                     
                        <div class="col-xs-10"> 
                            <h4><?php _e( 'Web Design', 'pinegrow' ); ?></h4> 
                            <p><?php _e( 'Retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'pinegrow' ); ?></p> 
                        </div>                                     
                    </div>                                 
                    <div class="col-sm-12 col-xs-12 pad25"> 
                        <div class="col-xs-2"> 
                            <span class="fa fa-comments-o"></span> 
                        </div>                                     
                        <div class="col-xs-10"> 
                            <h4><?php _e( 'Social Marketing', 'pinegrow' ); ?></h4> 
                            <p><?php _e( 'Retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'pinegrow' ); ?></p> 
                        </div>                                     
                    </div>                                 
                    <div class="col-md-4 col-sm-12 col-xs-12 pad25"> 
                        <div class="col-xs-2"> 
                            <span class="fa fa-search"></span> 
                        </div>                                     
                        <div class="col-xs-10"> 
                            <h4><?php _e( 'SEO', 'pinegrow' ); ?></h4> 
                            <p><?php _e( 'Retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'pinegrow' ); ?></p> 
                        </div>                                     
                    </div>                                 
                    <div class="col-md-4 col-sm-12 col-xs-12 pad25"> 
                        <div class="col-xs-2"> 
                            <span class="fa fa-mobile"></span> 
                        </div>                                     
                        <div class="col-xs-10"> 
                            <h4><?php _e( 'Mobile Apps', 'pinegrow' ); ?></h4> 
                            <p><?php _e( 'Retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'pinegrow' ); ?></p> 
                        </div>                                     
                    </div>                                 
                    <div class="col-md-4 col-sm-12 col-xs-12 pad25"> 
                        <div class="col-xs-2"> 
                            <span class="fa fa-bookmark"></span> 
                        </div>                                     
                        <div class="col-xs-10"> 
                            <h4><?php _e( 'Corporate Literture', 'pinegrow' ); ?></h4> 
                            <p><?php _e( 'Retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'pinegrow' ); ?></p> 
                        </div>                                     
                    </div>                                 
                </div>                             
                <!--/.row-->                             
            </div>                         
        </div>                     
    </div>                 
</section>
<section id="promo-3" class="content-block promo-3 min-height-600px bg-deepocean"> 
    <div class="container text-center"> 
        <h1><?php _e( 'Rocket Fuel for Web Designers', 'pinegrow' ); ?></h1> 
        <h2><?php _e( 'Pinegrow Blocks', 'pinegrow' ); ?></h2> 
        <a href="#" class="btn btn-outline btn-outline-xl outline-light"><?php _e( 'Made with', 'pinegrow' ); ?> <span class="fa fa-heart pomegranate"></span> <?php _e( 'on Planet Earth', 'pinegrow' ); ?></a> 
    </div>                 
    <!-- /.container -->                 
</section>            

<?php get_footer(); ?>