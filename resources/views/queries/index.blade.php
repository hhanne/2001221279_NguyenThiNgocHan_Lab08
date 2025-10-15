@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">🎓 Bài tập 08: Truy vấn Eloquent Nâng cao</h2>

    {{-- 1️⃣ Sản phẩm có giá > 100000 --}}
    <h4>1️⃣ Sản phẩm có giá > 100,000 VND</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Danh mục</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ number_format($p->price) }} VND</td>
                    <td>{{ $p->category->name ?? 'Không có' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- 2️⃣ Số sản phẩm trong mỗi danh mục --}}
    <h4 class="mt-5">2️⃣ Số sản phẩm trong từng danh mục</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Danh mục</th>
                <th>Tên danh mục</th>
                <th>Số sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->products_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- 3️⃣ Danh sách sinh viên và số môn học --}}
    <h4 class="mt-5">3️⃣ Danh sách sinh viên kèm số môn học đã đăng ký</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Sinh viên</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số môn học</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->courses_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
