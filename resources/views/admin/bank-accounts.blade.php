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
                        <h3 class="box-title"> تعديل الحسابات  </h3>
                        <i class="pull-left header fa fa-th"></i>
                    </div><!-- /.box-header -->

                    <form role="form" id="signupForm1" action="/admin/update-bank-accounts" onsubmit="return check()"
                        method="post" class="form-horizontal">
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
                                                                <label class="col-sm-3 control-label">  الحساب الاول :</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$accounts->firstaccount}}" type="text" name="firstaccount" id="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="col-sm-3 control-label">  الحساب الثاني :</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$accounts->secondaccount}}" type="text" name="secondaccount" id="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">  الحساب الثالث :</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" value="{{$accounts->thiredaccount}}" type="text" name="thiredaccount" id="">
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
