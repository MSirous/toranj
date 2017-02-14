@extends('layouts.main')
@section('car')

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">خودرو</h3>
    <div class="box-tools pull-right">
      <div class="has-feedback">
      <form action="{{route('cars.index')}} " method="">
        <input type="text" name="term" value="{{ Request::get('term')}}" class="form-control input-sm" placeholder="Search Mail">
        <span class="glyphicon glyphicon-search form-control-feedback"></span>
      </form>
        
      </div>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">
    <div class="mailbox-controls">
      تست
      <!-- /.pull-right -->
    </div>
    <div class="table-responsive mailbox-messages">
      <table class="table table-hover table-striped">
        @foreach($cars as $car)
        <tbody>
          <tr>
            <td >
              <a href="">
                <?php $photo = ! is_null($car->photo) ? $car->photo : 'default.png' ?>
                {!! Html::image('uploads/' . $photo , $car->name, ['class' => 'media-object' , 'width' =>150 , 'height' => 100]) !!}
              </td>
            </a>
            <td class="mailbox-name"><b><a href="read-mail.html">{{$car->date_birth}}, {{$car->model}}, {{$car->company}} </a></td></b>
            <td class="mailbox-subject"><b>{{$car->model}},{{$car->company}}</b> </br>
            </br> - {{$car->state}}
          </br> - {{$car->color}}, {{$car->remove_color}}, {{$car->greabox}}
        </br> - کارکرد {{$car->work}}کیلومتر
      </td>
      <td class="mailbox-attachment"></td>
      <td>{{$car->price}}
      </td>
      {!! Form::open(['method'=>'DELETE', 'route'=>['cars.destroy', $car->id]]) !!}
      <td>
      <a href="{{ route('cars.edit', ['id' => $car->id ]) }}">
       <button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit">
       </i></a>
     </button>
   </td>
      </td>
        <td class="mailbox-date">
          <button onclick = "return confirm('Are You Sure?!!');" type="submit" class="btn btn-default btn-sm">
            <i class="fa fa-trash-o"></i>
          </button>
      {!! Form::close() !!}
      </td>
 </tr>
 @endforeach
</tbody>
</table>
<!-- /.table -->
</div>
<!-- /.mail-box-messages -->
</div>
<!-- /.box-body -->
<div class="box-footer no-padding">
  <div class="mailbox-controls">
    <!-- Check all button -->
    <div class="box-footer clearfix">
      {!! $cars->appends( Request::query())->render() !!} 
    </div>
    @endsection