@extends('layouts.app')

@section('content')
<h2>Danh sách User và thông tin Profile</h2>

<table border="1" cellpadding="8">
  <tr>
    <th>ID</th>
    <th>Tên người dùng</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
  </tr>
  @foreach($users as $u)
  <tr>
    <td>{{ $u->id }}</td>
    <td>{{ $u->name }}</td>
    <td>{{ $u->email }}</td>
    <td>{{ $u->profile->address ?? 'Chưa có' }}</td>
    <td>{{ $u->profile->phone ?? 'Chưa có' }}</td>
  </tr>
  @endforeach
</table>
@endsection
