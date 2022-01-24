<x-site-layout>
<!-- main page area -->
    <x-video-container link="highway-loop.mp4"/>
    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            @foreach($images as $image)
                <x-image-container image_org_path={{$image->org_path}} image_thumbnail_path={{$image->thumbnail_path}} username="{{$image->user_id}}" description="{{$image->description}}"/>
            @endforeach
        </div>
    </div>
    <x-footer company="Harbour.Space" designer="Mazen Hassani"/>
</x-site-layout>
