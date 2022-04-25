
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
          <ol class="breadcrumb">
           <li><a href="<?php echo base_url()?>admin"><i class="fa fa-home"></i> الرئيسية </a></li>
            <li><a href="<?php echo base_url()?>admin/product-table">قائمة المنتجات</a></li>
           <li class="active">تعديل بيانات المنتج</li>
          
          
            
            
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
                  <h3 class="box-title"> بيانات المنتج <small>تعديل</small> </h3>
                  <i class="pull-left header fa fa-th"></i>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                <form role="form" id="signupForm1" action="<?php echo base_url()?>admin/saveupdateproduct/<?php echo $product->ID?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                  <div class="box-body col-md-12">
                  
                  <div class="col-md-12">
              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom">
               
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab">بيانات عامة</a></li>
                  <li><a href="#tab_2-2" data-toggle="tab">المواصفات الفنية </a></li>
                  <li><a href="#tab_3-2" data-toggle="tab">صور المنتج</a></li>

                </ul>
                <div class="tab-content">
                  <div class="tab-pane active fade in" id="tab_1-1">
                    <div class="row">
                    <div class="col-md-8">

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">اسم المنتج :</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="" data-fv-field="" value="<?= $product->NAME?>">
                          </div>
                        </div>

                      </div>


                      <div class="col-md-12">
                        <div class="form-group" >
                          <label class="col-sm-3 control-label">القسم :</label>
                          <div class="col-sm-9">
                            <select class="form-control " id="category" name="category">
                              <option value="0">اختر القسم</option>
                              <option value="1" <?php if($product->CAT_ID == 1){?> selected <?php }?> >أجهزة الجوال</option>
                              <option value="2" <?php if($product->CAT_ID == 2){?> selected <?php }?> >أجهزة اللابتوب</option>
                              <option value="3" <?php if($product->CAT_ID == 3){?> selected <?php }?> >الأجهزة اللوحية</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">السعر :</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="price" name="price" placeholder="" data-fv-field="" value="<?= $product->PRICE?>">
                          </div>
                        </div>

                      </div>

                      <div class="col-md-12">
                        <div class="form-group" >
                          <label class="col-sm-3 control-label"> العملة :</label>
                          <div class="col-sm-9">
                            <select class="form-control " id="currency" name="currency">
                              <option value="0">اختر نوع العملة</option>
                              <option value="1" <?php if($product->CURR_ID == 1){?> selected <?php }?> >شيكل جديد </option>
                              <option value="2" <?php if($product->CURR_ID == 2){?> selected <?php }?> >دولار أمريكي</option>
                            </select>
                          </div>
                        </div>
                      </div>



                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">معلومات أكثر : </label>
                          <div class="col-sm-9">
                            <textarea id="details" name="details" id="" cols="30" rows="20"><?php echo $product->DETAILS ?></textarea>                      </div>
                        </div>

                      </div>

                    </div>

                    <div class="col-md-4">

                      <div class="file-upload">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">إضافة صورة</button>

                        <div class="image-upload-wrap">
                          <input class="file-upload-input" type='file' id="img" name="img" onchange="readURL(this);" accept="image/*" />
                          <div class="drag-text">
                            <h3>إضافة صور للمنتج </h3>
                          </div>
                        </div>
                        <div class="file-upload-content">
                          <img class="file-upload-image" src="<?php echo base_url().$product->IMG ?>" alt="your image" />
                          <div class="image-title-wrap">
                            <button style="font-weight: bold;" class="btn btn-danger" type="button" onclick="removeUpload()" class="remove-image">حذف <span class="image-title"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane fade" id="tab_2-2">
                    <div class="row">
                  <div class="col-md-8" id="pro_plus">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">الشاشة :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="screen" name="screen" placeholder="" data-fv-field="" value="<?php echo $props[0]->PRO_VALUE?>">
                        </div>
                      </div>




                  </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">السعة التخزينية :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="memory_size" name="memory_size" placeholder="" data-fv-field="" value="<?php echo $props[1]->PRO_VALUE?>">
                        </div>
                      </div>

                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">المعالج :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="cpu" name="cpu" placeholder="" data-fv-field="" value="<?php echo $props[2]->PRO_VALUE?>">
                        </div>
                      </div>

                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">البطارية :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="battery" name="battery" placeholder="" data-fv-field="" value="<?php echo $props[3]->PRO_VALUE?>">
                        </div>
                      </div>

                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">نظام التشغيل :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="os" name="os" placeholder="" data-fv-field="" value="<?php echo $props[4]->PRO_VALUE?>">
                        </div>
                      </div>

                    </div>

                    <?php
                    for ($i=5;$i<count($props);$i++){
                    ?>
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="pro_n_id<?php echo $i-4?>" placeholder="الاسم" data-fv-field="" value="<?php echo $props[$i]->PRO_NAME?>">
                            </div>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="pro_p_id<?php echo $i-4?>" placeholder="الوصف" data-fv-field="" value="<?php echo $props[$i]->PRO_VALUE?>">
                            </div>
                          </div>
                        </div>
                    <?php
                    }
                    ?>
                  </div>
                      <span id="btn-plus" class="btn btn-primary" style=""><i class="fa fa-plus"></i> مواصفات أخرى</span>
                    </div>

                     
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane fade" id="tab_3-2">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">اضف صور المنتج :</label>
                            <div class="col-sm-9">
                              <input type="file" multiple id="images" class="form-control" name="images[]" placeholder="" accept="image/png,image/gif,image/jpeg" >
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
                  <div class="box-footer"><!-- .box-footer -->
                    <button type="submit" class="btn  btn-primary">تخزين</button>
                    <button type="reset"  class="btn  btn-default">تفريغ الحقول</button>
                  </div><!-- /.box-footer -->
                </form>
                <!-- form end -->
              </div><!-- /.box -->

       
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script>
        var num=<?php echo count($props)-4?>;
        $("#btn-plus").click(function(){
          $("#pro_plus").append('<div class="col-md-12">' +
              '<div class="form-group">' +
              '<div class="col-sm-3">' +
              '<input type="text" class="form-control" name="pro_n_id'+(num)+'" placeholder="الاسم" data-fv-field="">' +
              '</div>' +
              '<div class="col-sm-9">' +
              '<input type="text" class="form-control" name="pro_p_id'+(num++)+'" placeholder="الوصف" data-fv-field="">' +
              '</div>' +
              '</div>' +
              '</div>');
        });

      </script>

      <script type="text/javascript">

          $( document ).ready( function () {


              $( "#signupForm1" ).validate( {
                  rules: {
                      name: "required",
                      img: "required",
                      price: {
                          required: true,
                          maxlength: 4
                      },
                      category: {
                          required: true,
                          min:1
                      },

                      currency: {
                          required: true,
                          min:1
                      },

                      screen: "required",
                      memory_size: "required",
                      cpu: "required",
                      battery: "required",
                      os: "required"
                  },
                  messages: {
                      name: "الرجاء إدخال اسم المنتج",
                      img: "الرجاء إختيار صورة",
                      category: {
                          required: "الرجاء إختيار القسم",
                          min: "الرجاء إختيار القسم"
                      },
                      price: {
                          required: "الرجاء إدخال سعر المنتج",
                          maxlength: "الحد الأقصى 4 أرقام "
                      },
                      currency: {
                          required: "الرجاء إختيار عملة المنتج",
                          min: "الرجاء إختيار عملة المنتج"
                      },

                      screen: "الرجاء إدخال القيمة",
                      memory_size: "الرجاء إدخال القيمة",
                      cpu: "الرجاء إدخال القيمة",
                      battery: "الرجاء إدخال القيمة",
                      os: "الرجاء إدخال القيمة"
                  },
                  errorElement: "em",
                  errorPlacement: function ( error, element ) {
                      // Add the `help-block` class to the error element
                      error.addClass( "help-block" );

                      // Add `has-feedback` class to the parent div.form-group
                      // in order to add icons to inputs
                      element.parents( ".col-sm-9" ).addClass( "has-feedback" );

                      if ( element.prop( "type" ) === "checkbox" ) {
                          error.insertAfter( element.parent( "label" ) );
                      } else {
                          error.insertAfter( element );
                      }

                      // Add the span element, if doesn't exists, and apply the icon classes to it.
                      if ( !element.next( "span" )[ 0 ] ) {
                          $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                      }
                  },
                  success: function ( label, element ) {
                      // Add the span element, if doesn't exists, and apply the icon classes to it.
                      if ( !$( element ).next( "span" )[ 0 ] ) {
                          $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                      }
                  },
                  highlight: function ( element, errorClass, validClass ) {
                      $( element ).parents( ".col-sm-9" ).addClass( "has-error" ).removeClass( "has-success" );
                      $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
                  },
                  unhighlight: function ( element, errorClass, validClass ) {
                      $( element ).parents( ".col-sm-9" ).addClass( "has-success" ).removeClass( "has-error" );
                      $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
                  }
              } );
          } );
      </script>