
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
	<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
</div>

<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li class="active">Dashboard</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="ace-icon fa fa-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- /.nav-search -->
		</div>

		<div class="page-content">
			<div class="ace-settings-container" id="ace-settings-container">
				<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
					<i class="ace-icon fa fa-cog bigger-130"></i>
				</div>

				<div class="ace-settings-box clearfix" id="ace-settings-box">
					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="no-skin" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div><!-- /.pull-left -->

					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
							<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
							<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
							<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
						</div>
					</div><!-- /.pull-left -->
				</div><!-- /.ace-settings-box -->
			</div><!-- /.ace-settings-container -->

			<div class="page-header">
				<h1>
					Jano Jano Post

				</h1>
			</div><!-- /.page-header -->


			<!--  /wedget box -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-1">
					<div class="widget-box" id="widget-box-1">
						<div class="widget-header">
							<h5 class="widget-title">JAGO NATUN</h5>

							<div class="widget-toolbar">


								<a href="#" data-action="fullscreen" class="orange2">
									<i class="ace-icon fa fa-expand"></i>
								</a>

								<a href="#" data-action="reload">
									<i class="ace-icon fa fa-refresh"></i>
								</a>

								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>

								<a href="#" data-action="close">
									<i class="ace-icon fa fa-times"></i>
								</a>
							</div>
						</div>

						<div class="widget-body">
							<div class="widget-main">
								<form method="POST" action="<?php echo base_url()?>/admin/submit_janao_natun_post" class="form-inline">


								Select Category
								<select class="form-control" name="cat_id">
								<?php foreach ($category_type as $c): ?>

									<option value="<?php echo $c['topic_category_id'] ?>"><?php echo $c['category_name'] ?></option>
									
								<?php endforeach ?>
									
								</select> </br></br>

								Post Title:
								<input type="text" name="title" class="form-control"></br></br>

								Post Description
								<textarea cols="100%" name="description" class="form-control"></textarea><br></br>

								<input type="submit" name="submit" value="Post" class="">
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.col -->



			<!--  /wedget box -->



			<!--  /wedget box -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-1">
					<div class="widget-box" id="widget-box-1">
						<div class="widget-header">
							<h5 class="widget-title">JAGO NATUN</h5>

							<div class="widget-toolbar">


								<a href="#" data-action="fullscreen" class="orange2">
									<i class="ace-icon fa fa-expand"></i>
								</a>

								<a href="#" data-action="reload">
									<i class="ace-icon fa fa-refresh"></i>
								</a>

								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>

								<a href="#" data-action="close">
									<i class="ace-icon fa fa-times"></i>
								</a>
							</div>
						</div>

						<div class="widget-body">
							<div class="widget-main">
								<table class="table">
									<tr>
										<td>Category Name</td>
										<td>Title</td>
										<td>Edit</td>
										<td>Delete</td>
									</tr>

									<?php foreach ($old_post as $o): ?>
										<tr>
											<td><?php echo $o['category_name'] ?></td>
											<td><?php echo $o['jano_janao_title'] ?></td>
											<td><a href="<?php echo base_url()?>admin/edit_jano_janao/<?php echo $o['jano_janao_id'] ?>">Edit</a></td>

											<td><a href="<?php echo base_url()?>admin/delete_jano_janao/<?php echo $o['jano_janao_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
										</tr>
									<?php endforeach ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.col -->



			<!--  /wedget box -->
		</div><!-- /.row -->

		<div class="hr hr32 hr-dotted"></div>

	</div>
</div><!-- /.main-content -->

