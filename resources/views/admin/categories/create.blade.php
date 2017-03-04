<h1>ساخت کاربر جدید</h1>
{!! Form::open(['method' => 'POST' , 'action' => "route('catStore',[Request::get('parent_id',1)])" , 'files' =>true]) !!}
  <div class="form-group">
    {!! Form::label('title' , 'نام و نام خانوادگی') !!}
    {!! Form::text('title' ,null, ['class' =>'form-control']) !!}

    {!! Form::label('state' , 'محل اقامت') !!}
{{--     {!! Form::select('cgroup_id' , App\Locate::pluck('title','id'), null, ['class' =>'form-control']) !!}
 --}}  </div>
  <div class="form-group">
    {!! Form::submit('ایجاد کاربر جدید' ,['class' =>'btn btn-primary']) !!}
  </div>

{!! Form::close() !!}

@include('includes.form-errors')
