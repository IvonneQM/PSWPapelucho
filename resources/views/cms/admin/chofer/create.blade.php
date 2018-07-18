{{-- Modal --}}
<div class="modal fade" id="modal-chofer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Choferes</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['id'=>'form-register-chofer'],['class'=>'form-horizontal'],['route'=>'administrador.chofer.create', 'method' => 'POST', 'action' => 'registroChofer', 'role' => 'form'])!!}
                @include('cms.admin.chofer.partials.fields')
                {!!Form::submit('Guardar',['class'=>'btn btn-primary'] )!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>