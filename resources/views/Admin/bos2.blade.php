<div class="content-wrapper">
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Setting Edit</h3>
                </div>
                <div content="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a> </li>
                        <li class="breadcrumb-item active"><a href="#">Edit Setting </a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Setting</h3>
            </div>
            <div class="card-body">
                Edit Setting Form
                <form role="form" action="{{route('admin_setting_update')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}" class="form-control" >
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>Keywords</label>
                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" value="{{$data->phone}}"  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Smtpserve</label>
                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                    </div>


                    <div class="form-group">
                        <label>Smtpemail</label>
                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>Smtppassword</label>
                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Smtpport</label>
                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>YouTube</label>
                        <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                            <option selected="selected">{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>AboutUs</label>
                            <textarea id="summernote" name="aboutus" value="{{$data->aboutus}}" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <textarea id="summernote2" name="contact" value="{{$data->contact}}" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Referances</label>
                            <textarea id="summernote3" name="referances" value="{{$data->referances}}" class="form-control" ></textarea>
                        </div>
                        <script>
                            $('#summernote').summernote({
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
                            $('#summernote2').summernote({
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
                            $('#summernote3').summernote({
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
                        <textarea id="summernote2" name="slug" value="{{$data->slug}}" class="form-control" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Setting</button>

                </form>

            </div>
            <div class="card-footer">
                Footer
            </div>

        </div>
    </section>
</div>

