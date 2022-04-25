@extends('admin.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية </a></li>
                <li><a href="/admin/staff">قائمة الاعضاء</a></li>
                <li class="active">تعديل عضو</li>




            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"> تعديل عضو </h3>
                            <i class="pull-left header fa fa-th"></i>
                        </div><!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" id="addOfferForm" method="post" action="{{ route('staff.update' , $staf->id) }}"
                              class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="box-body col-md-12">
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">الاسم  :</label>
                                            <div class="col-sm-9">
                                                <input type="name" value="{{old('name' , $staf->name)}}" class="form-control"  id="name" name="name" placeholder="" data-fv-field="">
                                                @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">نبذة أو وصف  :</label>
                                            <div class="col-sm-9">
                                                <textarea  class="form-control"  id="description" name="description" placeholder="" data-fv-field="">{{$staf->description}}</textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">نوع الموظف :</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <label class="">
                                                    <div class=" checked" aria-checked="true" aria-disabled="true" style="position: relative; margin-right: 15px">
                                                        <input type="radio" value="1" name="r1" class="minimal" checked="" style="position: absolute; opacity: 0;">
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        </ins> مجلس ادارة </div>

                                                </label>
                                                <label class="">
                                                    <div class="checked" aria-checked="true" aria-disabled="true" style="position: relative; margin-right: 15px">
                                                        <input value="2" type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;" >
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        </ins>  مؤسس   </div>

                                                </label>
                                                @error('r1')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-8">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">صورة الموظف :</label>
                                            <div class="col-sm-9">
                                                <div class="file-upload">
                                                    <button class="file-upload-btn" type="button"
                                                            onclick="$('.file-upload-input').trigger( 'click' )">إضافة
                                                        صورة</button>

                                                    <div class="image-upload-wrap">
                                                        <input class="file-upload-input" type='file' name="image"
                                                               onchange="readURL(this);" accept="image/*" />
                                                        @if($staf->image)<img src="{{ asset('storage/' . $staf->image) }}" width="100%">@endif
                                                        @error('image')
                                                        <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        <div class="drag-text">
                                                            <h3>إضافة صورة للموظف </h3>
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
                                    </div>

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
    </div><!-- /.content-wrapper -->

    <script type="text/javascript">
        $(document).ready(function() {


            $("#addOfferForm").validate({
                rules: {

                    product_id: {
                        required: true,
                        min: 1
                    },
                    offer_dur: {
                        required: true,
                        min: 1
                    },

                    new_price: {
                        required: true,
                        min: 1
                    }


                },
                messages: {
                    product_id: {
                        required: "الرجاء أختيار منتج",
                        min: "الرجاء أختيار منتج"
                    },
                    offer_dur: {
                        required: "مدة العرض يجب ان تكون يوم على الأقل",
                        min: "مدة العرض يجب ان تكون يوم على الأقل"
                    },

                    new_price: {
                        required: "سعر العرض لا يكون اقل من 1",
                        min: "سعر العرض لا يكون اقل من 1"
                    }
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
                    $(element).parents(".col-sm-9").addClass("has-error").removeClass("has-success");
                    $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-9").addClass("has-success").removeClass("has-error");
                    $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
                }
            });
        });
    </script>

@endsection
