<h1>Mis Párvulos</h1>
@foreach(Auth::user()->parvulos as $parvulo)
        <li><a href="parvulo={{$parvulo->id}}">{!! $parvulo->full_name !!}</a></li>
@endforeach
