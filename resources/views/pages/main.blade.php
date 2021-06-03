<!--about-starts-->
@extends('layout')
@section('content')
@include('pages.banner')
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
               <div class="about-tre">
                <div class="a-1">
                    @foreach($all_post as $key => $post)

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
            <div style="margin: 5px; ">
                {{ $all_post->links() }}
            </div>
        </div>
        <div class="col-md-4 about-right heading">

            <div class="abt-2">
                <h3>BÀI VIẾT MỚI NHẤT</h3>
                @foreach($newest_post as $key => $new)

                
                <div class="might-grid">
                    <a href="{{route('danh-muc.show',[$post->category->id])}}">
                        <h4>{{$post->category->title}}</h4>
                    </a>
                    <a href="{{route('bai-viet.show',[$new->id])}}">
                        <div class="grid-might">
                         <img src="{{asset('public/upload/'.$new->image)}}" class="img-responsive" alt="">
                     </div>
                     <div class="might-top">
                        <h4><a href="{{route('bai-viet.show',[$new->id])}}">{{$new->title}}</a></h4>
                        <p>{!! substr($new->short_desc,0,200)!!}...</p> 
                        <a href="{{route('bai-viet.show',[$new->id])}}">Đọc tiếp...</a>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </div>  

            @endforeach
        </div>
        <div class="abt-2">
            <h3>BÀI VIẾT XEM NHIỀU</h3>
            <ul>
                @foreach($viewest_post as $key => $views)
                <li><a href="{{route('bai-viet.show',[$views->id])}}">{{$views->title}}</a></li>
                @endforeach
            </ul>   
        </div>
        <div class="abt-2">
            <h3>NEWS LETTER</h3>
            <div class="news">
                <form>
                    <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                    <input type="submit" value="Đăng ký">
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>            
</div>      
</div>
</div>
@endsection
<!--about-end-->