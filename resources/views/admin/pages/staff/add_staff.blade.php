@extends('admin.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية </a></li>
                <li><a href="/admin/staff">قائمة الأعضاء</a></li>
                <li class="active">اضافة عضو جديد</li>




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
                            <h3 class="box-title"> اضافة عضو <small>جديد</small> </h3>
                            <i class="pull-left header fa fa-th"></i>
                        </div><!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" id="addOfferForm" method="post" action="{{ route('staff.store') }}"
                            class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body col-md-12">
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">الاسم  :</label>
                                            <div class="col-sm-9">
                                                <input type="name" class="form-control"  id="name" name="name" placeholder="" data-fv-field="">
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
                                                <textarea type="name" class="form-control"  id="description" name="description" placeholder="" data-fv-field=""></textarea>
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
                                                        <input value="2" type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;">
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


@endsection
