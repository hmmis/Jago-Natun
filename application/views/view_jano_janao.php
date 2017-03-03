	<!-- about -->

		<div class="container"> 
			<div class="agileits-title"> 
				<div class="col-md-6 agileits-title-left">
					<h3>জানো ও জানাও</h3>
				</div>
				<div class="col-md-6 agileits-title-right">
					<p>aaaaaaaaaaaaaaaa</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="well">

				<?php foreach ($old_post as $o): ?>
					
				
				<div class="row well">

					<div class="col-sm-4">
						<img src="<?php echo base_url();?>assets/images/2.jpg" class="img-thumbnail">
					</div>
					<div class="col-sm-8">
						<h1><a href="<?php echo base_url()."read_details/post/".$o['jano_janao_id'] ?>"><?php echo $o['jano_janao_title'] ?></a></h1>
						<p>
						<?php $sub_desc = substr($o['jano_jano_description'], 0, 9); ?>
						<?php echo  $sub_desc?></p>
						<a href="<?php echo base_url()."read_details/post/".$o['jano_janao_id'] ?>" class="btn btn-info glyphicon glyphicon-hand-up"></a>
						

						<hr>
						Posted Time: <?php echo $o['created_at'] ?> 
					</div>

				</div>

				<?php endforeach ?>

			
				
			</div>
		</div>

	<!-- //about --> 