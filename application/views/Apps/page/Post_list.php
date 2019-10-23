 <div class="col-md-12">

            <div class="card">
              <?php if($msg = $this->session->flashdata('msg')){
                echo "<h3>".$msg."</h3>";
              } ?>
              <div class="card-header">
                <h4 class="card-title"> blog list</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>date time</th>
                      <th>Image</th>
                      <th> title</th>
                      <th> user</th>
                      <th class="text-right"> Action</th>
                    </thead>
                    <tbody>
                      <?php if(!empty($blog)) { foreach($blog as $row){ ?>
                      <tr>
                        <td><?php echo $row->datetime; ?></td>
                        <td><img src="<?php echo base_url(); ?>uploads/<?php echo $row->file; ?>" style= 'height: 100px; width: 100px;'></td>
                        <td><?php echo $row->title; ?></td>
                        <td><?php echo $row->user; ?></td>
                        <td class="text-right">
                          <a href="<?php echo base_url();?>Apps/delete_post/<?php echo $row->Sr_no; ?>/<?php echo $row->file; ?>" class="btn btn-sm btn-danger">del</a>
                          <a href="<?php echo base_url();?>Apps/add_post/<?php echo $row->Sr_no; ?>" class="btn btn-sm btn-info">edit</a>
                        </td>
                      </tr>
                     <?php  } }else{ echo '<h3>No Record available.</h3>';} ?>
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>