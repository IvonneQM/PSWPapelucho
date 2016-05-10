    {{-- Modal --}}
    <div class="modal fade" id="modal-editar-apoderado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="yo"></h4>
                </div>
                <div class="modal-body">
                    <a hidden="hidden" id="id_href" href="{{route('administrador.apoderados.edit')}}"></a>
                    <a hidden="hidden"  id="id_update" href="{{route('administrador.apoderados.update')}}"></a>

                    <form id="id_prueba" method="PUT" action="{{route('administrador.apoderados.update')}}">

                    <div class="form-group">
                        {!!Form::label('rut','Rut: ')!!}
                        {!!Form::text('rut',null,['class'=>'form-control rut' , 'id'=>'rutApo', 'placeholder'=>'Rut usuario'])!!}
                        {!!Form::hidden('id',null,['id'=>'idUser'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('full_name','Nombre: ')!!}
                        {!!Form::text('full_name',null,['class'=>'form-control', 'id'=>'nameApo', 'placeholder'=>'Nombre de usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('email','Correo: ')!!}
                        {!!Form::text('email',null,['class'=>'form-control', 'id'=>'emailApo', 'placeholder'=>'Email de usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('password','Contraseña: ')!!}
                        {!!Form::password('password',['class'=>'form-control', 'id'=>'passApo', 'placeholder'=>'Password de usuario'])!!}
                    </div>

                    {!!Form::submit('Guardar',['class'=>'btn btn-primary', 'id' => 'btnSave'])!!}

                    </form>
                </div>
            </div>
        </div>
    </div>

