@extends('layout')
@section('content')
<div class="about">
	<div class="container">
		<div class="about-main">
			<div class="col-md-8 about-left">
				<div class="about-one">
					<h1>{{$title_category->title}}</h1>
				</div>
				
				<div class="about-tre">
					<div class="a-1">
						@foreach($category_post as $key => $post)

						<a href="{{route('danh-muc.show',[$post->category->id])}}">
							<h4>{{$post->category->title}}</h4>
						</a>
						<a href="{{route('bai-viet.show',[$post->id])}}">
							<div class="row" style="margin: 5px">
								<div class="col-md-6 abt-left">
									<img src="{{asset('public/upload/'.$post->image)}}" alt="{{$post->title}}" />
								</div>
								<div class="col-md-6 abt-left">
									
									<h3>{{$post->title}}</h3>
									<p>{!!$post->short_desc!!}</p>
									<label>{{$post->post_date}}</label>
									
									<a href="{{route('bai-viet.show',[$post->id])}}">Đọc tiếp...</a>

								</div>

							</div>
						</a>
						@endforeach
						
					</div>
					
				</div>	
			</div>
			<div class="col-md-4 about-right heading">
				<div class="abt-2">
					<h3>DANH MỤC GỢI Ý</h3>
					<ul>
						@foreach($category_recomment as $key => $category_recom)
						<li><a href="{{route('danh-muc.show',[$category_recom->id])}}">{{$category_recom->title}}</a></li>
						@endforeach
					</ul>	
				</div>

				<div class="abt-2">
					<h3>BÀI VIẾT XEM NHIỀU</h3>
					@foreach($viewest_post as $key => $new)
					<a href="{{route('bai-viet.show',[$new->id])}}">
						<div class="might-grid">
							<div class="grid-might">
								<img src="{{asset('public/upload/'.$new->image)}}" class="img-responsive" alt="">
							</div>
							<div class="might-top">
								<h4><a href="{{route('bai-viet.show',[$new->id])}}">{{$new->title}}</a></h4>
								<p>{!! substr($new->short_desc,0,200)!!}...</p> 
								<a href="{{route('bai-viet.show',[$new->id])}}">Đọc tiếp...</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</a>
					@endforeach
				</div>
				
			</div>
			<div class="clearfix"></div>			
		</div>		
	</div>
</div>
@endsection