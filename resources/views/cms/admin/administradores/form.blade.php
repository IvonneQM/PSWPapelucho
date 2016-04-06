    {{-- Modal --}}

    <div class="modal fade" id="modal-administradores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear Administradores</h4>
                </div>
                @include('partials.errors')
                <div class="modal-body">
                    {!!Form::open(['id'=>'form-register-administrador'],['class'=>'form-horizontal'],['route'=>'administrador.administradores.store', 'role' => 'form'])!!}
                    @include('cms.admin.administradores.partials.fields')

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>