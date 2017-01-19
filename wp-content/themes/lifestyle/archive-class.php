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

<table id="hor-minimalist-a" >
<thead>
	  <tr>
	    <th>Day</th>
	    <th>Time</th>
	    <th>Class</th>
	    <th>Location</th>
	 </tr>
</thead>

<tbody>
<?php while ( have_posts() ) : the_post(); ?>
  <tr>
    <td><?php echo genesis_get_custom_field('class_day'); ?></td>
    <td><?php echo genesis_get_custom_field('class_time'); ?></td>
    <td><a href="<?php echo post_permalink(); ?> "> <?php echo genesis_get_custom_field('class_description'); ?></a></td>
    <td><a href="<?php echo genesis_get_custom_field('class_link'); ?> "> <?php echo genesis_get_custom_field('class_location'); ?></a></td>    
  </tr>
  
<?php endwhile;?>
</tbody>
</table>
<br/>
<p>Click on Class Location for Studio Web Site.</p>
<?php
}



genesis();
