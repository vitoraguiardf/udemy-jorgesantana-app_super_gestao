@extends('layouts.main', [ 'title' => __('Customer')])
@section('content')

    @foreach (\App\Models\Customer::limit(20)->get() as $item)
        <x-app.item :item="$item">
            Total de Vendas: {{ $item->sales()->count() }}
            <a class="btn btn-link" data-bs-toggle="collapse" href="#salesDetails_{{ $item->id }}" role="button" aria-expanded="false" aria-controls="salesDetails_{{ $item->id }}">Detalhes</a>
            <div class="collapse multi-collapse" id="salesDetails_{{ $item->id }}">
                <div class="card card-body">
                    <h5>{{ __('Vendas') }}</h5>
                    @foreach ($item->sales()->get() as $sale)
                        <x-app.item :item="$sale" />
                    @endforeach
                </div>
            </div>
        </x-app.item>
    @endforeach

    <x-site.footer />
@endsection