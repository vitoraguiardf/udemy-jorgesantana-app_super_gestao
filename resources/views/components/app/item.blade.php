@props(['item'])
<div id="item_{{ $item->id }}" class="card m-1 p-1 d-sm-inline-flex">
    <h6><strong>#{{ $item->id }}</strong> Name: {{ $item->name }}</h6>
    <small>Description: {{ $item->description }}</small>
    <div>{{ $slot }}</div>
</div>