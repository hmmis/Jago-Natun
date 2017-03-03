<link href="<?php echo base_url();?>assets/css/star.css" type="text/css" rel="stylesheet" media="all">

<style type="text/css">
	body { padding-top:30px; }
	.widget .panel-body { padding:0px; }
	.widget .list-group { margin-bottom: 0; }
	.widget .panel-title { display:inline }
	.widget .label-info { float: right; }
	.widget li.list-group-item {border-radius: 0;border: 0;border-top: 1px solid #ddd;}
	.widget li.list-group-item:hover { background-color: rgba(86,61,124,.1); }
	.widget .mic-info { color: #666666;font-size: 11px; }
	.widget .action { margin-top:5px; }
	.widget .comment-text { font-size: 12px; }
	.widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }
</style>

<!-- about -->


<div class="container"> 
	<div class="agileits-title"> 

		<div class="clearfix"> </div>
	</div>
	<div class="well">
		<div class="row well">

			<div class="col-sm-4">
				<img src="<?php echo base_url();?>assets/images/2.jpg" class="img-thumbnail">
			</div>

			<?php foreach ($old_post as $o): ?>

				<div class="col-sm-8">
					<h1><?php echo $o['jano_janao_title'] ?></h1>
					<p><?php echo $o['jano_jano_description'] ?></p>

					<hr> 
					Posted Time : <?php echo $o['created_at'] ?>
					;By <?php echo $o['created_by'] ?>
					

					<?php

					if ($this->session->userdata('post_rated_'.$o['jano_janao_id'])) {
						echo "<br>".$this->session->userdata('post_rated_'.$o['jano_janao_id']);

					}else{

						?>



						<form action="<?php echo base_url()?>read_details/rate_post" method="POST"  class="form-inline">
							<div class="stars">
								<input value="1" type="radio" name="post_rate" class="star-1" id="star-1" />
								<label class="star-1" for="star-1">1</label>
								<input  value="2" type="radio" name="post_rate" class="star-2" id="star-2" />
								<label class="star-2" for="star-2">2</label>
								<input  value="3" type="radio" name="post_rate" class="star-3" id="star-3" />
								<label class="star-3" for="star-3">3</label>
								<input  value="4" type="radio" name="post_rate" class="star-4" id="star-4" />
								<label class="star-4" for="star-4">4</label>
								<input  value="5" type="radio" name="post_rate" class="star-5" id="star-5" />
								<label class="star-5" for="star-5">5</label>
								<span></span>

							</div>
							<input type="hidden" name="post_id" value="<?php echo $o['jano_janao_id'] ?>">
							<input type="submit" name="submit" value="Rate">
						</form>

						<?php  }  ?>


					</div>


					
				<?php endforeach ?>
				

			</div>

			<!--  Comment Starts -->



			
			<div>
				<h4>Comment</h4>
				<form action="<?php echo base_url()?>read_details/comment_on_post" method="POST"  class="form-inline">
					<input type="text" name="comment_by" class="form-control"><br><br>

					<textarea class="form-control" name="comment_details" cols="100%"></textarea><br><br>

					<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
					<input type="submit" name="submit" class="btn btn-default" value="Comment">
				</form>


			</div><br>

			<!--  Comment Ends -->


			<!-- Special  Comment Starts -->
			
			<div class="row">
				<div class="col-sm-1">
					<div class="thumbnail">
						<img class="img-responsive user-photo" src="<?php echo base_url()?>assets/images/que.jpg">
					</div><!-- /thumbnail -->
				</div><!-- /col-sm-1 -->

				<div class="col-sm-5">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
						</div>
						<div class="panel-body">
							Panel content
						</div><!-- /panel-body -->
					</div><!-- /panel panel-default -->
				</div><!-- /col-sm-5 -->

				<div class="col-sm-1">
					<div class="thumbnail">
						<img class="img-responsive user-photo" src="<?php echo base_url()?>assets/images/ans.jpg">
					</div><!-- /thumbnail -->
				</div><!-- /col-sm-1 -->

				<div class="col-sm-5">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
						</div>
						<div class="panel-body">
							Panel content
						</div><!-- /panel-body -->
					</div><!-- /panel panel-default -->
				</div><!-- /col-sm-5 -->

			</div>

			<!-- Special  Comment Ends -->

			<!-- User  Comment Starts -->

			<div class="panel panel-default widget">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-comment"></span>
					<h3 class="panel-title">
						Recent Comments</h3>
						<span class="label label-info">
							<?php echo count($old_comment) ?></span>
						</div>
						<?php foreach ($old_comment as $oc): ?>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item">
										<div class="row">
											<div class="col-xs-2 col-md-1">
												<img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
												<div class="col-xs-10 col-md-11">
													<div>
														<?php echo $oc['jano_janao_comment'] ?>
														<div class="mic-info">
															By <?php echo $oc['comment_by'] ?> at <?php echo $oc['comment_at'] ?>
														</div>
													</div>
												</div>
											</div></li>
											




										</ul>
									</div><?php endforeach ?>
								</div>


							</div>



						</div>
					</div>

					<!-- //about --> 