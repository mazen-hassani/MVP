<x-site-layout>
    <x-video-container link="highway-loop.mp4"/>
    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            @foreach(range(1,9) as $i)
                <x-image-container image="portfolio_item_{{$i}}.png" user="submitted by {{$i}}" description="des {{$i}}"/>
            @endforeach
        </div>
    </div>
    <x-footer company="Harbour.Space" designer="Testo"/>
</x-site-layout>
