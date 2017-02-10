<h3 class="box-title">اضافه کردن مقادیر مورد نظر</h3>
<div class="box-tools pull-right">
  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
</div>
</div>
<!-- /.box-header -->
<div class="box-body">
  @if (count($errors))
  <div class="alert alert-danger alert-dismissible">
    <ul>
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-ban"></i> warning!</h4>
      @foreach($errors->all() as $error)
      <li>{{$error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="row">
    <div class="col-md-6">
      <!-- /.form-group -->
      <div class="form-group" id="add_new_group">
        <div class="input-group">
          <div class="input-group-btn">
          <a href="" class="btn btn-info" id="add-new-btn">
           city
          </a>
          </div>
          <!-- /btn-group -->
          <input type="text" name="new_group" id="new_group" class="form-control">
        </div>
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        {!! Form::select('cgroup_id' , App\CarsGroup::pluck('name','id'), null, ['class' =>'form-control']) !!} 
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        {!! Form::select('cgroup_id' , App\CarsGroup::pluck('name','id'), null, ['class' =>'form-control']) !!}
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        {!! Form::select('cgroup_id' , App\CarsGroup::pluck('name','id'), null, ['class' =>'form-control']) !!}
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        {!! Form::select('cgroup_id' , App\CarsGroup::pluck('name','id'), null, ['class' =>'form-control']) !!}
      </div>
      <!-- /.form-group -->
    </div>
    <!-- /.col -->
    <div class="col-md-6">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-info">State</button>
          </div>
          <!-- /btn-group -->
          <input type="text" class="form-control">
        </div>
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-info">وسیله نقلیه</button>
          </div>
          <!-- /btn-group -->
          <input type="text" class="form-control">
        </div>
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-info">شرکت سازنده</button>
          </div>
          <!-- /btn-group -->
          <input type="text" class="form-control">
        </div>
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-info">مدل</button>
          </div>
          <!-- /btn-group -->
          <input type="text" class="form-control">
        </div>
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-info">نوع کاربری</button>
          </div>
          <!-- /btn-group -->
          <input type="text" class="form-control">
        </div>
      </div>
      <!-- /.form-group -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->


<!-- 2- sabte forosh khodro main project -->

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">ثبت آگهی فروش خودرو</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            {!! Form::text('phone', null, ['class' =>'form-control']) !!}
            {{-- <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask=""> --}}
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            {!! Form::select('cgroup_id' , App\CarsGroup::pluck('name','id') , null, ['class' => 'form-control']) !!} 
          </div>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-btn">
              {!! Form::select('state' , App\Cars::pluck('state','id') , null, ['class' => 'form-control']) !!} 
            </div>
          </div>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <div class="form-group">
            {!! Form::select('city' , App\Cars::pluck('city','id') , null, ['class' => 'form-control']) !!}
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- body tablls -->
  <div class="box-header with-border"> 
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
       <div class="form-group">
        {!! Form::select('vehicle' , App\Cars::pluck('vehicle','id') , null, ['class' => 'form-control']) !!}    
      </div>
      <div class="form-group">
        {!! Form::select('company' , App\Cars::pluck('company','id') , null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::select('model' , App\Cars::pluck('model','id') , null, ['class' => 'form-control']) !!} 
      </div>
      <div class="form-group">
        {!! Form::select('price' , App\Cars::pluck('price','id') , null, ['class' => 'form-control']) !!}  
      </div>
      <!-- /.form-group -->
    </div>
    <!-- /.col -->
    <div class="col-md-6">
      <div class="form-group">
        <div class="form-group">
          <!-- /.form-group -->
          <div class="form-group">
            {!! Form::select('color' , App\Cars::pluck('color','id') , null, ['class' => 'form-control']) !!}
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            {!! Form::select('remove_color' , App\Cars::pluck('remove_color','id') , null, ['class' => 'form-control']) !!}
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            {!! Form::select('tires' , App\Cars::pluck('tires','id') , null, ['class' => 'form-control']) !!}
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <div class="form-group">
              {!! Form::select('gearbox' , App\Cars::pluck('gearbox','id') , null, ['class' => 'form-control']) !!}
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>


<!-- next body -->
<div class="box-header with-border"> 
</div>
<div class="box-body">
  <div class="row">
    <div class="col-md-6">
     <div class="form-group">           
      <div class="row">
        <label>مدل:</label>                
        <div class="col-xs-4">
          {!! Form::datetime('date_birth', null, ['class' =>'form-control']) !!}
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" placeholder="شمسی">
        </div>
      </div>
    </div>
    <div class="form-group">
      Work:
      {!! Form::text('work', null, ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
        {!! Form::text('installment', null, ['class' =>'form-control']) !!}
      </div>
    </div>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
        {!! Form::text('installment_price', null, ['class' =>'form-control']) !!}
      </div>
    </div>
    <!-- /.form-group -->
  </div>
  <!-- /.col -->
  <div class="col-md-6">
    <div class="form-group">
      <div class="form-group">
        <!-- /.form-group -->
        <div class="form-group">
          <label>توضیحات فنی دومتور گیربکس شاسی و..</label>
          {!! Form::textarea('info' ,  null, ['class' => 'form-control', 'rows'=>3] ) !!}
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          {!! Form::file('photo') !!}
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox"> پذیرش قوانین سایت
            </label>
          </div>              
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
  </div>
</div>
<div class="box-footer">
  <button type="submit" class="btn btn-primary">{{ ! empty($cars->id) ? "Update" : "Save" }}</button> &nbsp
  <a href=""><button class="btn btn-primary">Cancel</button></a>
</div>

</div>
</div>
</div>
</div>

<!-- 3- foroshe anvaye trayler project -->
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">ثبت آگهی فروش انواع تریلر</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>US phone masksdfsdf:</label>

          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 999-99999 &quot;" data-mask="">
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <select class="form-control">
            <option selected="selected">Alabama</option>
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <select class="form-control">
            <option selected="selected">Alabama</option>
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <select class="form-control">
            <option selected="selected">Alabama</option>
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <select class="form-control">
            <option selected="selected">Alabama</option>
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn btn-info">Action</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn btn-info">Action</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn btn-info">Action</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn btn-info">Action</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn btn-info">Action</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

@section('form-script')

<script>

$("#add-new-btn").click(function(){
  var newGroup = $("#new_group");
  var inputGroup = newGroup.closest('.input-group');
  

  $.ajax({
    url: "{{ route("groups.store") }} ",
    method: 'post',
    data:
    {
        name: $("#new_group").val(),
        _token: $("input[name=_token]").val()
    },
    success: function(cars_group)
    {
      if (cars_group.id != null ) 
      {
        inputGroup.removeClass('has-error');
        inputGroup.next('.text-danger').remove();

        var newOption =  $('<option> </option>')
          .attr('value' , group.id)
          .attr('selected', true)
          .text(group.name);

        $("selected[name=cgroup_id] ")
        .append (newOption);
        newGroup.val("");

      }
    },
    error: function(xhr)
    {
      var errors = xhr.responseJSON;
      var error = errors.name[0];
      if (error) 
      {
        
        inputGroup.next('.text-danger').remove();

        inputGroup
        .addClass('has-error')
        .after('<p class = "text-danger" >' + error + '</p>');
      }
      //console.log(xhr);
    }
  
  });

});



</script>

@endsection





