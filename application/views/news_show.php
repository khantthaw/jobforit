<a href="<?php echo site_url('news/showbyId/1'); ?>">News 1</a>
  <ul>

<?php 
if(isset($position)){
foreach($position as $pos){ ?>

	<a href="<?php echo site_url('news/showbyId/'.$pos['id']); ?>"><li><?php echo $pos['id']; ?>&nbsp;&nbsp;&nbsp;<?php echo $pos['pos_name']; ?></li></a>

<?php } 
	}
?>	


<a href="<?php echo site_url('news/showPosWithEdu'); ?>">Get Edu</a>

<?php 
 if(isset($posbyedu)){
 foreach($posbyedu as $edu){ ?>
  <li><?php echo $edu['pos_name'].",",$edu['edu_name']; ?></li>	


<?php }
	}
 ?>