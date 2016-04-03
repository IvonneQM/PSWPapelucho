    {{-- Modal --}}

    <div class="modal fade" id="modal-noticias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear Noticia</h4>
                </div>
                <div class="modal-body">

                    {!!Form::open(['id'=>'form-register-noticia'],['class'=>'form-horizontal'],['route'=>'registroNoticia', 'method' => 'POST', 'role' => 'form', 'action' => 'registroNoticia'])!!}
                    @include('cms.admin.noticias.partials.fields')

                    {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>