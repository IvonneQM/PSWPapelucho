    {{-- Modal --}}

    <div class="modal fade" id="modal-editar-apoderado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Editar Apoderado :</h4>
                </div>
                <div class="modal-body">

                    {!!Form::model($user, ['id'=>'form-editar-apoderado'],['class'=>'form-horizontal'],['route'=>'editarApoderado', 'method' => 'PUT', 'role' => 'form', 'action' => 'editarApoderado'])!!}
                    @include('cms.admin.apoderados.partials.fields')

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>