{{-- Modal --}}
<div class="modal fade" id="modal-editar-directiva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="nameDirectivaTitle"></h4>
            </div>
            <div class="modal-body">
                <a hidden="hidden" id="id_href_directiva" href="{{route('administrador.directiva.edit')}}"></a>
                <a hidden="hidden" id="id_update_directiva" href="{{route('administrador.directiva.update')}}"></a>

                <form id="id_form_directiva" method="PUT" action="{{route('administrador.directiva.update')}}">
                    {{--Estos campos se utilizan debido a que chrome no reconoce el autocomplete:off y
                    autocompleta solo el primer campo de cada tipo--}}
                    <input style="display:none">
                    <input type="password" style="display:none">

                    <div class="form-group">
                        {!!Form::label('rut','Rut: ')!!}
                        {!!Form::text('rut',null,['class'=>'form-control rut', 'id'=>'rutDirectiva', 'placeholder'=>'Rut usuario'])!!}
                        {!!Form::hidden('id',null,['id'=>'idDirectiva'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('full_name','Nombre: ')!!}
                        {!!Form::text('full_name',null,['class'=>'form-control', 'id'=>'nameDirectiva', 'placeholder'=>'Nombre de usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('email','Correo: ')!!}
                        {!!Form::text('email',null,['class'=>'form-control', 'id'=>'emailDirectiva', 'placeholder'=>'Email de usuario', 'autocomplete' => 'off'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('password','Contraseña: ')!!}
                        {!!Form::password('password',['class'=>'form-control', 'id'=>'passDirectiva', 'placeholder'=>'Password de usuario', 'autocomplete' => 'off'])!!}
                    </div>
                    {!!Form::submit('Guardar',['class'=>'btn btn-primary', 'id' => 'btnSaveDirectiva'])!!}
                </form>
            </div>
        </div>
    </div>
</div>

