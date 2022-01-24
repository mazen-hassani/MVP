<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="display: flex; justify-content: space-between">
                    Here is your Gallery :))
                    <a href="{{ route('images.create') }}"> Add new image</a>
                </div>
                @foreach(range(1,9) as $i)
                    <x-image-container image="portfolio_item_{{$i}}.png" user="" description="des {{$i}}"/>
                @endforeach
            </div>
        </div>
    </div>
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
</x-app-layout>
