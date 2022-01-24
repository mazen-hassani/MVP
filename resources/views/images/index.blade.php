@extends('images.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Your Personal Gallery</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('images.create') }}"> Create New Image</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Image</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($images as $image)
            <tr>
                <td><img src="/storage{{ $image->thumbnail_path }}" alt={{ $image->description }}></td>
{{--                {{ dd ( "/storage/".$image->images[0]->thumbnail_path ) }}--}}
                <td>{{ $image->description }}</td>
                <td>
                    <form action="{{ route('images.destroy',$image->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $images->links() !!}

@endsection
