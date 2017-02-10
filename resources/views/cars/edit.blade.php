@extends('layouts.main')
@section('car')
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <strong>
         <h3>
           ویرایش خودرو 
         </h3> 
        </strong>
      <div class="box box-default">

        <div class="box-header with-border">
        
        {!! Form::model($cars, ['files'=> true ,'route'=>['cars.update', $cars->id] , 'method'=> 'PATCH']) !!}
          @include("cars.form")
         
        {!! Form::close() !!}
        <!-- /.box-body -->
        </div>


    </section>
@endsection