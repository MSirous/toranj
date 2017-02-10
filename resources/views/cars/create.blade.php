@extends('layouts.main')
@section('car')
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
        {!! Form::open(['route'=>'cars.store', 'files' => true]) !!}

          @include("cars.form")
        {!! Form::close() !!}
        <!-- /.box-body -->
        </div>


    </section>
@endsection