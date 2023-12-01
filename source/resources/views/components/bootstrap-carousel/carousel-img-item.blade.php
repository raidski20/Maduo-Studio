<div
    {{ $attributes->class(['carousel-item', 'active' => $isActive]) }}
>
    <img class="img-fluid img-thumbnail"
         loading="lazy"
         src="{{ $imgUrl }}"
    >
</div>
