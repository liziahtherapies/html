<?php
/**
*WP Post Template: EM Landing Page
*/
get_header();
?>
<script>$(document).ready(function() {  
var count = 0;  var checked = 0;  
function countBoxes() {    
 count = $(".accordion input[type='checkbox']").length; 
 console.log(count); 
 }    
 countBoxes(); 
 $(".accordion :checkbox").click(countBoxes);      
 function countChecked() {    checked = $(".accordion input:checked").length;
 var percentage = parseInt(((checked / count) * 100),10);    
 $(".progressbar-bar").progressbar({            value: percentage });  
 $(".progressbar-label").text(percentage + "%");  
 }    
 countChecked();  
 $(".accordion :checkbox").click(countChecked);
 
 $(".accordion :checkbox").click(function(){
 var itemc= $(this).val();
 var itemval;
 if(!$(this).is(':checked')){
itemval='False';
 }else{
itemval='True';
 }
$.ajax({
		url: "<?php echo get_stylesheet_directory_uri();?>/ajax.php",
		data: {
			'itemID':itemc,
			'itemVal' : itemval
		},
		success:function(data) {
			// This outputs the result of the ajax request
		  	console.log(data);
		},
		error: function(errorThrown){
		    console.log(errorThrown);
		}
	});
 });
 });
 
 // ******************* Action item progress bar **************************** 
 $(document).ready(function() {
  var count1 = 0;
  var checked1 = 0;
  function countBoxes1() { 
    count1 = $("#actionItem input[type='checkbox']").length;
    console.log(count1);
  } 
  countBoxes1();
  $("#actionItem :checkbox").click(countBoxes1);
  
  // count checks
  
  function countChecked1() {
    checked1 = $("#actionItem input:checked").length;
    
    var percentage1 = parseInt(((checked1 / count1) * 100),10);
    $(".progressbar-bar1").progressbar({
            value: percentage1
        });
    $(".progressbar-label1").text(percentage1 + "%");
  }
  countChecked1();
  $("#actionItem :checkbox").click(countChecked1);
});
 </script>
<div id="main-content">
<div class="container">
<div id="content-area" class="clearfix">
<div id="left-area">
<div class="" style="padding-top:3%;"><div>
<span class="progressbar-label"><b>Content Progress</b>- &nbsp;&nbsp;&nbsp;0.0% </span>&nbsp;Complete</div>
<div class="progressbar-container intense progress">  
<div class="progressbar-bar"></div>  
</div>
</div>
<div class="accordion">
<?php
$user_ID = get_current_user_id();
$em = new WP_Query(array('post_type'=>'em_content', 'taxonomy'=>'category', 'term' => 'EM-1','order' => 'ASC')); 
while ( $em -> have_posts() ) : $em -> the_post();
$postID=$em->post->ID;
$metakey=$postID.'_item';
$itemVAL=get_user_meta($user_ID,$metakey, true);
?>
<div class="accordion-section">
<div class="accordion-section<?php the_ID(); ?> accordion-section-color"><form><input id="checkbox<?php the_ID(); ?>" class="css-checkbox lrg" name="box<?php the_ID(); ?>" type="checkbox" value="<?php the_ID(); ?>" <?php if($itemVAL=="True"){ echo 'checked'; }else{ echo ''; } ?>/><label class="css-label lrg klaus" for="checkbox<?php the_ID(); ?>"></label></form>
<h1><a class="accordion-section-title accordion-section-title1" href="#accordion-<?php echo the_ID(); ?>"><?php echo the_title();?></a></h1>
</div>
<div id="accordion-<?php the_ID(); ?>" class="accordion-section-content"><?php echo the_content();?></div>
</div>
<?php endwhile; ?>
</div>
</div> <!-- #left-area -->
<div id="right-area">
</div>
</div> <!-- #content-area -->
</div> <!-- .container -->
</div> <!-- #main-content -->
<?php get_footer();?>
