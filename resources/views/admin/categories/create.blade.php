<h1>ساخت یک مجموعه</h1>

{!! Form::open(['method' => 'POST' , 'files' =>true]) !!}  <div class="form-group">
    {!! Form::label('title' , 'عنوان') !!}
    {!! Form::text('title' ,null, ['class' =>'form-control']) !!}

 </div>
  <div class="form-group">
    {!! Form::submit('افزودن' ,['class' =>'btn btn-primary']) !!}
  </div>

{!! Form::close() !!}

@include('includes.form-errors')
