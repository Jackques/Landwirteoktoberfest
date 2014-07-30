<!DOCTYPE html>
<html>
<?php
//echo"<pre>";
//print_r($this);
//echo"</pre>";
?>

<?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
$frontpage = false;
if ($menu->getActive() == $menu->getDefault()) {
        //echo 'This is the front page';
		$frontpage = true;
}
?>

	<?php
	include_once "template/header.php";
	?>
<body id="<?= ($frontpage == true ? "page1" : "page2"); ?>">

<!--page1">-->
<div class="body-bg wrap">
   <header>
      <div class="container">
			<?php
			include_once "template/logo.php";
			?>
			<?php
			include_once "template/hoofdmenu.php";
			?>
      </div>
   </header>
   
   <section id="content">
      <div class="container">
         <div class="inside">
		 <?php if($frontpage == true){
            echo'<div class="indent">';
			};
			?>
			
               <h2><?= $this->title; ?></h2>
               <ul class="box-list">
				<jdoc:include type="component" />
				<jdoc:include type="modules" name="content"   />
               </ul>
			   
            <?php if($frontpage == true){
			echo"</div>";
			};
			?>
         </div>
      </div>
   </section>
</div>
<!-- footer -->

	<?php
	include_once "template/footer.php";
	?>
</body>
</html>