
@extends('admin.layout.admin')


@section('main')
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <ol class="breadcrumb">
            <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية </a></li>
            <li><a href="/admin/meeting">قائمة الاجتماعات</a></li>
            <li class="active"> تعديل الاجتماع</li>




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
                        <h3 class="box-title"> تعديل اجتماع <> </h3>
                        <i class="pull-left header fa fa-th"></i>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" id="addUserForm" action="{{route('meeting.update' , $meeting->id)}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="box-body col-md-12">
                            <div class="col-md-8">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">العنوان  :</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$meeting->title}}" class="form-control"  name="title" placeholder="" data-fv-field="">
                                            @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">التفاصيل  :</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$meeting->description}}" class="form-control"  name="description" placeholder="" data-fv-field="">
                                            @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">نوع الاجتماع :</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <label class="">
                                                    <div class=" checked" aria-checked="true" aria-disabled="false" style="position: relative; margin-right: 15px">
                                                        <input type="radio" value="1" name="r1" class="minimal" checked="" style="position: absolute; opacity: 0;">
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        </ins> عادي </div>

                                                </label>
                                                <label class="">
                                                    <div class="checked" aria-checked="true" aria-disabled="false" style="position: relative; margin-right: 15px">
                                                        <input value="2" type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;">
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        </ins>  مهم   </div>

                                                </label>
                                                @error('r1')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">الملف  :</label>
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
                        <div class="box-footer"><!-- .box-footer -->
                            <button type="submit" class="btn  btn-primary">تخزين</button>
                            <button type="reset"  class="btn  btn-default">تفريغ الحقول</button>
                        </div><!-- /.box-footer -->
                    </form>
                    <!-- form end -->
                </div><!-- /.box -->


            </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script type="text/javascript">

    $( document ).ready( function () {


        $( "#addUserForm" ).validate( {
            rules: {

                name: {
                    required: true,
                    minlength:2
                },
                email: {
                    required: true,
                    email:true
                },

                password: {
                    required: true,
                    minlength: 8
                },
                re_password: {
                    required: true,
                    minlength: 8,
                    equalTo:"#password"
                }


            },
            messages: {
                name: {
                    required: "الرجاء ادخال اسم المستخدم",
                    minlength: "اسم المستخدم لا يمكن ان يكون اقل من 2"
                },
                email: {
                    required: "الرجاء ادخال البريد الالكتروني",
                    email:"الرجاء كتابة إيميل صحيح"
                },
                password: {
                    required: "الرجاء ادخال كلمة المرور",
                    minlength:"كلمة المرور يجب ان يكون طولها 8 احرف على الأقل"
                },
                re_password: {
                    required:"الرجاء تأكيد كلمة المرور",
                    minlength:"كلمة المرور يجب ان يكون طولها 8 احرف على الأقل",
                    equalTo:"كلمة المرور غير متطابقة"
                }
            },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                error.addClass( "help-block" );

                // Add `has-feedback` class to the parent div.form-group
                // in order to add icons to inputs
                element.parents( ".col-sm-9" ).addClass( "has-feedback" );

                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
                } else {
                    error.insertAfter( element );
                }

                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if ( !element.next( "span" )[ 0 ] ) {
                    $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                }
            },
            success: function ( label, element ) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if ( !$( element ).next( "span" )[ 0 ] ) {
                    $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".col-sm-9" ).addClass( "has-error" ).removeClass( "has-success" );
                $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
            },
            unhighlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".col-sm-9" ).addClass( "has-success" ).removeClass( "has-error" );
                $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
            }
        } );
    } );
</script>


@endsection
