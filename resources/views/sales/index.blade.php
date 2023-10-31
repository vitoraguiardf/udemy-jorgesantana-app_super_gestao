@extends('layouts.main', [ 'title' => __('Sales')])
@section('content')

    @foreach (\App\Models\Sale::limit(20)->get() as $item)
        <div  id="item_{{ $item->id }}" class="card m-1 p-1 d-sm-inline-flex">
            <p>Vendor Name: {{$item->vendor->name}}</p>
            <p>Customer Name: {{$item->customer->name}}</p>
            <p>
                Total de Produtos: {{ $item->products()->count() }}
                <a class="btn btn-link" data-bs-toggle="collapse" href="#productsDetails_{{ $item->id }}" role="button" aria-expanded="false" aria-controls="productsDetails_{{ $item->id }}">Detalhes</a>
                <div class="collapse multi-collapse" id="productsDetails_{{ $item->id }}">
                    <div class="card card-body">
                        <h5>Produtos</h5>
                        @foreach ($item->products()->get() as $product)
                            <x-app.item :item="$product">
                                Total: {{ $product->count() }} <small class="text text-danger">(Resolver esta relação)</small>
                            </x-app.item>
                        @endforeach
                    </div>
                </div>
            </p>
        </div>
    @endforeach

    <x-site.footer />
@endsection