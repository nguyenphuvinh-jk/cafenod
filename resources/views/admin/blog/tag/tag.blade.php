@extends('admin_layout')
@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">

            Thêm TAG bài viết
        </header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box position-center">
                    @include('components.errors')
                    <form action="{{ URL::to('/admin/blog_tag/add_blog_tag') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="tag_name">Tên TAG</label>
                            <input type="text" name="tag_name" class="form-control" id="tag_name" placeholder="Nhập tên">
                        </div>

                        <button type="submit" class="btn btn-info">Thêm TAG</button>
                        <a href="{{URL::to('/admin/blog_tag')}}" class="btn btn-warning">
                            Trở về
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection