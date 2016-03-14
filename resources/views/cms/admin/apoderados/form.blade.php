    {{-- Modal --}}
    @include('partials.errors')
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear Apoderado</h4>
                </div>
                <div class="modal-body">

                    {!!Form::open(['id'=>'formRegister'],['class'=>'form-horizontal'],['route'=>'Cms/Admin/ApoderadoController.store', 'method' => 'POST'])!!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        {!!Form::label('rut','Rut: ')!!}
                        {!!Form::text('rut',null, ['id'=>'user','class'=>'form-control', 'placeholder' => 'Ingresa el RUT del usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('full_name','Nombre: ')!!}
                        {!!Form::text('full_name',null, ['id'=>'user','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('email','Correo: ')!!}
                        {!!Form::text('email',null, ['id'=>'user','class'=>'form-control', 'placeholder' => 'Ingresa el correo del usuario'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('password','Contraseña: ')!!}
                        {!!Form::text('password',null, ['id'=>'user','class'=>'form-control', 'placeholder' => 'Ingresa la contraseña del usuario'])!!}
                    </div>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>