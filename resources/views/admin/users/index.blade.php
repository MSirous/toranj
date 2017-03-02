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


<div class="container">
  <h2>نمایش تمام کاربران</h2> 
<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-plus-circle"></i> <a href="{{URL('/admin/users/create')}}">افزودن کاربر جدید </a></div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>نام و نام خانوادگی</th>
        <th>نام کاربری(ایمیل )‌</th>
        <th>تلفن</th>
        <th>آدرس</th>
        <th>استان - شهر</th>
        <th>وضعیت</th>
        <th>حالت</th>
        <th>create</th>
        <th>update</th>
      </tr>
    </thead>
    <tbody>

    @if($users)

    @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->locate["name"] }}</td>
        <td>{{ $user->role["name"] }}</td>
        <td>{{ $user->is_active ==1 ? 'فعال' : 'غیر فعال'}}</td>
        <td>{{ $user->created_at }}</td>
        <td>{{ $user->updated_at }}</td>
      </tr>
    @endforeach
    @endif
    </tbody>
  </table>
</div>

