<?php
/*
Class Custom Post Type Template
 */
 
//Remove Post Information
remove_action('genesis_before_post_content', 'genesis_post_info');
//Remove Tags/Categories and Post Meta
remove_action('genesis_after_post_content', 'genesis_post_meta');
remove_action( 'genesis_loop', 'genesis_do_loop' );

remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_after_header', 'classes_nav' );
function classes_nav(){?>
<div id="subnav">
<div class="wrap">
<ul id="menu-main-secondary" class="menu menu-secondary">
<li><a href="http://liziahtherapies.com/">Home</a></li>
<li><a href="http://liziahtherapies.com/liziah-yoga">Liziah Yoga</a></li>
<li><a href="http://liziahtherapies.com/classes">Class Schedule</a></li>
<li><a href="http://liziahtherapies.com/private-instruction">Private Instruction</a></li>
<li><a href="http://liziahtherapies.com/kids-and-family-yoga">Kids and Family Yoga</a></li>
<li><a href="http://liziahtherapies.com/workshops-and-retreats">Workshops, Trainings, and Retreats</a></li>
<li><a href="http://liziahtherapies.com/videos">Videos</a></li>
</ul>
</div>
</div>
<?php
}

add_action( 'genesis_loop', 'liz_class' );

function liz_class() {
     ?>
<h1><?php echo genesis_post_title($ID); ?></h1>


    <p>Day: <?php echo genesis_get_custom_field('class_day'); ?></p>
    <p>Time: <?php echo genesis_get_custom_field('class_time'); ?></p>
    <p>Description: <?php echo genesis_get_custom_field('class_description'); ?></p>
    <p>Location: <?php echo genesis_get_custom_field('class_location'); ?></p>
    <p>Details: <?php echo genesis_get_custom_field('class_details'); ?></p>
    <p>Notes: <?php echo genesis_get_custom_field('class_notes'); ?></p>
    
<?php
}

genesis();
