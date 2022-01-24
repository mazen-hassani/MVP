@extends('books.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Image</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Files</strong>
                    <div id = 'files'>
                        <button type="button" onclick="addFile();"> Add images !!! </button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <script>
        function addFile (){
            const description = document.createElement("textarea");
            description.setAttribute ("class", "form-control");
            description.setAttribute ("style", "height:150px");
            description.setAttribute ("name", "descriptions[]");
            description.setAttribute ("placeholder", "Description");

            const label = document.createElement("label");
            label.setAttribute ("for", "files[]");

            const file = document.createElement("input");
            file.setAttribute ("type", "file");
            file.setAttribute ("name", "files[]");
            file.setAttribute ("accept", "image/png, image/jpeg");

            const files = document.getElementById('files');
            files.appendChild(label);
            files.appendChild(file);
            files.appendChild(description);
        }
    </script>
@endsection
