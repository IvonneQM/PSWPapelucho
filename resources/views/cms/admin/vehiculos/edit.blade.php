{{-- Modal --}}
<div class="modal fade" id="modal-editar-vehiculo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="nameVehiculoTitle"></h4>
            </div>
            <div class="modal-body">
                <a hidden="hidden" id="id_href_vehiculo" href="{{route('administrador.vehiculos.edit')}}"></a>
                <a hidden="hidden" id="id_update_vehiculo" href="{{route('administrador.vehiculos.update')}}"></a>
                <form id="form_update_vehiculo" method="PUT" action="{{route('administrador.vehiculos.update')}}">
                    {!!Form::hidden('id',null,['id'=>'idVehiculo'])!!}
                    <div class="form-group">
                        {!!Form::label('patente','Patente: ')!!}
                        {!!Form::text('patente',null, ['id'=>'patenteVehiculo','class'=>'form-control', 'placeholder' => 'Ingresa la patente del vehículo'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('marca','Marca: ')!!}
                        {!!Form::text('marca',null, ['id'=>'marcaVehiculo','class'=>'form-control', 'placeholder' => 'Ingresa la marca del vehículo'])!!}
                    </div>
                    
					<div class="form-group">
                        {!!Form::label('modelo','Modelo: ')!!}
                        {!!Form::text('modelo',null, ['id'=>'modeloVehiculo','class'=>'form-control', 'placeholder' => 'Ingresa el modelo del vehículo'])!!}
                    </div>                  
                    {!!Form::submit('Guardar',['class'=>'btn btn-primary', 'id' => 'btn_save_vehiculo'])!!}
                </form>
            </div>
        </div>
    </div>
</div>