{{-- Modal --}}
<div class="modal fade" id="modal-crear-vehiculos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Vehículos</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['id'=>'form-register-vehiculos'],['class'=>'form-horizontal'],['route'=>'administrador.vehiculos.create', 'method' => 'POST', 'role' => 'form', 'action' => 'registroVehiculo'])!!}
                @include('cms.admin.vehiculos.partials.fields')
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
