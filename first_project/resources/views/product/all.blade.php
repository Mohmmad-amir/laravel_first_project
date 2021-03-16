@extends("master")

@section('content')
    <div class="container  py-5">
        @if (session('message'))
            <div class="alert alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <p>{{ session('message') }}</p>
            </div>
        @endif
        <div class="my-4">
            <a href="{{ route('products.create') }}">Add New Product</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Stocks</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)


                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->stocks }}</td>
                                <td>
                                    <a href="{{ route('products.show', ['id' => $product->id]) }}"
                                        class="btn btn-sm btn-primary">Show</a>
                                </td>
                                <td>
                                    <a href="{{ route('products.edit', ['id' => $product->id]) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                </td>
                                <td>

                                    <form method="post" action="{{ route('products.destroy', ['id' => $product->id]) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class=" btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="justify-content-center">
                    {{ $products->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
