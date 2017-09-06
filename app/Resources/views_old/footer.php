
<!-- <footer> -->
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10">
        <div id="titlefooter">
          <h4 class="visible-lg" style="padding-top:1%;"><strong>{{ footer_text['title'] }}</strong></h4>
          <h4 class="visible-md" style="padding-top:1.4%;"><strong>{{ footer_text['title'] }}</strong></h4>
          <h4 class="visible-sm" style="padding-top:1.8%;"><strong>{{ footer_text['title'] }}</strong></h4>
          <h4 class="visible-xs" style="padding-top:2.2%;"><strong>{{ footer_text['title'] }}</strong></h4>
        </div>
      </div>
    </div>

    <!-- LG, MD and SM -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding:2%;">
        <div class="row">
		      <div class="col-lg-offset-5 col-md-offset-5 col-sm-offset-3 col-xs-offset-3 text-left">
			      <div class="foot-link">
			        <a data-toggle="modal" data-target="#modalContact" href="#" title="{{ footer_titles['contact'] }}"><span class="fa fa-envelope">&nbsp;&nbsp;&nbsp; {{ footer_text['contact'] }} </span></a>
			      </div>
			      <div class="foot-link">
			        <a href="#" title="{{ footer_titles['premium'] }}"><span class="fa fa-star">&nbsp;&nbsp;&nbsp; {{ footer_text['premium'] }} </span></a>
			      </div>
			      <div class="foot-link">
			        <a data-toggle="modal" data-target="#modalWhat" href="#" title="{{ footer_titles['what'] }}"><span class="fa fa-question-circle">&nbsp;&nbsp;&nbsp; {{ footer_text['what'] }} </span></a>
			      </div>
		      </div>
        </div>
	    </div>

      <!-- SOCIAL BUTTONS : LG, MD and SM -->
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" style="padding:1%;">
        <div class="visible-lg visible-md">
          {{ footer_text['socials'] }}
        </div>
        <ul>
          <li><a href="https://www.facebook.com/gozpeak" title="Page Facebook"> Facebook </a></li>
        </ul>
      </div>
    </div>


    <div id="copyright" class="row text-center">
      <?php echo $generic['fr']['footer'][0]; ?>
    </div>
  </div>
<!-- </footer> -->
