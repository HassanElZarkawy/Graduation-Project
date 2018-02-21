<?php $user = $viewModel->get('user'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="content">
  <div class="row">
    <div class="col-sm-3">
      <div class="text-center user-profile-2">
		<h4><b><?php echo $user->Name ?></b></h4>					
		<h5><?php echo strtolower($user->Gender) == "m" ? "<i class='fa fa-male'></i> Male" : "<i class='fa fa-female'></i> Female"; ?></h5>
		<ul class="list-group">
		  <li class="list-group-item">
		    <span class="badge" style="background: #65BBD6;"><?php echo $user->LastIP ?></span>
		    Known IP
		  </li>
		  <li class="list-group-item">
		    <span class="badge" style="background: #68C39F;"><?php echo date('d-m-Y', $user->DateJoined); ?></span>
		    Date Joined
		  </li>
		</ul>
		<div class="user-button">
		  <div class="row">
			<div class="col-lg-12">
        <?php if ($user->Blocked == 0) { ?>
  			  <a href="<?php echo $root . 'block/' . $user->ID ?>" class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Block <?php echo $user->Name ?></a>
        <?php } else { ?>
  			  <a href="<?php echo $root . 'block/' . $user->ID ?>" class="btn btn-success btn-sm btn-block"><i class="fa fa-check"></i> Unblock <?php echo $user->Name ?></a>
        <?php } ?>
			</div>
		  </div>
		</div><!-- End div .user-button -->
  	  </div>
    </div>
    <div class="col-sm-9">
      <div class="widget widget-tabbed">
        <!-- Nav tab -->
        <ul class="nav nav-tabs nav-justified" style="margin-top: 0px !important;">
          <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> About</a></li>
          <li><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Activities</a></li>
          <li><a href="#mymessage" data-toggle="tab"><i class="fa fa-envelope"></i> Message</a></li>
        </ul>
        <!-- End nav tab -->

        <!-- Tab panes -->
        <div class="tab-content">


          <!-- Tab about -->
          <div class="tab-pane active animated fadeInRight" id="about">
            <div class="user-profile-content">
              <h4>ABOUT <strong><?php echo $user->Name; ?></strong></h4>
              <p>
                <h5>Lives at:</h5>
                <?php echo $user->Building . ' ' . $user->Street . ', ' . $user->District . ', ' . $user->City ?>
              </p>
              <p>
                <strong>LAST SEEN AT:</strong>
                <br />
                <h2 class="text-center" id="address"></h2>
                <?php 
                  $ip = $_SERVER['REMOTE_ADDR'];
                  $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                  $loc = $details->loc;
                  $pieces = explode(",", $loc);
                ?>
                <script>
                  $.ajax({ 
                    url:'http://maps.googleapis.com/maps/api/geocode/json?latlng=<?php echo $user->Latitude . ',' . $user->Longitude ?>&sensor=true',
                    success: function(data){
                      var txt = '';
                      var lenght = data.results[0].address_components.length; 
                      txt += data.results[0].address_components[lenght - 2].long_name + ' , ';
                      txt += data.results[0].address_components[lenght - 1].long_name;
                      $('#address').html(txt);
                    }
                  });
                </script>
                <br />
                <div class="row text-center">
                  <img class="text-center" src="https://maps.google.com/maps/api/staticmap?key=AIzaSyDVJ6I54qKfNjwzblS9ycim3OFs20pjWkM&center=<?php echo $pieces[0] . ',' . $pieces[1]; ?>&zoom=12&size=600x300&sensor=false" style="width: 600px; height: 300px;" />
                </div>
              </p>
              <hr />
              <div class="row">
                <div class="col-sm-6">
                  <h5><strong>CONTACT <?php echo $user->Name ?></strong></h5>
                  <address>
                    <strong>Phone</strong><br><abbr title="Phone">****</abbr>
                  </address>
                  <address>
                    <strong>Email</strong>
                    <br>
                    <a href="mailto:<?php echo $user->Email ?>"><?php echo $user->Email ?></a>
                  </address>
                  <address>
                    <strong>Website</strong>
                    <br>
                    <a href="http://r209.com">http://r209.com</a>
                  </address>
                </div>
              </div>
              <!-- End div .row -->
            </div>
            <!-- End div .user-profile-content -->
          </div>
          <!-- End div .tab-pane -->
          <!-- End Tab about -->


          <!-- Tab user activities -->
          <div class="tab-pane animated fadeInRight" id="user-activities">
            <div class="scroll-user-widget">
              <ul class="media-list">
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                      <br /><i>2 minutes ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>John Doe</strong> Created an photo album <strong>&#34;Indonesia Tourism&#34;</strong>
                      <br /><i>8 minutes ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>Annisa</strong> Posted an article <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                      <br /><i>an hour ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>Ari Rusmanto</strong> Added 3 products
                      <br /><i>3 hours ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>Hana Sartika</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                      <br /><i>12 hours ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>Johnny Depp</strong> Updated his avatar
                      <br /><i>Yesterday</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                      <br /><i>2 minutes ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>John Doe</strong> Created an photo album <strong>&#34;Indonesia Tourism&#34;</strong>
                      <br /><i>8 minutes ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>Annisa</strong> Posted an article <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                      <br /><i>an hour ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>Ari Rusmanto</strong> Added 3 products
                      <br /><i>3 hours ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>Hana Sartika</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                      <br /><i>12 hours ago</i></p>
                  </a>
                </li>
                <li class="media">
                  <a href="#fakelink">
                    <p><strong>Johnny Depp</strong> Updated his avatar
                      <br /><i>Yesterday</i></p>
                  </a>
                </li>
              </ul>
            </div>
            <!-- End div .scroll-user-widget -->
          </div>
          <!-- End div .tab-pane -->
          <!-- End Tab user activities -->

          <!-- Tab user messages -->
          <div class="tab-pane animated fadeInRight" id="mymessage">
            <div class="scroll-user-widget">
              <ul class="media-list">
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/2.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </li>
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/1.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                  </div>
                </li>
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/5.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </li>
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/4.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </li>
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/3.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </li>
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/2.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </li>
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/1.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                  </div>
                </li>
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/5.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </li>
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/4.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </li>
                <li class="media">
                  <a class="pull-left" href="#fakelink">
                    <img class="media-object" src="assets/img/avatar/3.jpg" alt="Avatar">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#fakelink">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End div .scroll-user-widget -->
          </div>
          <!-- End div .tab-pane -->
          <!-- End Tab user messages -->


        </div>
        <!-- End div .tab-content -->

      </div>
      <!-- End div .box-info -->
    </div>
  </div>
</div>