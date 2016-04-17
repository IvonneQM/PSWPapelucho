{{-- Modal --}}

<div class="modal fade" id="modal-crear-galeria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Galeria</h4>
            </div>
            <div class="modal-body">

                {!!Form::open(['id'=>'form-register-galerias'],['class'=>'form-horizontal'],['route'=>'administrador.galerias.create', 'method' => 'POST', 'role' => 'form', 'action' => 'registroGaleria'])!!}
                @include('cms.admin.galerias.partials.fields')
                {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>