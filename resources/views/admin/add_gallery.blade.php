@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm ảnh liên quan
                </header>
                <form action="{{url('/insert-gallery/'.$pro_id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            <input type="file" id="file" class="form-control" name="file[]" accept="image/*" multiple>
                            <span id="error_gallery"></span>
                        </div>
                        <div class="col-md-3">
                            <input type="submit" name="Upload" name="taianh" value="Tải ảnh" class="btn btn-success">
                        </div>
                    </div>
                </form>
                <div class="panel-body">
                    <input type="hidden" value="{{$pro_id}}" name="pro_id" class="pro_id">

                    <div class="row panel-body">
                        <div class="col-md-12">
                            <div class="box" style="border-top: 1px solid #000; padding-top: 1rem">
                                <div class="box-body">
                                    <form>
                                        @csrf
                                        <div id="gallery_load">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
