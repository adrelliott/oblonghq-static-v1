@php
    if ($path == $link)
        $selected = "border-oblong-blue-dark";
@endphp 

<a class="xw-1/3 mx-4 py-2 md:pt-2 mt-2 text-oblong-blue-dark md:mt-0 uppercase font-extralight font-sans border-b-2 border-white hover:border-oblong-blue-dark focus:outline-none focus:shadow-outline {{  $selected ?? '' }}"
    href="{{ $link ?? 'Define a link' }}"
    >
    {{ $label ?? 'Define a label' }}
</a>
