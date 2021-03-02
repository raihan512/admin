<?php
require_once('functions/function.php');
get_header();
get_sidebar();
?>
   <div class="row">
        <div class="col-md-12 main_content">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All User Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="add-user.php"><i class="fa fa-th"></i> Add User</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                  <table class="table table-bordered table-striped table-hover custom_table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      
                      $sel= "SELECT * FROM admin_user";
                      $q = mysqli_query($con,$sel);
                      while($data=mysqli_fetch_assoc($q)){
                      
                      ?>
                        <tr>
                        <td><?= $data['user_name']; ?></td>
                          <td><?= $data['user_phone'] ;?></td>
                          <td><?= $data['user_email']; ?></td>
                          <td><?= $data['user_username']; ?></td>
                          <td>
                              <a href="view-user.php?v=<?= $data['user_id']; ?>"><i class="fa fa-eye fa-lg"></i></a>
                              <a href="edit-user.php?e=<?= $data['user_id'] ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                              <a href="delete-user.php?d=<?= $data['user_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                  </table>
              </div>
              <div class="card-footer text-center">
                  .
              </div>
            </div>
        </div>
    </div>
<?php
get_footer();
?>