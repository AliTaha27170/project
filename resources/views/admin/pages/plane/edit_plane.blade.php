@extends('admin.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="admin"><i class="fa fa-home"></i> الرئيسية </a></li>
                <li><a href="admin/offer-table">قائمة الخطط الاستراتيجة</a></li>
                <li class="active">تعديل خطة استراتيجية </li>




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
                            <h3 class="box-title"> اضافة خطة استراتيجية <small>جديدة</small> </h3>
                            <i class="pull-left header fa fa-th"></i>
                        </div><!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" id="addOfferForm" method="post" action="{{ route('plane.update' , $plan->id) }}"
                            class="form-horizontal" >
                            @csrf
                            @method('put')
                            <div class="box-body col-md-12">
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">الخطة : </label>
                                            <div class="col-sm-9">
                                                <textarea name="plane"
                                                   cols="30"
                                                    rows="20">{{ old('plane' , $plan->plane) }}</textarea>
                                                @error('plane')
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
