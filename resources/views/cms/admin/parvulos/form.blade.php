    {{-- Modal --}}

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Parvulos</h4>
                </div>
                <div class="modal-body">
                    <div class="row">



                        <div class="col-md-6">{!!Form::open(['id'=>'form-register-parvulo'],['class'=>'form-horizontal'],['route'=>'registroParvulo', 'method' => 'POST', 'role' => 'form', 'action' => 'registroParvulo'])!!}
                            {!! csrf_field() !!}
                            {{--
                            <form class="form-horizontal">
                                <div class="form-group has-success has-feedback">
                                    <label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status">
                                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                        <span id="inputSuccess3Status" class="sr-only">(success)</span>
                                    </div>
                                </div>
                                <div class="form-group has-success has-feedback">
                                    <label class="control-label col-sm-3" for="inputGroupSuccess2">Input group with success</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                                        </div>
                                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                        <span id="inputGroupSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                </div>
                            </form>
                            --}}

                            <div class="form-group">
                                {!!Form::label('rut','Rut: ')!!}
                                {!!Form::text('rut',null, ['id'=>'rut','class'=>'form-control', 'placeholder' => 'Ingresa el RUT del usuario'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('full_name','Nombre: ')!!}
                                {!!Form::text('full_name',null, ['id'=>'full_name','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del usuario'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('email','Correo: ')!!}
                                {!!Form::Email('email',null, ['id'=>'email','class'=>'form-control', 'placeholder' => 'Ingresa el correo del usuario'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('password','Contraseña: ')!!}
                                {!!Form::text('password',null, ['id'=>'password','class'=>'form-control', 'placeholder' => 'Ingresa la contraseña del usuario'])!!}
                            </div>
                            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                            {!!Form::close()!!}
                        </div>
                        <div class="col-md-6">
                            @include('cms.admin.parvulos.lista')


                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>