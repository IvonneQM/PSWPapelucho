{{-- Modal crear Proyecto--}}
<div class="modal fade" id="modal-agregar-proyecto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Proyecto</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['route' => 'administrador.proyectos.store','id'=>'form-register-project','method' => 'POST', 'role' => 'form'])!!}
                {!! csrf_field() !!}
                <div class="form-group">
                    {!!Form::label('name','Nombre proyecto: ')!!}
                    {!!Form::text('name',null, ['id'=>'name-proyecto','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del proyecto','autofocus'])!!}
                </div>
                {!!Form::submit('Guardar',['class'=>'btn btn-primary'] )!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>