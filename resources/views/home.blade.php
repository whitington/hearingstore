@extends('layouts.master')

@section('title', 'Hearing Store')
@section('description', 'This is the description')

@section('content')

<div class="row">
  <div class="col-sm-4">
    <img class="img-responsive" src="/img/left2.gif" alt="Hearing Aid One" />
    <h2>Heading</h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-sm-4">
    <img class="img-responsive" src="/img/middle2.png" alt="Hearing Aid One" />
    <h2>Heading</h2>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-sm-4">
    <img class="img-responsive" src="/img/right2.png" alt="Hearing Aid One" />
    <h2>Heading</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->



<!--footer-->
<div class="row" id="content_container">
  <!--left col--><div class="eight columns">
    <div id="left-col">
    </div> <!--left-col end-->
  </div> <!--column end-->
  <!--right-col-->
  <div class="four columns">
    <!--sidebar-->
    <div id="sidebar">
      <ul class="xoxo">
      </ul>
    </div><!--sb end-->
  </div> <!--right-col-->
</div>

<center><img src="img/badges.jpg"></center>
<div id="footer-container">

  <!--footer container-->
  <div class="row">
    <div class="twelve columns" id="footer-widget">
      <div id="footer-bar1" class="four columns">
        <ul class="xoxo">
          <li class="widget-container"><h3 class="widget-title">Meta</h3>	<ul>
              <li>Site Admin</li>			<li>Log out</li>
            </ul>	</li>	</ul>					
      </div><!--footer 1 end-->
      <div id="footer-bar2" class="four columns">
        <ul class="xoxo">
          <li class="widget-container"><h3 class="widget-title">About us</h3><div class="textwidget">
              This is text.</div>
          </li></ul>
      </div><!--footer 2 end-->

      <div id="footer-bar3" class="four columns">
        <ul class="xoxo">
          <li class="widget-container"><h3 class="widget-title">Contact Us</h3><div class="textwidget">Nullam posuere felis a lacus tempor eget dignissim arcu adipiscing. </div>
          </li></ul>
      </div><!--footer 3 end-->			
    </div><!--footer widget end-->

  </div><!-- footer container-->
</div>



@endsection