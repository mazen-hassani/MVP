<x-site-layout>
<!-- main page area -->
    <x-video-container link="highway-loop.mp4"/>
    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            @foreach($images as $image)
                <x-image-container :image="$image->org_path"
                                   :thumbnail="$image->thumbnail_path"
                                   :username="$image->user->name"
                                   :description="$image->description"
                                   :id="$image->id"
                                   :upVotes="$image->countUpVotes()"
                                   :downVotes="$image->countDownVotes()">
                </x-image-container>
            @endforeach
        </div>
    </div>
    <x-footer company="Harbour.Space" designer="Mazen Hassani"/>
</x-site-layout>
