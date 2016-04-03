    {{-- Modal --}}

    <div class="modal fade" id="modal-editar-apoderado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Editar Apoderado :</h4>
                </div>
                <div class="modal-body">

                    {!!Form::model($apoderado,['route'=>['editarApoderado',$apoderado->id],['class'=>'form-horizontal','id'=>'form-editar-apoderado','method' => 'PUT', 'role' => 'form']])!!}
                    @include('cms.admin.apoderados.partials.fields')

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
