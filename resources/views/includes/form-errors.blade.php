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
