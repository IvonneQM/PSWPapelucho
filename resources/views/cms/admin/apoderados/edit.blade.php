    {{-- Modal --}}


    {!!Form::model($apoderado,['route'=>['editarApoderado',$apoderado->id]],['class'=>'form-horizontal','id'=>'form-editar-apoderado', 'role' => 'form'])!!}
    @include('cms.admin.apoderados.partials.fields')

    {!!Form::close()!!}