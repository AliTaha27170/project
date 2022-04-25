@extends('admin.layout.admin')


@section('main')
            </aside>
     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

          <ol class="breadcrumb">
            <li><a href="/admin/index"><i class="fa fa-home"></i> الرئيسية</a></li>
            <li class="active">قائمة الاجتماعات</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-xs-12">

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> <i class="fa fa-users"></i> قائمة الاجتماعات </h3>
                  <a href="{{route('meeting.create')}}" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> إضافة اجتماع جديد </a>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>رقم </th>
                        <th>عنوان الاجتماع</th>
                        <th>تفاصيل الاجتماع</th>
                        <th>نوع الاجتماع</th>
                        <th>الملف</th>
                        <th>العمليات</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $i=1;
                      @endphp
                    @foreach ($meetings as $meeting)


                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$meeting->title}}</td>
                        <td>{{$meeting->description}}</td>

                        <td>{{$meeting->r1 == 'abnormal' ? "مهم" : "عادي"}}</td>
                          <td>{{$meeting->file}}</td>
                        <td width="20%" align="center">


                          <a href="{{route('meeting.edit' , $meeting->id)}}" class="btn btn-primary btn-xs">تعديل</a>


                          <button  data-effect="effect-scale"
                          data-id="{{ $meeting->id }}" data-toggle="modal"
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
<h6 class="modal-title">حذف التقرير</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                 type="button"><span aria-hidden="true">&times;</span></button>
</div>
<form action="/admin/meeting/{meeting}" method="post">
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
