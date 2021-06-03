@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật bài viết <a href="{{url('/home')}}">Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form autocomplete="off" method="POST" action="{{route('post.update',[$post->id])}}" enctype="multipart/form-data">
                        @method('PUT') 
                        @csrf
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" value="{{$post->title}}" name="title" class="form-control">
                              <label for="title">Lượt views</label>
                            <input type="text" value="{{$post->views}}" name="views" class="form-control">
                            <label for="title">Hình ảnh</label>
                            <input type="file" name="image" class="form-control">
                            <p><img width="100px" src="{{asset('public/upload/'.$post->image)}}"></p>
                            <label for="title">Mô tả</label>
                            <textarea name="short_desc" id="ckeditor_shortdesc"  rows="5" class="form-control" style="resize: none;">{{$post->short_desc}}</textarea>
                            <label for="title">Nội dung</label>
                            <textarea name="desc" id="ckeditor_desc" rows="5" class="form-control" style="resize: none;">{{$post->desc}}</textarea>
                            <label for="title">Danh mục bài viết</label>
                            <select name="post_category_id" class="form-control">
                                @foreach($category as $key => $cate)
                                <option {{ $cate->id == $post->post_category_id ? 'selected' : '' }} value="{{$cate->id}}">{{$cate->title}}</option>
                                @endforeach
                            </select>
                            <input type="submit" name="capnhatbaiviet" class="btn btn-primary mt-2" value="Cập nhật bài viết">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
