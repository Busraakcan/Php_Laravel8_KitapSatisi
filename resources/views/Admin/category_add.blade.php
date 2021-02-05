@extends('layouts.admin')

@section('title', 'Laravel Kitap Satis Sitesi')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Category Add</h3>
                    </div>
                    <div content="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active"><a href="#">Add Category </a> </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>
                </div>
                <div class="card-body">
                   Add Category Form
                    <form role="form" action="{{route('admin_category_create')}}" method="post">

                        @csrf
                        <div class="form-group">
                            <label >Parent</label>

                            <select class="form-control select2" name="parent_id" style="width: 100%;">
                                <option value="0" selected="selected">Main Category</option>

                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{$rs->title}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="keywords" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control select2" name="status" style="width: 100%;">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>

                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>

                    </form>

                </div>
                <div class="card-footer">
                    Footer
                </div>

            </div>
        </section>
    </div>


@endsection
