@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm sản phẩm mới</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <x-input label="Tên sản phẩm" name="name" />
        <x-input label="Giá" name="price" type="number" />
        <x-input label="Tồn kho" name="stock" type="number" />

        <div class="mb-3">
            <label class="form-label fw-bold">Danh mục</label>
            <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                <option value="">-- Chọn danh mục --</option>
                @foreach ($categories as $c)
                    <option value="{{ $c->id }}" {{ old('category_id') == $c->id ? 'selected' : '' }}>
                        {{ $c->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary">Lưu</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
