@extends('layouts.admin')

@section('title', 'Products List')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Products</h3>
                    </div>
                    <div content="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active"><a href="#">Products</a> </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">

                    <a href="{{route('admin_product_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px ">Add Product</a>
                </div>

                    <div class="card">
                        <div class="card-body">
                            <table id="exaplel" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Amount</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th style="..." colspan="2">Actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->category_id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->amount}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>
                                        @if($rs->image)
                                             <img src="{{Storage::url($rs->image)}}" height="40" alt="">
                                            @endif
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}"><ion-icon name="create-outline"></ion-icon></a></td>
                                    <td><a href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')"><ion-icon name="trash-outline"></ion-icon></a> </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>



                <div class="card-footer">
                    Footer
                </div>

            </div>
        </section>
    </div>



@endsection
