<div style="width:100%;height:400px"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A60688064a85c5bb1b1dc470b307f69df4df9ad9f549d7d0b84a261a97b650ff5&amp;source=constructor" width="100%" height="573" frameborder="0"></iframe></div>
<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-12">

							<div class="widget clearfix">

								<center>
								<img  src="{{asset('front/')}}/images/logo/Footer logo-02.svg" style="height: 100px;  width:150px; !important" alt="Image" class="footer-logo w-25">
								</center>

								<div class="row d-flex justify-content-around">
									<div class="my-1">
										<a href="{{ route('home') }}">@lang('home.HOME')</a>
									</div>
									<div class="my-1">
										<a href="{{ route('works') }}">@lang('home.WORK')</a>
									</div>
									<div class="my-1">
										<a href="{{ route('product') }}">@lang('home.PRODUCTS')</a>
									</div>
									<div class="my-1">
										<a href="{{ route('partners') }}">@lang('home.PARTNERS')</a>
									</div>
									<div class="my-1">
										<a href="{{ route('contact') }}">@lang('home.CONTACT')</a>
									</div>
								</div>

								<div class="py-2 my-2">
									<div class="row">
										<div class="col-6 col-md-4 d-flex justify-content-center">
											<address class="mb-0">
												<strong>@lang('home.Headquarters'):</strong><br>
												{{$contact->getAddress()}}<br>
												{{$contact->getStreet()}}<br>
											</address>
										</div>
										<div class="col-6 col-md-4 d-flex justify-content-center">
											<div>
												<strong>@lang('home.Phone'):</strong>+ {{$contact->phone}}<br>
												<strong>@lang('home.Fax'):</strong> {{$contact->fax}}<br>
												<strong>@lang('home.Email'):</strong> {{$contact->email}}<br>
											</div>
											
										</div>
										<div class="col-12 col-md-4 d-flex justify-content-center">
											<div>
												<p class="my-0">@lang('home.Developed by')</p>
												<center>
													<a href="https://takyk.com/">
														<img
															src="{{ asset('front/') }}/images/takyk_logo.png"
															style="height: 42px; width: 125px;" 
															alt="TAKYK Creative Studio"
														/>
													</a>
												</center>
											</div>
										</div>
										
									</div>
								</div>

								

							</div>

						</div>

						

						


					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="w-100 text-center">
						
						Copyrights &copy; 2021 @lang('home.All Rights Reserved').
						
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('front/')}}/js/jquery.js"></script>
	<script src="{{asset('front/')}}/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('front/')}}/js/functions.js"></script>

{{-- slider js --}}

<script src="{{asset('front/')}}/include/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('front/')}}/include/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('front/')}}/include/js/revolution.extension.actions.min.js"></script>
<script src="{{asset('front/')}}/include/js/revolution.extension.carousel.min.js"></script>
<script src="{{asset('front/')}}/include/js/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('front/')}}/include/js/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('front/')}}/include/js/revolution.extension.migration.min.js"></script>
<script src="{{asset('front/')}}/include/js/revolution.extension.navigation.min.js"></script>
<script src="{{asset('front/')}}/include/js/revolution.extension.parallax.min.js"></script>
<script src="{{asset('front/')}}/include/js/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('front/')}}/include/js/revolution.extension.video.min.js"></script>
	<!-- ADD-ONS JS FILES -->
	<script>
		var revapi103,
		tpj=jQuery;
		var $ = jQuery.noConflict();

		tpj(document).ready(function() {
			if(tpj("#rev_slider_103_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_103_1");
			}else{
				revapi103 = tpj("#rev_slider_103_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						 mouseScrollReverse:"default",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							touchOnDesktop:"off",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
						arrows: {
							style:"uranus",
							enable:true,
							hide_onmobile:true,
							hide_under:778,
							hide_onleave:false,
							tmp:'',
							left: {
								h_align:"left",
								v_align:"center",
								h_offset:15,
								v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:15,
								v_offset:0
							}
						}
						,
						bullets: {
							enable:true,
							hide_onmobile:false,
							style:"bullet-bar",
							hide_onleave:false,
							direction:"horizontal",
							h_align:"center",
							v_align:"bottom",
							h_offset:0,
							v_offset:30,
							space:5,
							tmp:''
						}
					},
					responsiveLevels:[1240,1024,778,480],
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					parallax: {
						type:"scroll",
						origo:"slidercenter",
						speed:2000,
					  speedbg:0,
					  speedls:0,
						levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
					},
					shadow:0,
					spinner:"off",
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
				revapi103.on("revolution.slide.onloaded",function (e) {
					revapi103.addClass("tiny_bullet_slider");
				});
			}
		});	/*ready*/
	</script>
	@toastr_js
    @toastr_render

</body>
</html>