@props(['disabled' => false])

<textarea @disabled($disabled) {{$attributes->merge(['class'=> 'border-blue-500 focus:border-blue-500 rounded-md shadow-sm'])}}>
    {{$value ?? $slot}}
</textarea>