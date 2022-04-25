@extends('admin.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية </a></li>
                <li><a href="/admin/aboutus">من نحن</a></li>
                <li class="active">تعديل  </li>




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
                            <h3 class="box-title">   تعديل من نحن  </h3>
                            <i class="pull-left header fa fa-th"></i>
                        </div><!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" method="post" action="/admin/aboutus/update"
                            class="form-horizontal" >
                            @csrf
                            @method('PUT')
                            <div class="box-body col-md-12">
                                <div class="col-md-8">

                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> العنوان :</label>
                                            <div class="col-sm-9">
                                                <input type="link" value="{{$aboutus->about_title}}" class="form-control" name="about_title" placeholder=""
                                                    data-fv-field="" required>
                                                @error('about_title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">من نحن  : </label>
                                            <div class="col-sm-9">
                                                <textarea name="about"
                                                    value="" id="" cols="30"
                                                    rows="20">{{old('about' , $aboutus->about)}}</textarea>
                                                @error('about')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">  مقر الجمعية  : </label>
                                            <div class="col-sm-9">
                                                <textarea name="goal"
                                                    value="" id="" cols="30"
                                                    rows="20">{{old('goal' , $aboutus->goal)}}</textarea>
                                                @error('goal')
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
@endsection
