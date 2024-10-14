<!--<a {{$attributes}}>{{$slot}}</a>!-->

@props(['aktif' => false, 'type' => 'a'])

@if ($type === 'a')
    <a class="{{ $aktif ? 'text-red-500 font-bold' : 'text-black-300 hover:text-red-500' }} 
            rounded-md px-3 py-2 font-medium" 
       aria-current="{{ $aktif ? 'page' : 'false' }}" 
       {{ $attributes }}>
        {{ $slot }}
    </a>
@else
    <button class="{{ $aktif ? 'text-red-500 font-bold' : 'text-black-300 hover:text-red-500' }} 
                   rounded-md px-3 py-2 font-medium" 
            aria-current="{{ $aktif ? 'page' : 'false' }}" 
            {{ $attributes }}>
        {{ $slot }}
    </button>
@endif




