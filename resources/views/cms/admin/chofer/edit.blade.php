{{-- Modal --}}
<div class="modal fade" id="modal-editar-chofer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="nameChofertitle"></h4>
            </div>
            <div class="modal-body">
                <a hidden="hidden" id="id_href_chofer" href="{{route('administrador.chofer.edit')}}"></a>
                <a hidden="hidden" id="id_update_chofer" href="{{route('administrador.chofer.update')}}"></a>

                <form id="id_form_chofer" method="PUT" action="{{route('administrador.chofer.update')}}">
                    {{--Estos campos se utilizan debido a que chrome no reconoce el autocomplete:off y
                    autocompleta solo el primer campo de cada tipo--}}
                    <input style="display:none">
                    <input type="password" style="display:none">

                    <div class="form-group">
                        {!!Form::label('rut','Rut: ')!!}
                        {!!Form::text('rut',null,['class'=>'form-control rut', 'id'=>'rutChofer', 'placeholder'=>'Rut usuario'])!!}
                        {!!Form::hidden('id',null,['id'=>'idChofer'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('full_name','Nombre: ')!!}
                        {!!Form::text('full_name',null,['class'=>'form-control', 'id'=>'nameChofer', 'placeholder'=>'Nombre de usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('email','Correo: ')!!}
                        {!!Form::text('email',null,['class'=>'form-control', 'id'=>'emailChofer', 'placeholder'=>'Email de usuario', 'autocomplete' => 'off'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('password','Contraseña: ')!!}
                        {!!Form::password('password',['class'=>'form-control', 'id'=>'passChofer', 'placeholder'=>'Password de usuario', 'autocomplete' => 'off'])!!}
                    </div>
                    {!!Form::submit('Guardar',['class'=>'btn btn-primary', 'id' => 'btnSaveChofer'])!!}
                </form>
            </div>
        </div>
    </div>
</div>

