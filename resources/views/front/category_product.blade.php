
@extends('front.layouts.master')
@section('content')
  
		<!-- Page Title -->
		<section id="page-title">

			<div class="container clearfix">
				
				
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('product')}}">{{$menus[2]->MenuName()}}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$category->getName()}}</li>
				</ol>
			</div>

		</section>
       
		<!-- Content
		============================================= -->
        <section id="content">
			<div class="content-wrap ">
				<div class="container-clearfix">
					<div class="container clearfix">

						<div class="heading-block border-bottom-0 center">
							
								<h1 class="font-weight-normal" >{{$category->getName()}}</h1>
						
						</div>

						<div class="row clearfix">

							@foreach($Items as $item)
							<div class="col-lg-3 col-md-6 ">
								<div class="portfolio-item">
									<div class="portfolio-image clearfix">
										<div id="oc-images" class="pt-5">
                                    <a href="{{route('single_page',[$item->getCategory->slug,$item->id])}}"><img src="{{asset($item->image)}}" style="width: 240px; height: 190px !important" alt="Image 1"></a>
                                </div>
									</div>
									<div class="portfolio-desc pb-0-content-between">
										<div>
											<h2 class="font-weight-normal" ><a href="{{route('single_page',[$item->getCategory->slug,$item->id])}}">{{$item->getName()}}</a></h2>
											<span class="mt-0">{{$item->getDescription()}}</span>
										</div>
									</div>
								</div>
							</div>
@endforeach

							
						</div>

					</div>
				</div>
                

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