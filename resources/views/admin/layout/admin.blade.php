<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>لوحة التحكم</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap-rtl 3.3.4 -->
    <link rel="stylesheet" href="/assets/admin/bootstrap/css/bootstrap-rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/admin/dist/css/fontawesome-4.4.0.min.css">
    <!-- Ionicons -->
    <link rel="shortcut icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">

    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/admin/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/assets/admin/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/admin/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/assets/admin/plugins/iCheck/all.css">
    <link rel="stylesheet" href="/assets/admin/dist/css/add-img.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/assets/admin/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.1.4 -->
    <script src="/assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/assets/admin/dist/js/jquery.validate.js"></script>
@yield('head')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">




        <!-- Right side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <ul class="sidebar-menu">
                    <li class="active treeview">
                        <a href="/admin/index">
                            <i class="fa fa-home"></i> <span>الرئيسية</span>
                        </a>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>السلايدر</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="{{ route('slider.index') }}"><i class="fa fa-circle-o"></i> قائمة السلايدر</a>
                            </li>
                            <li><a href="{{ route('slider.create') }}"><i class="fa fa-circle-o"></i> إضافة السلايدر
                                    جديد</a></li>


                        </ul>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>كلمة رئيس الجمعية</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="/admin/show-boss-speach"><i class="fa fa-circle-o"></i>تعديل الكلمة</a>
                            </li>
                        </ul>

                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span> الحسابات البنكية </span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="/admin/show-bank-accounts"><i class="fa fa-circle-o"></i>تعديل الحسابات البنكية</a>
                            </li>
                        </ul>

                    </li>
                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span style="font-size: 13px;">  حسابات التواصل الاجتماعي </span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="/admin/show-social-accounts"><i class="fa fa-circle-o"></i>تعديل حسابات التواصل </a>
                            </li>
                        </ul>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span> رؤيتنا, رسالتنا, قيمنا </span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="/admin/show-our-message"><i class="fa fa-circle-o"></i>تعديل   </a>
                            </li>
                        </ul>

                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>أهداف الصفحة الئيسية</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="{{ route('goal-main.index') }}"><i class="fa fa-circle-o"></i> قائمة الأهداف</a>
                            </li>
                            <li><a href="{{ route('goal-main.create') }}"><i class="fa fa-circle-o"></i> إضافة هدف
                                    جديد</a></li>


                        </ul>

                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الفعاليات</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="{{ route('activity.index') }}"><i class="fa fa-circle-o"></i> قائمة الفعاليات</a>
                            </li>
                            <li><a href="{{ route('activity.create') }}"><i class="fa fa-circle-o"></i> إضافة فعالية
                                    جديد</a></li>


                        </ul>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الفعاليات الرئيسية</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="{{ route('actmain.index')}}"><i class="fa fa-circle-o"></i> قائمة الأنشطة</a>
                            </li>
                            <li><a href="{{ route('actmain.create') }}"><i class="fa fa-circle-o"></i> إضافة نشاط
                                    جديد</a></li>
                        </ul>

                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الأخبار </span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('news.index') }}"><i class="fa fa-circle-o"></i> قائمة الأخبار </a>
                            </li>
                            <li><a href="{{ route('news.create') }}"><i class="fa fa-circle-o"></i> إضافة خبر جديد</a>
                            </li>
                        </ul>
                    </li>
                        <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>المبادرات </span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('initiative.index') }}"><i class="fa fa-circle-o"></i> قائمة المبادرات </a>
                            </li>
                            <li><a href="{{ route('initiative.create') }}"><i class="fa fa-circle-o"></i> إضافة مبادرة جديد</a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>المخطط الهيكلي</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('orgchart.index') }}"><i class="fa fa-circle-o"></i> قائمة المخططات
                                </a></li>
                            <li><a href="{{ route('orgchart.create') }}"><i class="fa fa-circle-o"></i> إضافة مخطط هيكلي
                                    جديدة</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>سياسة المنظمة</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('orgpolicy.index') }}"><i class="fa fa-circle-o"></i> قائمة السياسات
                                </a></li>
                            <li><a href="{{ route('orgpolicy.create') }}"><i class="fa fa-circle-o"></i> إضافة سياسة
                                    جديد</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>التقارير المالية</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/admin/report/index"><i class="fa fa-circle-o"></i> قائمة التقارير
                                </a></li>
                            <li><a href="/admin/report/create"><i class="fa fa-circle-o"></i> إضافة تقرير
                                    جديد</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>التقارير السنوية</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/admin/yearly-report/index"><i class="fa fa-circle-o"></i> قائمة التقارير
                                </a></li>
                            <li><a href="/admin/yearly-report/create"><i class="fa fa-circle-o"></i> إضافة تقرير
                                    جديد</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>جدول الاعمال</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('workschedule.index') }}"><i class="fa fa-circle-o"></i> قائمة جداول
                                    الاعمال </a></li>
                            <li><a href="{{ route('workschedule.create') }}"><i class="fa fa-circle-o"></i> إضافة جدول
                                    اعمال جديد</a></li>
                        </ul>
                    </li>
                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الشركاء</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('partner.index') }}"><i class="fa fa-circle-o"></i> قائمة الشركاء </a>
                            </li>
                            <li><a href="{{ route('partner.create') }}"><i class="fa fa-circle-o"></i> إضافة  شريك
                                    جديد</a></li>
                        </ul>
                    </li>
                        <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الداعمين</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('supporter.index') }}"><i class="fa fa-circle-o"></i> قائمة الداعمين </a>
                            </li>
                            <li><a href="{{ route('supporter.create') }}"><i class="fa fa-circle-o"></i> إضافة  داعم
                                    جديد</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الأعضاء</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('staff.index') }}"><i class="fa fa-circle-o"></i> قائمة الأعضاء </a>
                            </li>
                            <li><a href="{{ route('staff.create') }}"><i class="fa fa-circle-o"></i> إضافة  عضو
                                    جديد</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>مدراء اللوحة</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('admin.index') }}"><i class="fa fa-circle-o"></i> قائمة المدراء </a>
                            </li>
                            <li><a href="{{ route('admin.create') }}"><i class="fa fa-circle-o"></i> إضافة  مدير
                                    جديد</a></li>
                        </ul>
                    </li>



                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>الاجتماعات</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('meeting.index') }}"><i class="fa fa-circle-o"></i> قائمة
                                    الاجتماعات</a></li>
                            <li><a href="{{ route('meeting.create') }}"><i class="fa fa-circle-o"></i> إضافة اجتماع
                                    جديد</a></li>
                        </ul>
                    </li>
                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>من نحن </span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="/admin/aboutus"><i class="fa fa-circle-o"></i>  تعديل من نحن  </a>
                            </li>
                        </ul>

                    </li>
                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>النافذة المنبثقة</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="/admin/popups"><i class="fa fa-circle-o"></i>  تعديل النافذة  </a>
                            </li>
                        </ul>

                    </li>
                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>تسجيل خروج</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="/logout"><i class="fa fa-circle-o"></i>تسجيل خروج   </a>
                            </li>
                        </ul>

                    </li>



                </ul>
            </section>
        </aside>

        @yield('main')


    </div>



    <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- Bootstrap 3.3.5 -->
    <script src="/assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/admin/plugins/select2/select2.full.min.js"></script>
    <!-- FastClick -->
    <script src="/assets/admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/assets/admin/dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="/assets/admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/assets/admin/dist/js/index.js"></script>

    <script src="/assets/admin/plugins/iCheck/icheck.min.js"></script>
    <script src="/assets/admin/plugins/tinymce/tinymce.min.js"></script>

    @yield('my-script')
</body>

</html>
