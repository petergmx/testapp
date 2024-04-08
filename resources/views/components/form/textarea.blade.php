@props([
  'name',
  'labeltext'
])

    <x-form.label name="{{ $name }}" labeltext="{{ $labeltext ?? $name }}" />
    <textarea name="{{ $name }}" id="{{ $name }}" {{ $attributes }}>{{ $attributes['value'] ?? old('description') }}</textarea>

    {{-- <x-form.error name="{{ $name }}" /> --}}
