{!! csrf_field() !!}
{!! Field::hidden('actualizacion_id') !!}
<div id="add-items">
<div class="form-group">
    {!!Form::label('description','Descripción: ')!!}
    {!!Form::textarea('description',null, ['id'=>'description','class'=>'form-control description-item', 'rows'=>'4', 'placeholder' => 'Ingresa descripción del Item', 'maxlength' => 400])!!}
    <label>Caracteres restantes: <span id="counter">400</span></label>
</div>

<div class="form-group" id="div-categoria">
    {!!Form::select('Nombre de Categoría: ', $categorias,'1',['name'=>'categoria_actualizacion_id', 'class'=>'form-control','id'=>'id-select'])!!}
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-agregar-categoria">+</button>
</div>


