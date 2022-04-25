@extends('admin.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> تعديل نبذة  </h3>
                        <i class="pull-left header fa fa-th"></i>
                    </div><!-- /.box-header -->

                    <form role="form" id="signupForm1" action="{{ route('about.update' , $about->id) }}" onsubmit="return check()"
                        method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="box-body col-md-12">

                            <div class="col-md-12">
                                <!-- Custom Tabs (Pulled to the right) -->
                                <div class="nav-tabs-custom">

                                    <ul class="nav nav-tabs pull-right">
                                        <li class="active"><a href="#tab_1-1" data-toggle="tab">بيانات عامة</a></li>
                                        

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active fade in" id="tab_1-1">
                                            <div class="row">
                                                <div class="col-md-8">

                                                 

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">نبذة عن الجمعية : </label>
                                                            <div class="col-sm-9">
                                                                <textarea name="description"
                                                                    value="{{ old('description') }}" id="" cols="30"
                                                                    rows="20">{{$about->description}}</textarea>
                                                                @error('description')
                                                                    <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="file-upload">
                                                        <button class="file-upload-btn" type="button"
                                                            onclick="$('.file-upload-input').trigger( 'click' )">إضافة
                                                            صورة</button>

                                                        <div class="image-upload-wrap">
                                                            <input class="file-upload-input"  type='file' name="image"
                                                                onchange="readURL(this);" accept="image/*" />
                                                                @if($about->image)<img src="{{ asset('storage/' . $about->image) }}" width="100%">@endif
                                                                @error('image')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                            <div class="drag-text">
                                                                <h3>إضافة صورة </h3>
                                                            </div>
                                                        </div>
                                                        <div class="file-upload-content">
                                                            <img class="file-upload-image" src="#" alt="your image" />
                                                            <div class="image-title-wrap">
                                                                <button style="font-weight: bold;" class="btn btn-danger"
                                                                    type="button" onclick="removeUpload()"
                                                                    class="remove-image">حذف <span
                                                                        class="image-title"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.tab-pane -->
                                       
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <!-- .box-footer -->
                            <button type="submit" class="btn  btn-primary">تخزين</button>
                            <button type="reset" class="btn  btn-default">تفريغ الحقول</button>
                        </div><!-- /.box-footer -->
                    </form>
                    <!-- form end -->
                </div><!-- /.box -->


            </div> <!-- /.row -->
            </section><!-- /.content -->

        </div> <!-- /.row -->
        </section><!-- /.content -->
    </div>



    </div><!-- /.content-wrapper -->
    <script>
        var num = 1;
        $("#btn-plus").click(function() {
            $("#pro_plus").append('<div class="col-md-12">' +
                '<div class="form-group">' +
                '<div class="col-sm-3">' +
                '<input type="text"  class="form-control" name="pro_n_id' + (num) +
                '" placeholder="الاسم" data-fv-field="">' +
                '</div>' +
                '<div class="col-sm-9">' +
                '<input type="text" class="form-control" name="pro_p_id' + (num++) +
                '" placeholder="الوصف" data-fv-field="">' +
                '</div>' +
                '</div>' +
                '</div>');
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function() {


            $("#signupForm1").validate({
                rules: {
                    name: "required",
                    img: "required",
                    price: {
                        required: true,
                        maxlength: 4
                    },
                    category: {
                        required: true,
                        min: 1
                    },

                    currency: {
                        required: true,
                        min: 1
                    },

                  
                },
                messages: {
                    name: "الرجاء إدخال اسم المنتج",
                    img: "الرجاء إختيار صورة",
                    
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    element.parents(".col-sm-9").addClass("has-feedback");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!element.next("span")[0]) {
                        $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>")
                            .insertAfter(element);
                    }
                },
                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!$(element).next("span")[0]) {
                        $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>")
                            .insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-9").addClass("has-error").removeClass(
                        "has-success");
                    $(element).next("span").addClass("glyphicon-remove").removeClass(
                        "glyphicon-ok");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-9").addClass("has-success").removeClass(
                        "has-error");
                    $(element).next("span").addClass("glyphicon-ok").removeClass(
                        "glyphicon-remove");
                }
            });
        });

    </script>


@endsection
