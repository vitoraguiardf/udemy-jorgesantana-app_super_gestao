<div id="footer">
    <x-site.logo />
    <ul>
        @unless (Route::is('home'))
            <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
        @endif


        @unless (Route::is('vendors'))
            <li><a href="{{ route('vendors') }}">{{ __('Vendors') }}</a></li>
        @endif
        @unless (Route::is('customers'))
            <li><a href="{{ route('customers') }}">{{ __('Customers') }}</a></li>
        @endif
        @unless (Route::is('products'))
            <li><a href="{{ route('products') }}">{{ __('Products') }}</a></li>
        @endif
        @unless (Route::is('sales'))
            <li><a href="{{ route('sales') }}">{{ __('Sales') }}</a></li>
        @endif


        @unless (Route::is('about'))
            <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
        @endif
        @unless (Route::is('contact'))
            <li><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
        @endif
    </ul>
</div>