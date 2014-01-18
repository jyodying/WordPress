<?php get_header(); ?>

<div class="grid_9 omega right-column">
    <!-- START HOME PAGE -->
    <div class="home">
        <!--<img src="images/text-home.jpg" alt="contenuto-home" />-->
            <?php
            $the_query = new WP_Query('pagename=home');
            while ($the_query->have_posts()) : $the_query->the_post();
            ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
    
            <!--<img src="images/arrow-home.png" alt="arrow" class="arrow" />-->    
        </div>    
        <div class="home-bottom-bg"></div>    
        <!-- END HOME PAGE -->    
    
        <!-- START ABOUT PAGE -->    
        <a id="about-page"></a>    
    
        <div class="about">        
        <?php
                $the_query = new WP_Query('pagename=about');
                while ($the_query->have_posts()) : $the_query->the_post();
        ?>        
                    <div class="grid_5 alpha">            
            
                        <div class="container-about">            
                            <h2>About</h2>            
                <?php the_content(); ?>
                </div>    
            </div>    
    
            <!-- START AVATAR -->    
            <div class="grid_4 omega avatar-image">    
            <?php if (get_post_meta($post->ID, 'my_profile_image', true)): ?>
                        <img src="<?php echo get_post_meta($post->ID, 'my_profile_image', true); ?>" alt="avatar" class="avatar" />
            <?php else: ?>
                            <img src="<?php bloginfo('template_url'); ?>/images/avatar.jpg" alt="avatar" class="avatar" />
            <?php endif; ?>
                        </div>                
            <!-- END AVATAR -->                
        <?php endwhile; ?>
                            <div class="clear"></div>                    
                        </div>                    
                        <div class="about-bottom-bg"></div>                    
                        <!-- END ABOUT PAGE -->                    
                    
                        <!-- START PORTFOLIO PAGE -->                    
                        <a id="portfolio-page"></a>                    
                    
                        <div class="portfolio">                    
                            <div class="grid_4 alpha">                    
                                <div class="container-portfolio">                    
                                    <h2>Portfolio</h2>                    
                                </div>                    
                            </div>                    
                    
                            <!-- START PORTFOLIO QUOTE -->                    
                            <div class="grid_4 omega">                    
                                <div class="portfolio-quote">                    
                                    <h4>I hope you like my work and my work speaks for me.</h4>                    
                                </div>                    
                            </div>                    
                            <!-- END PORTFOLIO QUOTE -->                    
                    
                            <div class="clear"></div>                    
                    
                            <div class="container-portfolio">                    
                    
            <?php
                            $image_counter = 0;
                            $the_query = new WP_Query('category=portfolio');
                            while ($the_query->have_posts()) : $the_query->the_post();
                                $project_name = get_post_meta($post->ID, "my_project_name", true);

                                $website_url = get_post_meta($post->ID, "my_web_url", true);
            ?>        
            <?php if (get_post_meta($post->ID, 'my_portfolio_image', true)): ?>
                                    <div class="photo">                        
                                        <a href="#project<?php echo $image_counter; ?>" title="<?php the_title(); ?>">								
                                            <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, 'my_portfolio_image', true) ?>&amp;h=85&amp;w=85&amp;zc=1" alt="<?php the_title(); ?>"/>
                                        </a>                        
                                    </div>                        
                                    <div id="project<?php echo $image_counter; ?>">
                                        <img src="<?php echo get_post_meta($post->ID, 'my_portfolio_image', true) ?>" alt="<?php the_title(); ?>" />
                                        <a href="<?php echo $website_url; ?>"><p class="foto_caption"><?php echo $project_name; ?></p></a>
                                    </div>                        
            <?php
                                    $image_counter++;
            ?>
            <?php endif; ?> 
            <?php endwhile; ?>
                        
                                </div>                        
                            </div>                        
                            <div class="portfolio-bottom-bg"></div>                        
                            <!-- END PORTFOLIO PAGE -->                        
                        
                            <!-- START CONTACT PAGE -->                        
                            <a id="contact-page"></a>                        
                        
                            <div class="contact">                        
        <?php
                                    $the_query = new WP_Query('pagename=contact');
                                    while ($the_query->have_posts()) : $the_query->the_post();
        ?>
                                        <div class="grid_5 alpha">                                
                                
                                            <div class="container-contact">                                
                                                <h2>Contact</h2>                                
                                                <div id="log"></div>                                
                                
                                                <form id="contacts" method="post" action="">                                
                                                    <fieldset>                                
                                                        <input tabindex="1" type="text" id="visitor" name="visitor" value="Name" onfocus="if (this.value=='Name') this.value='';" onblur="if (this.value=='') this.value='Name';" class="text name" />                                
                                                        <br />                                
                                
                                                        <input tabindex="3" type="text" id="visitormail" name="visitormail" value="E-mail" onfocus="if (this.value=='E-mail') this.value='';" onblur="if (this.value=='') this.value='E-mail';" class="text mail" />                                
                                                        <br />                                
                                
                                                        <textarea tabindex="4" id="notes" name="notes" cols="30" rows="3" onfocus="if (this.value=='Message') this.value='';" onblur="if (this.value=='') this.value='Message';" class="text message">Message</textarea>                                
                                                        <br />                                
                                
                                                        <input type="hidden" name="your_email" value="<?php echo get_option('admin_email'); ?>">
                                                        <input type="hidden" name="your_web_site_name" value="<?php echo get_bloginfo('name'); ?>">
                                
                                                        <input class="button" id="send_message" name="Send" value="Send e-mail" type="submit" />                                
                                
                                                    </fieldset>                                
                                                </form>                                
                                
                                            </div>                                
                                        </div>                                
                                
                                        <div class="grid_4 omega contact-info">                                
                                            <p class="title">Estimates, questions, information?</p>                                
                                
                                            <p>                                
<?php the_content(); ?>
                                            </p>                                
                <?php $name = get_post_meta($post->ID, "my_name", true); ?>
                <?php $address = get_post_meta($post->ID, "my_address", true); ?>
            <?php $phone_no = get_post_meta($post->ID, "my_phone_no", true); ?>
            <?php $fax_no = get_post_meta($post->ID, "my_fax_no", true); ?>
            <?php $contact_email = get_post_meta($post->ID, "my_contact_email", true); ?>
            <?php $logo = get_post_meta($post->ID, "my_logo", true); ?>
                      
            <?php if ($logo): ?>    
                                            <img src="<?php echo $logo; ?>"  class="contact-logo" />
            <?php endif; ?>
                                
                                
                                                 <h3><?php echo $name; ?></h3>
                                
                                                 <address><?php echo $address; ?></address>
                                
                                                 <p class="right">                                
<?php if ($phone_no): ?>    
                                                     <span>Tel.</span><?php echo $phone_no; ?><br/>
                 <?php endif; ?>
<?php if ($fax_no): ?>         
                                               <span>Fax.</span> <?php echo $fax_no; ?><br/>
                 <?php endif; ?> 
<?php if ($contact_email): ?>    
                                                   <span>E-Mail.</span> <?php echo $contact_email; ?>
            <?php endif; ?> 
                                                        </p>                                            
                                                    </div>                                            
<?php endwhile; ?>
                                                    <div class="clear"></div>                                            
                                                </div>                                            
                                            
                                                <div class="contact-bottom-bg"></div>                                            
                                                <!-- END CONTACT PAGE -->                                            
                                            </div>                                                   
                                            
<?php get_footer(); ?>