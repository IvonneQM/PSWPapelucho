{{-- Modal --}}

<div class="modal fade" id="modal-editar-parvulo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="parv"></h4>
            </div>
            <div class="modal-body">

                <a hidden="hidden" id="id_href_parvulo" href="{{route('administrador.parvulos.edit')}}"></a>
                <a hidden="hidden"  id="id_update_parvulo" href="{{route('administrador.parvulos.update')}}"></a>

                <form id="form_update_parvulo" method="PUT" action="{{route('administrador.parvulos.update')}}">

                    {!!Form::hidden('id',null,['id'=>'idParvulo'])!!}
                    <div class="form-group">
                        {!!Form::label('rut','Rut: ')!!}
                        {!!Form::text('rut',null, ['id'=>'rutParvulo','class'=>'form-control', 'placeholder' => 'Ingresa el RUT del usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('full_name','Nombre: ')!!}
                        {!!Form::text('full_name',null, ['id'=>'full_nameParvulo','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('nivel','Nivel: ')!!}
                        <select name="nivel_id" class="form-control" id="nivel_id">
                            @foreach($niveles as $nivel)
                                <option value="{{$nivel->getKey()}}">{{$nivel->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!!Form::label('jornada','Jornada: ')!!}
                        <select name="jornada_id" class="form-control" id="jornada_id">
                            @foreach($jornadas as $jornada)
                                <option value="{{$jornada->getKey()}}">{{$jornada->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!!Form::label('jardin','Jardin: ')!!}
                        <select name="jardin_id" class="form-control" id="jardin_id">
                            @foreach($jardines as $jardin)
                                <option value="{{$jardin->getKey()}}">{{$jardin->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    {!!Form::submit('Guardar',['class'=>'btn btn-primary', 'id' => 'btn_save_parvulo'])!!}
                </form>


            </div>
        </div>

    </div>
</div>