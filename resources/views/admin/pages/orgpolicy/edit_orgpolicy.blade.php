@extends('admin.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية </a></li>
                <li><a href="{{route('orgpolicy.index')}}">قائمة السياسات</a></li>
                <li class="active">اضافة سياسة جديد</li>




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
                            <h3 class="box-title"> اضافة سياسة <small>جديدة</small> </h3>
                            <i class="pull-left header fa fa-th"></i>
                        </div><!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" id="addOfferForm" method="post" action="{{ route('orgpolicy.update' , $orgpolicy->id) }}"
                            class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="box-body col-md-12">
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">عنوان السياسة :</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title" placeholder=""
                                                    data-fv-field="" value="{{$orgpolicy->title}}">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">الملف :</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="file" >
                                                @error('file')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
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
