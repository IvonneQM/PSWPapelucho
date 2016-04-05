    {{-- Modal --}}
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Editar Apoderado : {!! $apoderado->full_name !!}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>



    {!!Form::model($apoderado,['route'=>['administrador.apoderados.update',$apoderado->id]],['class'=>'form-horizontal','id'=>'form-editar-apoderado', 'role' => 'form'])!!}
    @include('cms.admin.apoderados.partials.fields')
    {!!Form::close()!!}

    </div>