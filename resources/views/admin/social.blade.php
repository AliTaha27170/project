@extends('admin.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية </a></li>
                <li><a href="/admin/show-social-accounts">قائمة حسابات التواصل الاجتماعي</a></li>
                <li class="active">تعديل  الحسابات</li>




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
                            <h3 class="box-title">تعديل حسابات التواصل الاجتماعي </h3>
                            <i class="pull-left header fa fa-th"></i>
                        </div><!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" method="post" action="/admin/update-social-accounts"
                            class="form-horizontal" >
                            @csrf
                            @method('PUT')
                            <div class="box-body col-md-12">
                                <div class="col-md-8">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> الفيسبوك :</label>
                                            <div class="col-sm-9">
                                                <input type="link" value="{{$accounts->facebook}}" class="form-control" name="facebook" placeholder=""
                                                    data-fv-field="" required>
                                                @error('facebook')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> الانستغرام :</label>
                                            <div class="col-sm-9">
                                                <input type="link" value="{{$accounts->instagram}}" class="form-control" name="instagram" placeholder=""
                                                    data-fv-field="" required>
                                                @error('instagram')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> تويتر :</label>
                                            <div class="col-sm-9">
                                                <input type="link" class="form-control" value="{{$accounts->twitter}}" name="twitter" placeholder=""
                                                    data-fv-field="" required>
                                                @error('twitter')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> يوتيوب :</label>
                                            <div class="col-sm-9">
                                                <input type="link" class="form-control" value="{{$accounts->youtube}}" name="youtube" placeholder=""
                                                    data-fv-field="" required>
                                                @error('youtube')
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
