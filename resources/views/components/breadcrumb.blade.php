<div class="breadcrumb {{ $class }}">
    <div class="l-container">
        <div class="breadcrumb__content">
            <{{ $tag ?? 'h1' }} class="breadcrumb__title">{{ $title }}</{{ $tag ?? 'h1' }}>
            {{ $slot }}
        </div>
    </div>
</div>