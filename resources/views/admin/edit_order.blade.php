@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật tình trạng đơn hàng
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @include('components.errors')
                        @foreach($edit_order as $key => $pro)
                            <form action="{{ URL::to('/update-order/'.$pro->order_code) }}" method="post" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái đơn hàng</label>
                                    <select name="order_status" class="form-control input-sm m-bot15">
                                        <option value="0" {{$pro->order_status == '0'? 'selected': ''}}>Đã xử lý</option>
                                        <option value="1" {{$pro->order_status == '1'? 'selected': ''}}>Đang chờ xử lý</option>
                                    </select>
                                </div>
                                <button type="submit" name="edit_order" class="btn btn-info">Cập nhật</button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection

@section('footerSection')
    <script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor3');
    </script>
@endsection
