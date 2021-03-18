@extends("master")

@section('content')
    <div class="container bg-light py-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6 bg-white px-3 py-4">
                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image" accept=".jpg, .png"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="Description">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" name="stocks" class="form-control" id="stock">
                    </div>
                    <button type="submit" name="addBTN" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
