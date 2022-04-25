@extends('admin.layout.admin')

<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">-->
@section('main')
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 166px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

                لوحة التحكم
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <style>
                .info-box-text {
                    font-size: 14px;
                    margin-top: 12px;
                    font-weight: bold;
                }

                .info-box-number {
                    font-size: 24px;
                }

            </style>
            <!-- Info Boxes Style 2 -->
           





            <!-- Main row -->
            <div class="row">
                <!-- Left col -->

                <section class="col-lg-12 connectedSortable ui-sortable">

                    <div class="box box-navy">
                        <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
                            <i class="fa fa-tasks"></i>
                            <h3 class="box-title"> القائمة الرئيسية </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body" style="text-align: center;">
                            
                            <div class="col-12-sm justify-content-center">
                                <a href="{{ route('slider.index') }}" type="button" class="btn btn-primary">السلايدر</a>
                                <a href="/admin/show-boss-speach" type="button" class="btn btn-success">كلمة رئيس الجمعية</a>
                            </div>
                            <br>
                            <div class="col-12-sm justify-content-center">
                                <a href="/admin/show-bank-accounts" type="button" class="btn btn-primary">الحسابات البنكية</a>
                                <a href="/admin/show-social-accounts" type="button" class="btn btn-success">حسابات التواصل الاجتماعي</a>
                            </div>
                            <br>
                            <div class="col-12-sm justify-content-center">
                                <a href="/admin/show-our-message" type="button" class="btn btn-primary">قيمنا ورسالتنا</a>
                                <a href="{{ route('goal-main.index') }}" type="button" class="btn btn-success">أهداف الرئيسية</a>
                            </div>
                            <br>
                            <div class="col-12-sm justify-content-center">
                                <a href="{{ route('activity.index') }}" type="button" class="btn btn-primary">الفعاليات</a>
                                <a href="{{ route('actmain.index')}}" type="button" class="btn btn-success">فعاليات الرئيسية</a>
                            </div>
                            <br>
                            <div class="col-12-sm justify-content-center">
                                <a <a href="{{ route('news.index') }}" type="button" class="btn btn-primary">الأخبار</a>
                                <a href="{{ route('orgchart.index') }}" type="button" class="btn btn-success">المخطط الهيكلي</a>
                            </div>
                            <br>
                            <div class="col-12-sm justify-content-center">
                                <a href="{{ route('orgpolicy.index') }}" type="button" class="btn btn-primary">اللوائح والسياسات</a>
                                <a href="/admin/report/index" type="button" class="btn btn-success">التقارير المالية</a>
                            </div>
                            <br>
                            <div class="col-12-sm justify-content-center">
                                <a href="/admin/yearly-report/index" type="button" class="btn btn-primary">التقارير السنوية</a>
                                <a href="{{ route('workschedule.index') }}" type="button" class="btn btn-success">جدولة الاعمال</a>
                            </div>
                            <br>
                            <div class="col-12-sm justify-content-center">
                                <a href="{{ route('partner.index') }}" type="button" class="btn btn-primary">الشركاء</a>
                                <a href="{{ route('staff.index') }}" type="button" class="btn btn-success">الأعضاء</a>
                            </div>
                            <br>
                            <div class="col-12-sm justify-content-center">
                                <a href="{{ route('admin.index') }}" type="button" class="btn btn-primary">مدراء اللوحة</a>
                                <a href="{{ route('meeting.index') }}" type="button" class="btn btn-success">الاجتماعات</a>
                            </div>
                            <br>
                            <div class="col-12-sm justify-content-center">
                                <a href="/admin/aboutus" type="button" class="btn btn-primary">من نحن</a>
                                <a href="/admin/popups" type="button" class="btn btn-success">النافذة المنثقبة</a>
                            </div>
                            <br>
                            
                            <!--<div class="table-responsive">-->
                            <!--    <table class="table no-margin">-->
                            <!--        <thead>-->
                            <!--            <tr>-->
                            <!--                <th>رقم </th>-->
                            <!--                <th>الاسم</th>-->
                            <!--                <th>البريد الالكتروني</th>-->
                            <!--                <th>العنوان</th>-->
                            <!--                <th>النص</th>-->



                            <!--            </tr>-->
                            <!--        </thead>-->
                            <!--         <tbody>-->
                                 
                                       
                                            
                                        
                            <!--              <tr>-->
                            <!--                  <td></td>-->
                            <!--                  <td></td>-->
                            <!--                  <td></td>-->
                            <!--                  <td></td>-->
                            <!--                  <td></td>-->
                            <!--              </tr>-->
                                      
                                        



                            <!--          </tbody> -->

                            <!--    </table>-->
                            <!--</div>-->
                            <!-- /.table-responsive -->


                        </div>
                        <!-- /.box-body -->
                    </div>



                </section><!-- right col -->

                
            </div><!-- /.row (main row) -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
