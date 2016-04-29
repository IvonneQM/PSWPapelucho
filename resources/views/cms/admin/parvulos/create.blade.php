{{-- Modal --}}
<div class="modal fade" id="modal-crear-parvulos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Parvulos</h4>
            </div>
            <div class="modal-body">


                {!!Form::open(['id'=>'form-register-parvulo'],['class'=>'form-horizontal'],['route'=>'administrador.parvulos.create', 'method' => 'POST', 'role' => 'form', 'action' => 'registroParvulo'])!!}
                @include('cms.admin.parvulos.partials.fields')
                {!!Form::close()!!}

            </div>
        </div>

    </div>
</div>
