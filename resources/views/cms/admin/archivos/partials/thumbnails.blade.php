<div class="row row-thumbnails">

    @foreach($archivos as $archivo)

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
            <a href="../{{$archivo->url}}" class="thumbnail" data-lightbox="archivo">

               {{-- <img src="../{{$archivo->url}}">--}}
                <img src="{!! $archivo->getThumbnail() !!}" alt="..." />


            </a>
        </div>
    @endforeach

</div>

{!! $archivos->render() !!}

