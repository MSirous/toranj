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
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> AdminPanel</a></li>
        <li class="active">AdminPanel</li>
      </ol>
    </section>

    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success btn-embossed" href="{{ url('admin/category/add?parent=1') }}">
                <i class="fa fa-plus"></i>
                افزودن
            </a>

        </div>
    </div>
    <br>
    <div class="col-md-12">
        <div class="tree">
            <ul>
                @foreach ($items as $item)

                    <?php
                    $href = url('admin/category/add?parent=' . $item->id);
                    $deleteHref = url('admin/category/delete/' . $item->id);
                    $editHref = url('admin/category/edit/' . $item->id);
                    ?>

                    <li style="::before:{{$item->depth*20}}px">
                        <span class="bar" style="width:{{$item->depth*20}}px"></span>
                        <div class='lithree'>
                            <span>&nbsp;</span>

                            <span class='node'>{{$item->title}}
                                @if ($item->parent_id != null)
                                    <a class='btn btn-xs btn-danger' href='{{$deleteHref}}'>-</a>
                                @endif
                                <a class='btn btn-xs btn-success' href='{{$href}}'>+</a>
                                <a class='btn btn-xs btn-primary' style="width:auto" href='{{$editHref}}'>ویرایش</a>
                             </span>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>



