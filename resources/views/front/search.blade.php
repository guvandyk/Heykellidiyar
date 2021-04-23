@extends('front.layouts.master')
@section('content')


	
 @if(isset(request()->query))
@if($ourParts->isNotEmpty())
	<!-- Content
		============================================= -->
        <section id="content">
			<div class="content-wrap pt-5">

                <div class="container clearfix">
                	
<h2 class="center">@lang('home.Our Partenrs')</h2>
					<div class="row justify-content-center col-mb-50">

					
					 @foreach($ourParts as $ourPart)
		
						<div class="col-sm-6 col-lg-4 p-3">
							<div class="feature-box media-box">
								<div class="fbox-media d-flex justify-content-center">
									<img src="{{asset($ourPart->image)}}"  style="width: 240px; height: 200px !important" alt="Why choose Us?">
								</div>
								<div class="fbox-content px-0">
									<center><h3>{{$ourPart->getName()}}{{-- <span class="subtitle">Because we are Reliable.</span> --}}</h3></center>
									{{-- <p>{{$ourPart->getDescription()}}</p> --}}
								</div>
							</div>
						</div>
						@endforeach

   	

			</div>
		</section><!-- #content end -->
				{{-- @else 	
						<div class="center">
        <h2>@lang('home.No found')</h2>
    </div>  --}}
@endif	
@endif	 

@if(isset(request()->query))
@if($categories1->isNotEmpty())

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

                @endif	
@endif	 


 @if(isset(request()->query))
@if($works->isNotEmpty())
<!-- Content
		============================================= -->
        <section id="content">
			<div class="content-wrap pt-6">

                <div class="container clearfix">

					<div class="row justify-content-center col-mb-50">
				

						
@foreach($works as $work)
						
       
                        <div class="col-sm-6 col-lg-6 p-3">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                     <a href="{{route('work.category',$work->slug)}}"><img src="{{asset($work->image)}}"  style="width: 530px; height: 330px !important" alt="Why choose Us?"></a>
                                </div>
                                <div class="fbox-content px-0">
                                   <a href="{{route('work.category',$work->slug)}}"> <h3>{{$work->getName()}}</h3></a>
                                    <p>{{$work->getDescription()}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

					</div>
				</div>
			</div>
		</section><!-- #content end -->
		@endif	
    @endif	 

  @if(isset(request()->query))
@if($Items->isNotEmpty())

  <!-- Content
		============================================= -->
        <section id="content">
			<div class="content-wrap pt-6">

                <div class="container clearfix">

					<div class="row justify-content-center col-mb-50">
						

						
@foreach($Items as $item)
						
       
                        <div class="col-sm-6 col-lg-6 p-3">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{asset($item->image)}}" style="width: 530px; height: 330px !important" alt="Why choose Us?">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>{{$item->getName()}}</h3>
                                   <p>{{$item->getDescription()}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

					</div>
				</div>
			</div>
		</section><!-- #content end --> 


		@endif	
    @endif

@if(isset(request()->query))
@if($Items->isNotEmpty())
<!-- Content
		============================================= -->
        <section id="content">
			<div class="content-wrap ">
				<div class="container-clearfix">
					<div class="container clearfix">

						<div class="heading-block border-bottom-0 center">
							
							
						
						</div>

						<div class="row clearfix">

							@foreach($items as $item)
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

    @endif	
    
    @endif	
    

@endsection