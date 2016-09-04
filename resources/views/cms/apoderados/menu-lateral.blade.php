<li><a class="item-menu" href="#"> Mis Párvulos</a></li>
<ul>
    @foreach(Auth::user()->parvulos as $parvulo)
        <li><a class="item-menu" href="parvulo={{$parvulo->id}}">{!! $parvulo->full_name !!}</a></li>
    @endforeach
</ul>