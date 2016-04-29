{{-- Modal --}}

<div class="modal fade bs-example-modal-lg" id="modal-editar-parvulo" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="parv">Parvulos</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">

                        <a hidden="hidden" id="id_href_parvulo" href="{{route('administrador.parvulos.edit')}}"></a>
                        <a hidden="hidden"  id="id_update_parvulo" href="{{route('administrador.parvulos.update')}}"></a>

                        <form id="form-register-parvulo" method="PUT" action="{{route('administrador.parvulos.update')}}">

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
                            {!!Form::label('jornada','Jornada: ')!!}
                            {!!Form::select('jornada')!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('nivel','Nivel: ')!!}
                            {!!Form::select('nivel')!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('jardin','Jardin: ')!!}
                            {!!Form::select('jardin')!!}
                        </div>

                        {!!Form::submit('Guardar',['class'=>'btn btn-primary', 'id' => 'btn_save_parvulo'])!!}
                        </form>

                    </div>

                    {!! Form::open(['route' => ['administrador.parvulos.destroy', ':PARVULO_ID'],'method' => 'DELETE', 'id' => 'form-delete-parvulo', 'action' => 'eliminarParvulo']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>