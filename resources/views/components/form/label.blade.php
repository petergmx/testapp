@props([
'name',
'labeltext'
])

<label for="{{ $name }}" class="mt-4 text-secondary">{{ ucwords($labeltext) }}</label>
