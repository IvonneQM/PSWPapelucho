<div class="row row-thumbnails">

    @foreach($archivos as $archivo)
        <div class="col-md-2">
            <a href="../{{$archivo->url}}" class="thumbnail" data-lightbox="archivo">
                <img src="../{{$archivo->url}}">
            </a>
        </div>
    @endforeach


</div>

{!! $archivos->render() !!}