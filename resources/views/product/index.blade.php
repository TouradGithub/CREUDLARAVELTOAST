@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')

قائمة المنتجات
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
   قائمة المنتجات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    @php
        $i=1;
    @endphp


    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('product.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافة منتج</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الأسم</th>
                                            <th>السعر</th>
                                            <th>العمليات</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>

                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            العمليات
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('product.edit',$product->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  تعديل البيانات </a>
                                                            <a class="dropdown-item"   href="{{route('product.delete',$product->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  حذف البيانات </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
