@extends('layouts.admin')

@section('title', 'Category List')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Categories</h3>
                    </div>
                    <div content="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active"><a href="#">Category</a> </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">

                    <a href="{{route('admin_category_add')}}" type="button" class="btn btn-block btn bg-success text-white" style="width: 200px ">Add Category</a>
                </div>

                    <div class="card">
                        <div class="card-body">
                            <table id="exaplel" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Parent</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->parent_id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>Edit</td>
                                    <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Delete</a> </td>
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
@section('footer')

    <script>

        $(function (){
            $("#exaple1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#exaple2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching":false,
                "ordering": true,
                "info": true,
                "autoWidth":false,
                "responsive": true,

            });
        });
    </script>
@endsection
