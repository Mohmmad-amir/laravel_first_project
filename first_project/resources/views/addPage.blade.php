@extends("master")


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ route('addInfo') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="roll" class="form-label">Roll</label>
                    <input type="text" name="roll" class="form-control" id="roll">
                </div>
                {{-- <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address">
                </div> --}}
                <button type="submit" name="addBTN" class="btn btn-primary">Add INFO</button>
            </form>
        </div>
    </div>
@endsection
