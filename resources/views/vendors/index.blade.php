@extends('layouts.main', [ 'title' => __('Vendor')])
@section('content')

    @foreach (\App\Models\Vendor::limit(10)->get() as $item)
        <x-app.item :item="$item">
            <p>
                Total de Produtos: {{ $item->products()->count() }}
                <a class="btn btn-link" data-bs-toggle="collapse" href="#productsDetails_{{ $item->id }}" role="button" aria-expanded="false" aria-controls="productsDetails_{{ $item->id }}">Detalhes</a>
                <div class="collapse multi-collapse" id="productsDetails_{{ $item->id }}">
                    <div class="card card-body">
                        <h5>Produtos</h5>
                        @foreach ($item->products()->get() as $product)
                            <x-app.item :item="$product" />
                        @endforeach
                    </div>
                </div>
            </p>
            <p>
                Total de Vendas: {{ $item->sales()->count() }}
                <a class="btn btn-link" data-bs-toggle="collapse" href="#salesDetails_{{ $item->id }}" role="button" aria-expanded="false" aria-controls="salesDetails_{{ $item->id }}">Detalhes</a>
                <div class="collapse multi-collapse" id="salesDetails_{{ $item->id }}">
                    <div class="card card-body">
                        <h5>Vendas</h5>
                        @foreach ($item->sales()->get() as $sale)
                            <x-app.item :item="$sale" />
                        @endforeach
                    </div>
                </div>
            </p>
        </x-app.item>
    @endforeach
    
    <x-site.footer />
@endsection