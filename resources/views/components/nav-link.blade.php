@props(['active' => false])

<a class="{{ $active ? "font-bold" : "font-normal" }} btn btn-ghost btn-sm" {{ $attributes }}>
    <i class="fa-solid fa-circle-info text-secondary"></i>
    {{$slot}}
</a>
