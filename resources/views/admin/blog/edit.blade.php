@extends('admin_layout')

@section('headSection')
<link href="{{ asset('public/backend/css/select2.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">
            <span>Cập nhật bài viết</span>
        </header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box position-center">
                    @include('components.errors')
                    <form action="{{ URL::to('/admin/blog_post/'.$post->id.'/update') }}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="blog_title">Tiêu đề bài viết</label>
                            <input type="text" name="blog_title" class="form-control" id="blog_title" value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="blog_description">Mô tả</label>
                            <input type="text" name="blog_description" class="form-control" id="blog_description" value="{{$post->description}}">
                        </div>
                        <div class="form-group">
                            <label for="thumbnails">Ảnh Thumbnails </label>
                            <small>(không thêm mục này nếu muốn dùng ảnh cũ)</small>
                            <br>
                            <input type="file" name="blog_thumbnails" id="thumbnails">
                        </div>
                        <div class="form-group">
                            <label for="editor1">Nội dung bài viết</label>
                            <textarea id="editor1" name="blog_content" placeholder="Nhập nội dung bài viết" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$post->content}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Tags</label>
                            <select class="form-control select2 select2-hidden-accessible" name="tags[]" data-placeholder="Chọn Tag" multiple="" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" @foreach ($post->tags as $postTag)
                                    @if ($postTag->id == $tag->id)
                                    selected
                                    @endif
                                    @endforeach
                                    >{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control select2 select2-hidden-accessible" name="categories[]" data-placeholder="Chọn danh mục" multiple="" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @foreach ($post->categories as $postCategory)
                                    @if ($postCategory->id == $category->id)
                                    selected
                                    @endif
                                    @endforeach
                                    >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                <input type="checkbox" name='status' class="pull-left" value='1' @if ($post->status == 1) checked @endif>
                                Công khai
                            </label>
                        </div>
                        <button type="submit" name="add_blog" class="btn btn-info">Cập nhật</button>
                        <a href="{{URL::to('/admin/blog_post')}}" class="btn btn-warning">
                            Trở về
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('footerSection')
<script src="{{ asset('public/backend/js/select2.full.min.js') }}"></script>
<script>
    $(".select2").select2();
</script>
<script src="//cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>

@endsection