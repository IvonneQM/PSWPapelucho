    {{-- Modal --}}
    <h4 class="modal-title" id="myModalLabel">Editar Apoderado : {!! $apoderado->full_name !!}</h4>
    </div>
    {!!Form::model($apoderado,['route'=>['administrador.apoderados.update',$apoderado->id]],['class'=>'form-horizontal','id'=>'form-editar-apoderado', 'role' => 'form', 'method' => 'PUT', 'action' => 'administrador.apoderados.update'])!!}
    @include('cms.admin.apoderados.partials.fields')
    {!!Form::close()!!}

    </div>