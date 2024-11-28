<div class="slider {{ $class }}">
    <div class="l-container">
        <div class="slider__content">
            <{{ $tag ?? 'h1' }} class="slider__title">{{ $title }}</{{ $tag ?? 'h1' }}>
            {{ $slot }}
        </div>
    </div>
</div>