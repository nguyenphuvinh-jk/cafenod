@extends('admin_layout')

@section('headSection')
<link href="{{ asset('public/backend/css/datatables.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content">

  <!-- Main content -->
  <section class="panel">
    <header class="panel-heading">Tag bài viết</header>

    <div class="row panel-body">
      <div class="col-md-12">
        <div class="box-header" style="margin: 1rem .5rem 1rem 0; text-align:center;">
          <a class="btn btn-success d-flex btn-blog" href="{{ URL::to('/admin/blog_tag/add_blog_tag')}}">Thêm TAG</a>
        </div>
        <div class="box" style="border-top: 1px solid #000; padding-top: 1rem">
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Tên TAG</th>
                  <th>Đường dẫn</th>
                  <th>Tạo ngày</th>
                  <th>Cập nhật</th>
                  <th>Xoá</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tags as $tag)
                <tr>
                  <td>{{$loop->index + 1}}</td>
                  <td>{{$tag->name}}</td>
                  <td>{{$tag->slug}}</td>
                  <td>{{$tag->created_at}}</td>
                  <td>
                    <a href="{{URL::to('/admin/blog_tag/'.$tag->id.'/edit')}}">
                      <i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                  </td>
                  <td>
                    <a  onclick="return confirm('Có chắc muốn xoá chưa?')" href="{{URL::to('/admin/blog_tag/'.$tag->id.'/delete')}}">
                      <i style="font-size: 20px;" class="fa fa-trash" aria-hidden="false"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@section('footerSection')
<script src="{{ asset('public/backend/js/datatables.js') }}"></script>
<script>
  $("#example1").DataTable();
</script>

@endsection