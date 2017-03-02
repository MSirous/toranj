@include('layouts.partials.navbar')

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
@include('layouts.partials.sidebar')
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Panel
        <small>Toranj</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> AdminPanel</a></li>
        <li class="active">Users</li>
      </ol>
    </section>
<h1>ساخت کاربر جدید</h1>
{!! Form::open(['method' => 'POST' , 'action' => 'AdminUsersController@store' , 'files' =>true]) !!}
  <div class="form-group">
    {!! Form::label('name' , 'نام و نام خانوادگی') !!}
    {!! Form::text('name' ,null, ['class' =>'form-control']) !!}

    {!! Form::label('phone' , 'شماره موبایل') !!}
    {!! Form::text('phone' ,null, ['class' =>'form-control']) !!}

    {!! Form::label('state' , 'محل اقامت') !!}
    {!! Form::select('cgroup_id' , App\Locate::pluck('name','id'), null, ['class' =>'form-control']) !!}

    {!! Form::label('email' , 'نام کاربری') !!}
    {!! Form::email('email' ,null, ['class' =>'form-control']) !!}

    {!! Form::label('password' , 'گذرواژه') !!}
    {!! Form::text('password' ,null, ['class' =>'form-control']) !!}   

    {!! Form::label('role_id' , 'بخش کاربری') !!}
    {!! Form::select('role_id' ,['' => 'انتخاب کن یکی از گزینه ها را'] + $roles ,null, ['class' =>'form-control']) !!}   

    {!! Form::label('is_active' , 'وضعیت') !!}
    {!! Form::select('is_active' , array(0 => 'غیر فعال' ,1 => 'فعال' ), 0 ,['class' =>'form-control']) !!}   

    {!! Form::label('photo_id' , 'عکس پرسونلی') !!}
    {!! Form::file('photo_id' ,null, ['class' =>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('ایجاد کاربر جدید' ,['class' =>'btn btn-primary']) !!}
  </div>

{!! Form::close() !!}

@include('includes.form-errors')

