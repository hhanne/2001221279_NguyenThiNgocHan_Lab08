@extends('layouts.app')

@section('content')
<div style="padding: 20px;">
    <h2>Danh sách Danh mục và Sản phẩm</h2>

    @foreach($categories as $category)
        <div style="margin-bottom: 30px;">
            <h3>{{ $category->name }}</h3>
            <p>{{ $category->description }}</p>

            <table border="1" cellpadding="8" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Tồn kho</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category->products as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ number_format($p->price) }} VND</td>
                            <td>{{ $p->stock }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>
@endsection
