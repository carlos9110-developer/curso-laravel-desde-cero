{{-- con esto estamos extendiendo la plantilla o de la plantilla layouts.master --}} 
    
@extends('layouts.master')

{{-- aca estamos colocando lo que espera el yield de nombre content de la plantilla que estamos extendiendo --}}

@section('content')
    <h1>List of Products</h1>

    <a class="btn btn-success" href="{{ route('products.create') }}">Create</a>

    @empty ($products)
        <div class="alert alert-warning">
            The list of products is empty
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <a class="btn btn-link" href="{{ route('products.show', ['product' => $product->id]) }}">
                                Show
                            </a>
                            <a class="btn btn-link" href="{{ route('products.edit', ['product' => $product->id]) }}">
                                Edit
                            </a>
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endempty

@endsection


