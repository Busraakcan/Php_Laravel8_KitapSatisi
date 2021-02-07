<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
    @yield('css')
    @yield('javascript')
</head>
<body>
                <div class="card-header">
                    <h3 class="card-title">Product : {{$data->title}}</h3>
                </div>
                <div class="card-body">
                   Add Image Form
                    <form action="{{route('admin_image_store',['product_id'=>$data->id])}}" enctype="multipart/form-data" method="post" >

                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary">Add Image</button>

                    </form>

                </div>
                <table id="exaplel" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th >Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="60" alt="">

                                @endif

                            </td>
                            <td>
                                <a href="{{route('admin_image_add',['product_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">

                                </a>

                                <a href="{{route('admin_image_delete',['id'=>$rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')">
                                    <img src="{{asset('assets/admin/images')}}/delete.png"height="30"></a>

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card-footer">
                    Footer
                </div>

</body>
</html>


