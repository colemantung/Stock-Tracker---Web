@extends('layouts.default')

@section('title')
	Contact
@stop

@section('subtitle')
	
@stop


@section('content')
<!-- BEGIN PAGE CONTENT INNER -->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-12">
							<!-- Google Map -->
							<div class="row">
								<div id="map" class="gmaps margin-bottom-40" style="height:400px;">
								</div>
							</div>
							<div class="row margin-bottom-20">
								<div class="col-md-6">
									<div class="space20">
									</div>
									<h3 class="form-section">Contacts</h3>
									<p>
										 Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit.
									</p>
									<div class="well">
										<h4>Address</h4>
										<address>
										<strong>Loop, Inc.</strong><br>
										 795 Park Ave, Suite 120<br>
										 San Francisco, CA 94107<br>
										<abbr title="Phone">P:</abbr> (234) 145-1810 </address>
										<address>
										<strong>Email</strong><br>
										<a href="mailto:#">
										first.last@email.com </a>
										</address>
										<ul class="social-icons margin-bottom-10">
											<li>
												<a href="javascript:;" data-original-title="facebook" class="facebook">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="github" class="github">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="linkedin" class="linkedin">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="rss" class="rss">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="skype" class="skype">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="twitter" class="twitter">
												</a>
											</li>
											<li>
												<a href="javascript:;" data-original-title="youtube" class="youtube">
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="space20">
									</div>
									<!-- BEGIN FORM-->
									<form action="javascript:;">
										<h3 class="form-section">Feedback</h3>
										<p>
											 Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer
										</p>
										<div class="form-group">
											<div class="input-icon">
												<i class="fa fa-check"></i>
												<input type="text" class="form-control" placeholder="Subject">
											</div>
										</div>
										<div class="form-group">
											<div class="input-icon">
												<i class="fa fa-user"></i>
												<input type="text" class="form-control" placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<div class="input-icon">
												<i class="fa fa-envelope"></i>
												<input type="password" class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" rows="3=6" placeholder="Feedback"></textarea>
										</div>
										<button type="submit" class="btn green">Submit</button>
									</form>
									<!-- END FORM-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
@stop

{{-- script --}}
@section('script')

<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="../../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/contact-us.js"></script>
<script>
jQuery(document).ready(function() {    
    Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features
    ContactUs.init();
});
</script>
<!-- END JAVASCRIPTS -->
@stop

