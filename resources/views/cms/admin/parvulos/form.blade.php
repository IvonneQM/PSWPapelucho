    {{-- Modal --}}

    <div class="modal fade bs-example-modal-lg"  id="modal-parvulos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Parvulos</h4>
                </div>
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">

                            {!!Form::open(['id'=>'form-register-parvulo'],['class'=>'form-horizontal'],['route'=>'administrador.parvulos.create', 'method' => 'POST', 'role' => 'form', 'action' => 'registroParvulo'])!!}
                            @include('cms.admin.parvulos.partials.fields')
                            {!!Form::close()!!}

                        </div>
                        <div class="col-md-6 list-parvulos">

                                @include('cms.admin.parvulos.lista')


                                {!! Form::open(['route' => ['administrador.parvulos.destroy', ':PARVULO_ID'],'method' => 'DELETE', 'id' => 'form-delete-parvulo', 'action' => 'eliminarParvulo']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>