@extends('admin.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية </a></li>
                <li><a href="/admin/popups">النافذة المنبثقة</a></li>
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
                            <h3 class="box-title">   تعديل النافذة المنبثقة </h3>
                            <i class="pull-left header fa fa-th"></i>
                        </div><!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" method="post" action="/admin/popups/update"
                            class="form-horizontal" >
                            @csrf
                            @method('PUT')
                            <div class="box-body col-md-12">
                                <div class="col-md-8">

                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> العنوان :</label>
                                            <div class="col-sm-9">
                                                <input type="link" value="{{$popup->title}}" class="form-control" name="title" placeholder=""
                                                    data-fv-field="" required>
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> الوصف :</label>
                                            <div class="col-sm-9">
                                                <input type="link" class="form-control" value="{{$popup->description}}" name="description" placeholder=""
                                                    data-fv-field="" required>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> تنشيط الإعلان :</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="active" value="1" {{($popup->active == 1) ? 'checked':''}}>
                                              <label class="form-check-label" for="exampleRadios1">
                                                نشط
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="active"  value="0" {{($popup->active == 0) ? 'checked':''}}>
                                              <label class="form-check-label" for="exampleRadios1">
                                                غير نشط
                                              </label>
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
