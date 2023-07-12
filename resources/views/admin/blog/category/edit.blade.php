@extends('admin_layout')
@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">
            Cập nhật danh mục bài viết
        </header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box position-center">
                    @include('components.errors')
                    <form action="{{ URL::to('/admin/blog_category/'.$category->id.'/update') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Tên danh mục bài viết</label>
                            <input type="text" name="category_name" class="form-control" id="category_name" value="{{$category->name}}">
                        </div>

                        <button type="submit" class="btn btn-info">Cập nhật</button>
                        <a href="{{URL::to('/admin/blog_category')}}" class="btn btn-warning">
                            Trở về
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection