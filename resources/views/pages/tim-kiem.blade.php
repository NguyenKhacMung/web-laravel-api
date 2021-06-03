@extends('layout')
@section('content')
<div class="about">
	<div class="container">
		<div class="about-main">
			<div class="col-md-8 about-left">
				<div class="about-one">
					<h1>Từ khóa tìm kiếm: {{$keywords}}</h1>
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
						@foreach($category as $key => $category_recom)
						<li><a href="{{route('danh-muc.show',[$category_recom->id])}}">{{$category_recom->title}}</a></li>
						@endforeach
					</ul>	
				</div>

		
			</div>
			<div class="clearfix"></div>			
		</div>		
	</div>
</div>
@endsection