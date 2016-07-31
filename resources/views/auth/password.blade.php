<meta name="csrf-token" content="{{ csrf_token() }}">

<div id="modal-recuperar-pass" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Recuperar Contraseña</h4>

            </div>
            <div class="modal-body">


                <form role="form" method="POST" id="form-recuperar-pass" action="/password/email">
                    {!! csrf_field() !!}

                    <div>
                        <div class="form-group">
                            {!! Form::label('mail','Correo Electrónico: ') !!}
                            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese correo electrónico']) !!}
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            {!!Form::submit('Recuperar',['class'=>'btn btn-primary', 'id'=>'recuperar-boton'])!!}
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>