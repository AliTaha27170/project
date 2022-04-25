@extends('admin.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية</a></li>
                <li class="active">قائمة الأنشطة</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {{-- <div id="delete-success-div" class="alert alert-danger d-none">
                    تم حذف النشاط من قائمة الأنشطة
                </div> --}}
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
                                    <h3 class="box-title"> <i class="fa fa-laptop"></i> قائمة الأنشطة </h3>
                                    <a href="{{ route('activity.create') }}" class="btn btn-primary pull-left"><i
                                            class="fa fa-plus"></i> إضافة نشاط جديد </a>

                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                            <tr>
                                                <th>رقم </th>
                                                <th>اسم النشاط</th>
                                                <th>تفاصيل النشاط</th>
                                                <th>صورة النشاط</th>

                                                <th>العمليات</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody-act">
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($activity as $activit)


                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $activit->title }}</td>
                                                    <td>{!! \Illuminate\Support\Str::limit($activit->description ,  50 , '...') !!}</td>
                                                    <td><img src="{{ asset('storage/' . $activit->image) }}" width="300"></td>
                                                    <td width="20%" align="center">

                                                        <a href="{{ route('activity.edit', $activit->id) }}" title="تعديل"
                                                            type="button" class="btn btn-primary btn-xs">
                                                            <span class=" glyphicon glyphicon-edit" aria-hidden="true">
                                                            </span>
                                                            تعديل
                                                        </a>

                                                        <button  data-effect="effect-scale"
                                                            data-id="{{ $activit->id }}" data-toggle="modal"
                                                            href="#modaldemo9" title="حذف" type="button"
                                                            class="btn btn-danger btn-xs delete">
                                                            <span class=" glyphicon glyphicon-trash" aria-hidden="true">
                                                            </span>
                                                            حذف
                                                        </button>



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
    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف النشاط</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                   type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="/admin/activity/{activity}" method="post">
                    @csrf
                    @method('delete')

                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        {{-- <input class="form-control" name="section_name" id="section_name" type="text" readonly> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div><!-- /.content-wrapper -->
    <script>
        $('#modaldemo9').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);

        })
    </script>
@endsection




                                                        {{-- <form  style="display: inline" action="{{route('activity.destroy' , $activit->id)}}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                             <button type="submit" class="btn btn-danger btn-xs">حذف</button>
                                                         </form> --}}
                                                        {{-- <button data-id="{{$activit->id}}" title="حذف" type="button"
                                                            class="btn btn-danger btn-xs delete">
                                                            <span class=" glyphicon glyphicon-trash" aria-hidden="true">
                                                            </span>
                                                            حذف
                                                        </button>



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

    @endsection



    <div class="modal fade" id="DelModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                        data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">تأكيد عملية الحذف</h4>
                </div>
                <div class="modal-body">
                    <p>هل انت متأكد من حذف النشاط؟</p>
                    <input type="hidden" name="activity_id" id="activity_id" value="">
                </div>
                <div class="modal-footer">

                        <button id="delete-activity" type="button"class="btn btn-danger">حذف</button>

                </div>
            </div>
        </div>
    </div>
</div><!-- /.content-wrapper -->

@section('my-script')
<script>
    $(".delete").click(function () {
        id = $(this).data("id");
        $("#activity_id").val(id)
        $("#DelModal").modal('show')

    });

    $("#delete-activity").click(function(){
        del = $("#activity_id").val()
        //console.log(del)
        $.ajax({
            type: "get",
            url: "/admin/activity/delete/"+del,
            success: function (response) {
                $("#DelModal").modal('hide')
                // window.location.reload();
                top.location.href="/admin/activity";
                $("#delete-success-div").removeClass("d-none");

            }
        });
    })

    </script>
@endsection --}}
