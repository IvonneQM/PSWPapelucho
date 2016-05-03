    {{-- Modal --}}
<div class="modal fade" id="modal-editar-galeria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="nombre_galeria"></h4>
            </div>
            <div class="modal-body">
                <a hidden="hidden" id="id_href_galeria" href="{{route('administrador.galerias.edit')}}"></a>
                <a hidden="hidden"  id="id_update_galeria" href="{{route('administrador.galerias.update')}}"></a>

                <form id="id_form_galeria" method="PUT" action="{{route('administrador.galerias.update')}}">

                    {!! csrf_field() !!}
                    {!!Form::hidden('id',null,['id'=>'idGaleria'])!!}
                    <div class="form-group">
                        {!!Form::label('name','Nombre: ')!!}
                        {!!Form::text('name',null, ['id'=>'nameGaleria','class'=>'form-control', 'placeholder' => 'Ingresa el Nombre de Galeria'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('publish','Publicar: ')!!}
                        {!! Form::checkbox('agree', 1, null, ['id'=>'publishGaleria', 'class' => 'field']) !!}
                    </div>
                    {!!Form::submit('Guardar',['class'=>'btn btn-primary', 'id' => 'btnActualizarGaleria'])!!}

                </form>
            </div>
        </div>
    </div>
</div>