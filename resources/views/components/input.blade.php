@props(['label', 'name', 'type' => 'text', 'value' => ''])

<div class="mb-3">
    <label class="form-label fw-bold">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}"
        class="form-control @error($name) is-invalid @enderror">
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
