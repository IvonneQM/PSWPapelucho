{!! csrf_field() !!}
{{--Estos campos se utilizan debido a que chrome no reconoce el autocomplete:off y
autocompleta solo el primer campo de cada tipo--}}
<input style="display:none">
<input type="hidden" id="user_id" name="user_id" value="{{$duenos->id}}">
<div class="form-group">
    {!!Form::label('patente','Patente: ')!!}
    {!!Form::text('patente',null, ['id'=>'patente','class'=>'form-control patente', 'placeholder' => 'Ingresa la patente del vehiculo'])!!}
</div>
<div class="form-group">
    {!!Form::label('marca','Marca: ')!!}
    {!!Form::text('marca',null, ['id'=>'marca', 'class'=>'form-control', 'placeholder' => 'Ingresa la marca del vehiculo', 'autocomplete' => 'off'])!!}
</div>
<div class="form-group">
    {!!Form::label('modelo','Modelo: ')!!}
    {!!Form::text('modelo',null, ['id'=>'modelo','class'=>'form-control', 'placeholder' => 'Ingresa el modelo del vehiculo', 'autocomplete' => 'off'])!!}
</div>

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}