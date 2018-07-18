{{-- Modal --}}
<div class="modal fade" id="modal-asociar-chofer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Asociar a Chofer</h4>
            </div>
                {!! csrf_field() !!}
            {{-- <input type="text" id="user_id" name="user_id" value="{{$idvehiculos->id}}"> --}}
            <div class="modal-body">
                    {{-- <a hidden="hidden" id="id_href_vehiculo" href="{{route('administrador.vehiculos.edit')}}"></a> --}}
                    <form id="form-register-asociacion" method="POST" action="{{route('asociacion')}}">
                            {!! csrf_field() !!}
                            {!!Form::text('id',null,['id'=>'id-Vehiculo'])!!}
                                <div class="form-group">
                                    {!!Form::label('chofer','Chofer: ')!!}
                                       <select name="user_id" class="form-control" id="user_id">
                                           @foreach($choferes as $chofer)
                                       <option value="{{$chofer->getKey()}}">{{$chofer->full_name}}</option>
                                           @endforeach
                                       </select>
                                </div>
                            {!!Form::submit('Guardar',['class'=>'btn btn-primary'] )!!}
                     </form>
            </div>
        </div>
    </div>
</div>