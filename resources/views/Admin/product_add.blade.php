@extends('layouts.admin')

@section('title', 'Add Product')
@section('javascript')

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Category</h3>
                    </div>
                    <div content="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active"><a href="#">Add Product </a> </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Product</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('admin_product_store')}}" enctype="multipart/form-data" method="post" role="form">

                        @csrf
                        <div class="form-group">
                            <label >Category</label>

                            <select class="form-control select2" name="category_id" style="width: 100%;">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="keywords" value="" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" value="3"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="number" name="amount" value="5" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Yazar</label>
                            <input type="text" name="yazar" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Yayın Evi</label>
                            <input type="text" name="yayın_evi" value="" class="form-control" >
                        </div>



                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>



                        <div class="form-group">
                            <label>Kitapın açıklaması</label>
                            <textarea id="summernote" name="detail"></textarea>
                            <script>
                                $('#summernote').summernote({
                                    placeholder: 'Kitabın ayrıntılarını bu kısıma girebilirsiniz.',
                                    tabsize: 2,
                                    height: 120,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            </script>
                            <p class="help-block">Kitabın içerik kısmı.</p>
                        </div>

                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" value="" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control select2" name="status" value="" style="width: 100%;">
                                <option selected="selected">False</option>
                                <option>True</option>
                                <option>False</option>
                            </select>

                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>

                    </form>

                </div>
                <div class="card-footer">
                    Footer
                </div>

            </div>
        </section>
    </div>


@endsection
