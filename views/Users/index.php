<?php $users = $viewModel->get('users'); ?>

  <style>
    td,
    th {
      text-align: center !important;
      vertical-align: middle !important;
    }
  </style>

  <div class="row">
    <div class="col-md-12">
      <div class="widget">
        <div class="widget-header transparent">
          <h2> <i class="fa fa-user" aria-hidden="true"></i>  Users</h2>
        </div>
        <div class="widget-content">
          <div class="data-table-toolbar">
            <div class="row">
              <div class="col-md-4">
                <form role="form" method="post" action="">
                  <div class="row">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." id="searchTerm" name="searchTerm">
                      <span class="input-group-btn">
                        <button class="btn btn-success" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                      </span>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-8 float-right">
                <div class="toolbar-brn-action">
                  <a href="<?php echo $root . 'users' ?>" class="btn btn-primary"> <i class="fa fa-refresh"></i> Refresh</a>
                </div>
              </div>
            </div>
          </div>


          <div class="table-responsive">
            <table data-sortable class="table table-hover table-striped" data-sortable-initialized="true">
              <thead>
                <tr>
                  <th data-sorted="false">#</th>
                  <th data-sorted="false">Name</th>
                  <th data-sorted="false">Gender</th>
                  <th data-sorted="false">Email</th>
                  <th data-sorted="false">Last Known IP</th>
                  <th data-sorted="false">Location</th>
                  <th data-sorted="false">Payment Method</th>
                  <th><i class="fa fa-cog" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php $index = 0; foreach ($users as $user) { $index++;?>
                  <tr>
                    <td scope="row">
                      <?php echo $index; ?>
                    </td>
                    <td><strong><?php echo $user->Name; ?></strong></td>
                    <td>
                      <strong>
                        <?php echo strtolower($user->Gender) == "m" ? "<i class='fa fa-male'></i> M" : "<i class='fa fa-female'></i> F"; ?>
                      </strong>
                    </td>
                    <td><a href="mailto:<?php echo $user->Email; ?>"><?php echo $user->Email; ?></a></td>
                    <td> <span class="label label-info"><?php echo $user->LastIP; ?></span></td>
                    <td><strong><?php echo $user->City; ?></strong></td>
                    <?php $display = $user->PaymentMethod == 0 ? "Online" : "From Home"; ?>
                    <?php $class = $user->PaymentMethod == 0 ? "label-success" : "label-warning"; ?>
                    <td><strong><span class="label <?php echo $class ?>"> <?php echo $display; ?> </span></strong></td>
                    <td>
                      <div class="btn-group btn-group-xs">
                        <div class="btn-group btn-group-xs">
                          <a data-toggle="tooltip" title="Block" class="btn btn-danger" data-original-title="Block"><i class="fa fa-ban"></i></a>
                          <a href="<?php echo $root . 'users/details/' . $user->ID; ?>" data-toggle="tooltip" title="Details" class="btn btn-primary" data-original-title="Details"><i class="fa fa-file-text"></i></a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
              </tbody>
            </table>
          </div>

          
          <div class="data-table-toolbar">
            <ul class="pagination">

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>