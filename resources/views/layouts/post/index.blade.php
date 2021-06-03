@extends('layouts.app')

@section('content')
<div class="container">
   @if (Session::has('success'))
   <div class="alert alert-success">
    <p>{{ Session::get('success') }}</p>  
</div>
@endif
@if (Session::has('failure'))
<div class="alert alert-danger" role="alert">
    <p>{{ Session::get('failure') }}</p>  
</div>
@endif
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Bài viết <a href="{{url('/home')}}">Back</a></div>

            <div class="card-body">

                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Tiêu đề</th>
                       <th scope="col">Lượt xem</th>
                      <th scope="col">Hình ảnh</th>
                      <th scope="col">Mô tả ngắn</th>
                      <th scope="col">Danh mục</th>
                      <th scope="col">Ngày thêm</th>
                      <th scope="col">Quản lý</th>
                  </tr>
              </thead>
              <tbody>
                @php
                $i=0;
                @endphp
                @foreach($post as $p)
                @php
                $i++;
                @endphp
                <tr>
                    <th scope="row">{{$i}}</th>
                    <th scope="row">{{$p->title}}</th>
                     <th scope="row">{{$p->views}}</th>
                    <th scope="row"><img width="100px" src="{{asset('public/upload/'.$p->image)}}"></th>
                    <th scope="row">{!!substr($p->short_desc,0,80)!!}</th>
                    <th scope="row">{{$p->category->title}}</th>
                    <th scope="row">{{$p->post_date}}</th>
                    <td>
                        <form action="{{route('post.destroy',[$p->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-danger mb-2 btn-sm" value="Delete"/>
                        </form>

                        <a class="btn btn-warning  btn-sm" href="{{route('post.show',[$p->id])}}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div style="margin: 5px; ">
    {{ $post->links() }}
</div>

</div>
</div>
</div>
@endsection
