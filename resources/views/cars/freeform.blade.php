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
           افزودن گروه ماشین ها
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
