{{-- Modal agregar categoría--}}
<div class="modal fade" id="modal-agregar-categoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear categoría</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['id'=>'form-register-categoria', 'route'=>'administrador.categoriasActualizaciones.store', 'method' => 'POST', 'role' => 'form'])!!}
                <div class="form-group">
                    {!!Form::label('title','Nombre Categoría: ')!!}
                    {!!Form::text('title',null, ['id'=>'title-categoria','class'=>'form-control', 'placeholder' => 'Ingresa el nombre de la categoría'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('publish','Publicar: ') !!}
                    {!! Form::checkbox('publish', null, ['id'=>'publish-categoria', 'class' => 'field']) !!}
                </div>
                {!!Form::submit('Guardar',['class'=>'btn btn-primary'] )!!}
                {!!Form::close()!!}

            </div>
        </div>
    </div>
</div>