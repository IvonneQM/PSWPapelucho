    {{-- Modal --}}


    {!!Form::model($apoderado,['route'=>['editarApoderado',$apoderado->id],['class'=>'form-horizontal','id'=>'form-editar-apoderado','method' => 'PUT', 'role' => 'form']])!!}
    @include('cms.admin.apoderados.partials.fields')

    {!!Form::close()!!}