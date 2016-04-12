    {{-- Modal --}}
    <div class="modal fade" id="modal-editar-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="Admin"></h4>
                </div>
                <div class="modal-body">
                    <a hidden="hidden" id="id_href_admin" href="{{route('administrador.administradores.edit')}}"></a>
                    <a hidden="hidden"  id="id_update_admin" href="{{route('administrador.administradores.update')}}"></a>

                    <form id="id_form_admin" method="PUT" action="{{route('administrador.administradores.update')}}">

                    <div class="form-group">
                        {!!Form::label('rut','Rut: ')!!}
                        {!!Form::text('rut',null,['class'=>'form-control', 'id'=>'rutAdmin', 'placeholder'=>'Rut usuario'])!!}
                        {!!Form::hidden('id',null,['id'=>'idAdmin'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('full_name','Nombre: ')!!}
                        {!!Form::text('full_name',null,['class'=>'form-control', 'id'=>'nameAdmin', 'placeholder'=>'Nombre de usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('email','Correo: ')!!}
                        {!!Form::text('email',null,['class'=>'form-control', 'id'=>'emailAdmin', 'placeholder'=>'Email de usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('password','Contraseña: ')!!}
                        {!!Form::password('password',['class'=>'form-control', 'id'=>'passAdmin', 'placeholder'=>'Password de usuario'])!!}
                    </div>

                    {!!Form::submit('Guardar',['class'=>'btn btn-primary', 'id' => 'btnSaveAdmin'])!!}

                    </form>
                </div>
            </div>
        </div>
    </div>

