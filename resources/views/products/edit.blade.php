@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sửa sản phẩm</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <x-input label="Tên sản phẩm" name="name" :value="$product->name" />
        <x-input label="Giá" name="price" type="number" :value="$product->price" />
        <x-input label="Tồn kho" name="stock" type="number" :value="$product->stock" />

        <div class="mb-3">
            <label class="form-label fw-bold">Danh mục</label>
            <select name="category_id" class="form-select">
                @foreach ($categories as $c)
                    <option value="{{ $c->id }}" {{ $product->category_id == $c->id ? 'selected' : '' }}>
                        {{ $c->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Cập nhật</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
