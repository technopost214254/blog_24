
 <div class="col-md-12">
 	<div class="card">
 		<?php if($msg = $this->session->flashdata('msg')){
                echo "<h3>".$msg."</h3>";
              } ?>
 		<div class="card-header">
 			<h5 class="title"><?php if(!empty($blog_edit)) {echo 'Edit';}else{ echo 'Add';}  ?> Post</h5>
 		</div>
 		<div class="card-body">
 			<?php if(!empty($blog_edit)) {  ?>
 			<form action="<?php echo base_url(); ?>Apps/edit_post_action/<?php echo $blog_edit[0]->Sr_no; ?>"
 				method="post" enctype="multipart/form-data">
 				<?php }else{ ?>
 				<form action="<?php echo base_url(); ?>Apps/Add_post_action" method="post"
 					enctype="multipart/form-data">
 					<?php } ?>
 					<div class="row">
 						<div class="col-md-12 pr-1">
 							<div class="form-group">
 								<label>Type</label>
 								<select name="type" class="form-control">
 									<option>---Select Type---</option>
									 <?php
									 
									 foreach($type as $row_type){ ?>
 									<option
 										<?php if(!empty($blog_edit[0]->type) == $row_type->id){ echo 'selected'; } ?>
 										value="<?php echo $row_type->id; ?>"><?php echo $row_type->name; ?></option>
 									<?php } ?>
 								</select>
 							</div>
 						</div>
 						<div class="col-md-12 pr-1">
 							<div class="form-group">
 								<label>Title</label>
 								<input type="text" class="form-control" placeholder="title..." name="title"
 									value="<?php if(!empty($blog_edit[0]->title)){ echo $blog_edit[0]->title; } ?>">
 							</div>
 						</div>


 						<div class="col-md-12">
 							<div class="form-group">
 								<label>Description</label>
 								<textarea rows="4" cols="80" name="description" class="form-control"
 									placeholder="Here can be your description"
 									value=""><?php if(!empty($blog_edit[0]->description)){ echo $blog_edit[0]->description; } ?></textarea>
 							</div>
 						</div>
 						<div class="col-md-12">
 							<input type="file" name="file"
 								value="<?php if(!empty($blog_edit[0]->file)){ echo $blog_edit[0]->file; } ?>">
 						</div>
 						<div class="col-md-12">
 							<div class="form-group">
 								<input type="submit" name="save" value="submit">
 							</div>
 						</div>
 					</div>
 				</form>
 		</div>
 	</div>
 </div>
