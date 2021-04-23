
@extends('front.layouts.master')
@section('content')
        <!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper min-vh-40 min-vh-md-75" data-autoplay="9000" data-speed="800" data-loop="true" data-grab="false">
			<div class="slider-inner" style="transform: translate3d(0px, 0px, 0px);">

				<div class="swiper-container swiper-parent swiper-container-initialized swiper-container-horizontal" style="cursor: grab;">
					<div class="swiper-wrapper" id="swiper-wrapper-a9a792bb555f3a10c" aria-live="off">
						<div class="swiper-slide dark swiper-slide-active" role="group" aria-label="1 / 3" style="width: 1226px;">
							<div class="container">
								<div class="slider-caption slider-caption-center" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
									<h2 data-animate="fadeInUp" class="fadeInUp animated">@lang('home.PRODUCTS') </h2>
								</div>
							</div>
							
						</div>
					</div>  
                </div>
                <div class="swiper-slide-bg" style="background-image: url('{{asset('front/')}}/images/slider/swiper/Products.jpg');"></div>
			</div>
		</section>
		<!-- #Slider End -->
		

		<!-- Content
		============================================= -->
        <section id="content">
			<div class="content-wrap pt-6">
                
                
@foreach($categories1 as $category1)
				<div class="container-fluid pt-5 mt-5" >
                    <div class="container clearfix pb-5">
                        <div class="row col-mb-50">
                            <div class="col-md-5" >
                               <a href="{{route('category',$category1->slug)}}" > <img src="{{asset($category1->image)}}" style="width: 440px; height: 330px !important" alt="Image" class="w-100;"></a>
                            </div>
							<div class="col-md-7">	
	 <a href="{{route('category',$category1->slug)}}" ><h2>{{$category1->getName()}}</h2></a>
                                <p>{{$category1->getDescription()}}</p>
                            </div>
							
                        </div>
                    </div>
                </div>
                @endforeach


			</div>
		</section><!-- #content end -->

			<!-- Content
		============================================= -->
        <section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row gutter-40 col-mb-80">
						<!-- Postcontent
						============================================= -->
						<div class="postcontent col-lg-9">

							<h3>@lang('home.Send us an Email')</h3>

							<div class="">

								<div class="form-result"></div>
								{{-- @if(Session::has('success_message'))
								<div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
								@endif --}}
								<form class="mb-0" action="{{route('contact.send')}}" method="POST" enctype="multipart/form-data">
									@csrf

									<div class="row">
										<div class="col-md-4 form-group">
											<label for="template-contactform-name">{{$article->getName()}}<small>*</small></label>
											<input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-email">{{$article->getEmail()}}<small>*</small></label>
											<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-phone">{{$article->getTelefon()}}</label>
											<input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control"  />
										</div>

										<div class="w-100"></div>

										<div class="col-md-8 form-group">
											<label for="template-contactform-subject">{{$article->getTema()}} <small>*</small></label>
											<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
										</div>

										 <div class="col-md-4 form-group">
											<label for="template-contactform-service">{{$article->getService()}}</label>
											<select id="template-contactform-service" name="service" class="sm-form-control">
											<option value="">-- @lang('home.Select One') --</option>
											<option value="@lang('home.Building')">@lang('home.Building')</option>
											<option value="@lang('home.Architecture')">@lang('home.Architecture')</option>
											<option value="@lang('home.Logistics')">@lang('home.Logistics')</option>
											<option value="@lang('home.Trade')">@lang('home.Trade')</option>
										</select>
										</div> 

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="template-contactform-message">{{$article->getHabar()}}<small>*</small></label>
											<textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
										</div>

									

										<div class="col-12 form-group">
											<button class="button button-3d m-0" type="submit" >{{$article->getButton()}}</button>
										</div>
									</div>

									

								</form>
							</div>

						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">
<br>
<br>
<br>
<br>
							<address>
								<strong>@lang('home.Headquarters'):</strong><br>
								{{$contact->getAddress()}}<br>
								{{$contact->getStreet()}}<br>
								
							</address>
							<strong>@lang('home.Phone'):</strong><a href="tel:+{{$contact->phone}}"> +{{$contact->phone}}</a><br>
							<strong>@lang('home.Fax'):</strong><a href="fax:{{$contact->fax}}"> {{$contact->fax}}</a><br>
							<strong>@lang('home.Email'):</strong><a href="mailto:{{$contact->email}}"> {{$contact->email}}</a>

							{{-- <div class="widget border-0 pt-0">

								<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
									<i class="i-plain i-small color icon-twitter mb-0" style="margin-right: 15px;"></i>
									<div class="flexslider" style="width: auto;">
										<div class="slider-wrap">
											<div class="slide"></div>
										</div>
									</div>
								</div>

							</div>
 --}}
							{{-- <div class="widget border-0 pt-0">

								<a href="#" class="social-icon si-small si-dark si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-dribbble">
									<i class="icon-dribbble"></i>
									<i class="icon-dribbble"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-forrst">
									<i class="icon-forrst"></i>
									<i class="icon-forrst"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-dark si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

							</div> --}}

						</div><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section><!-- #content end -->


   @endsection