@props([
  'name',
  'type' => "text",
  'labeltext'
])

<x-form.label name="{{ $name }}" labeltext="{{ $labeltext ?? $name }}" />
          <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }} />

{{--<x-form.error name="{{ $name }}" />--}}
{{-- In your template file use 'labeltext' attribute in '<htmltag labeltext="" ... >' to define label text you want to use for a field; if no 'labeltext' attribute is found then value of '<htmltag name="" ... >' attribute is used. --}}
