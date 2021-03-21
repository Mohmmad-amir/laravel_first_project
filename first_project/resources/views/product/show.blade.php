@extends("master")

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 offset-md-2">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Stocks</th>

                        </tr>
                    </thead>
                    <tbody>



                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td><img class="rounded-circle" style="width: 80px"
                                    src="{{ asset('asset/image/' . $product->image) }}" alt="">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->stocks }}</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
