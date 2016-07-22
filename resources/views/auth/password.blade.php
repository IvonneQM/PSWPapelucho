<div id="modal-recuperar-pass" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Recuperar Contraseña</h4>

            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="/password/email">
                    {!! csrf_field() !!}

                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div>
                        <div class="form-group">
                            {!! Form::label('mail','Correo Electrónico: ') !!}
                            {!! Form::text('mail', null, ['class'=>'form-control', 'placeholder'=>'Ingrese correo electrónico']) !!}
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    {!!Form::submit('Recuperar',['class'=>'btn btn-primary'])!!}
                </div>
            </div>
        </div>
    </div>
</div>