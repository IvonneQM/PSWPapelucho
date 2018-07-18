{{-- Modal --}}
<div class="modal fade" id="modal-duenos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Dueños</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['id'=>'form-register-duenos'],['class'=>'form-horizontal'],['route'=>'administrador.duenos.create', 'method' => 'POST', 'action' => 'registroDuenos', 'role' => 'form'])!!}
                @include('cms.admin.duenos.partials.fields')
                {!!Form::submit('Guardar',['class'=>'btn btn-primary'] )!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>