@extends('layouts.main')
@section('car')
<h1>ویرایش یک مجموعه</h1>

<div class="form-group">
    {!! Form::open(['method' => 'POST' , 'url' => route('catUpdate',['id' => $node->id])]) !!}
    {!! Form::label('title' , 'عنوان') !!}
    {!! Form::text('title' ,$node->title, ['class' =>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::submit('ویرایش' ,['class' =>'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
@endsection

@include('includes.form-errors')
