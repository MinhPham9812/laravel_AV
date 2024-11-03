<div class="tabs {{ $class ?? '' }}">
    <div class="l-container">
        <ul class="tabs__list">
            @foreach($tabs as $tab)
                <li class="tabs__item {{ in_array(Request::path(), $tab['active_routes'] ?? [$tab['route']]) ? 'tabs__item--active' : '' }}">
                    @if(isset($tab['arrow_left']))
                        <a class="tabs__arrow tabs__arrow--left fa-solid fa-chevron-left" 
                           href="{{ url($tab['arrow_left']) }}"></a>
                    @endif
                    
                    <a class="tabs__link" href="{{ url($tab['route']) }}">{{ $tab['label'] }}</a>
                    
                    @if(isset($tab['arrow_right']))
                        <a class="tabs__arrow tabs__arrow--right fa-solid fa-chevron-right" 
                           href="{{ url($tab['arrow_right']) }}"></a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>