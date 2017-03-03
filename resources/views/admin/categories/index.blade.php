@extends ('admin.layout')

@section ('content')

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

            <?php $items = App\Models\Category::root()->getDescendants(); ?>


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


@endsection


