<div class="row">
<div class="form-group col-lg-5">
    {!!Form::select('Título de proyecto: ', $proyectos,'1',['name'=>'project_name', 'class'=>'form-control','id'=>'select-projects'])!!}
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-agregar-proyecto">+</button>
</div>
</div>

<div class="row">
<div class="form-group col-lg-5">
    {!!Form::label('version','Número de versión: ')!!}
    {!!Form::text('version',null, ['class'=>'form-control', 'id'=>'version', 'placeholder' => 'Ingresar número de versión'])!!}
</div>
</div>
<div class="form-group">
    {!!Form::label('publish','Publicar: ') !!}
    {!! Form::checkbox('publish', null, ['id'=>'publish-actualizacion', 'class' => 'field']) !!}
</div>
