    {{-- Modal --}}

    <div class="modal fade" id="modal-crear-apoderados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear Apoderado</h4>
                </div>
                <div class="modal-body">
                    {!!Form::open(['id'=>'form-register-apoderado'],['class'=>'form-horizontal'],['route'=>'administrador.apoderados.create', 'method' => 'POST', 'role' => 'form', 'action' => 'registroApoderado'])!!}
                    @include('cms.admin.apoderados.partials.fields')
                    {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>