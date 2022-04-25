@extends('admin.layout.admin')
@section('head')
<style>
    .wrapper {
    min-height: 0%;
    }
</style>
@endsection

@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية</a></li>
                <li class="active">قائمة المدراء</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session()->has('delete'))
                        <div class="alert alert-danger">
                            {{ session('delete') }}
                        </div>
                    @endif
                    @if (session()->has('update'))
                        <div class="alert alert-success">
                            {{ session('update') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title"> <i class="fa fa-laptop"></i> قائمة المدراء </h3>
                                    <a href="{{route('admin.create')}}" class="btn btn-primary pull-left"><i
                                            class="fa fa-plus"></i> إضافة مدير جديد </a>

                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                            <tr>
                                                <th>رقم </th>
                                                <th>اسم المدير</th>
                                                <th>ايميل المدير</th>
                                                <th>العمليات</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($admins as $item)


                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{$item->email}}</td>

                                                    <td width="20%" align="center">

                                                        <a href="{{ route('admin.edit', $item->id) }}" title="تعديل"
                                                            type="button" class="btn btn-primary btn-xs">
                                                            <span class=" glyphicon glyphicon-edit" aria-hidden="true">
                                                            </span>
                                                            تعديل
                                                        </a>
                                                        <a
                                                href="/admin/admin/{{$item->id}}" onclick="return confirm('هل انت متاكد')" type="button"
                                                class="btn btn-danger btn-xs delete">
                                                <span class=" glyphicon glyphicon-trash" aria-hidden="true">
                                                </span>
                                                حذف
                                            </a>



                                    </td>
                                </tr>

                          @endforeach



                </tbody>

                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->

</div><!-- /.content-wrapper -->

