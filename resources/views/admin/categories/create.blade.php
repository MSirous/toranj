@extends('layouts.main')
@section('car')
<h1>ساخت یک مجموعه</h1>

<div class="form-group">
{!! Form::open(['method' => 'POST' , 'url' => route('catStore',['parent_id' => Request::get('parent_id',1)])]) !!}
    {!! Form::label('title' , 'عنوان') !!}
    {!! Form::text('title' ,null, ['class' =>'form-control']) !!}

 </div>
  <div class="form-group">
    {!! Form::submit('افزودن' ,['class' =>'btn btn-primary']) !!}
  </div>

{!! Form::close() !!}
@endsection

@include('includes.form-errors')
