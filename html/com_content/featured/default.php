<?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
$frontpage = false;
if ($menu->getActive() == $menu->getDefault()) {
        //echo 'This is the front page';
		$frontpage = true;
}

$aContentItems = $this->items;
$i = 0;
$iLengthContentItems = count($aContentItems);

foreach($aContentItems as $oContentItem){
?>

<li>
	<div class="box">
		<div class="left-top-corner">
			<div class="right-top-corner">
				<div class="border-top"></div>
			</div>
		</div>
		<div class="xcontent">
			<div class="border-left">
				<div class="border-right">
					<div class="inner">
						<div class="img-box">
						
						<?php
						$image = json_decode($oContentItem->images);
						?>
						
									
										<?php 
										if(isset($image->image_intro) && !empty($image->image_intro)){
											
											if($frontpage === true){
												echo "<img src=".$image->image_intro." alt=".$image->image_intro_alt.">";
											}else{
												echo "<img src=".'../'.$image->image_intro." alt=".$image->image_intro_alt.">";
											}
											
											
											
										}elseif(isset($image->image_fulltext) && !empty($image->image_fulltext)){
											echo "<img src=".$image->image_fulltext." alt=".$image->image_fulltext_alt.">";
											
											if($frontpage === true){
												echo "<img src=".$image->image_fulltext." alt=".$image->image_fulltext_alt.">";
											}else{
												echo "<img src=".'../'.$image->image_fulltext." alt=".$image->image_fulltext_alt.">";
											}
											
										}
										?>
								<?php
								$titel_bericht = $oContentItem->title;

								if($titel_bericht === "Informatie" || $titel_bericht === "informatie" || $titel_bericht === "Tickets" || $titel_bericht === "tickets" || $titel_bericht === "Route" || $titel_bericht === "route"){
									echo"<h5>";
									echo "";
									echo"</h5>";
								}else{
									echo"<h5>";
									echo $oContentItem->title;
									echo"</h5>";
								}
								?>

									<p class="p0"><?= $oContentItem->text; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="left-bot-corner">
			<div class="right-bot-corner">
				<div class="border-bot">
				
				<?php 
				if($i === $iLengthContentItems - 1){
				
				}else{
					echo"<span class='clip-left'></span><span class='clip-right'></span>";
				}
				
				?>
				
				</div>
			</div>
		</div>
	</div>
</li>

<?php
$i++;
}

?>