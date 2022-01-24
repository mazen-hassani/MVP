<div class="col-md-4 col-sm-6">
    <div class="portfolio-item">
        <a href="{{"/storage/".$image}}" data-lightbox="image-1"><div class="thumb">
                <div class="hover-effect">
                    <div class="hover-content">
                        <h1>{{ $description }} </h1>
                        @if($username)
                            <p>submitted by {{ $username }}</p>
                        @endif
                    </div>
                </div>
                <div class="image">
                    <img src={{"/storage".$thumbnail}}>
                </div>
            </div></a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
