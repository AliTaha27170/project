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
                        <h3 class="box-title"> تعديل مخطط  </h3>
                        <i class="pull-left header fa fa-th"></i>
                    </div><!-- /.box-header -->

                    <form role="form" id="signupForm1" action="{{ route('orgchart.update' , $orgchart->id) }}" onsubmit="return check()"
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
                                                            <label class="col-sm-3 control-label">المخطط الهيكلي:</label>
                                                            <div class="col-sm-9">
                                                        <div class="file-upload">
                                                            <button class="file-upload-btn" type="button"
                                                                onclick="$('.file-upload-input').trigger( 'click' )">إضافة
                                                                صورة</button>

                                                            <div class="image-upload-wrap">
                                                                <input class="file-upload-input" type='file' name="image"
                                                                    onchange="readURL(this);" accept="image/*" />
                                                                    @if($orgchart->image)<img src="{{ asset('storage/' . $orgchart->image) }}" width="100%">@endif
                                                                    @error('image')
                                                                    <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                                <div class="drag-text">
                                                                    <h3>إضافة صورة للمخطط </h3>
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
    </div><!-- /.content-wrapper -->





@endsection
