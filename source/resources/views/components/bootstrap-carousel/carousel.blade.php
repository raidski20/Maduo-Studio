<div id="{{ $carouselId }}"
     class="carousel slide carousel-fade"
     data-bs-ride="carousel"
>

    <div class="carousel-inner">
        {{ $slot }}
    </div>

    <button class="carousel-control-prev" type="button"
            data-bs-target="#{{ $carouselId }}"
            data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button"
            data-bs-target="#{{ $carouselId }}"
            data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
