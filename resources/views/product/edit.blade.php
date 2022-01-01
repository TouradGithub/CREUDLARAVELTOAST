
@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
تعديل المنتج
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    تعديل المنتج
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post"  action="{{ route('product.update',$product->id) }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">تفاصيل المنتج</h6><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>الاسم: <span class="text-danger">*</span></label>
                                    <input  type="text" value="{{ $product->name }}" name="name"  class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>السعر : <span class="text-danger">*</span></label>
                                    <input  class="form-control" value="{{ $product->price }}"  name="price" type="text" >
                                </div>
                            </div>
                        </div>


                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">تعديل</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render

@endsection
