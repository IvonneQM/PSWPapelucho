<div>

    <ul id="archivosTabs" class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#imagen" aria-controls="imagen" role="tab" data-toggle="tab">Imágen</a>
        </li>
        <li role="presentation"><a href="#informe" aria-controls="informe" role="tab" data-toggle="tab">Informe al
                Hogar</a></li>
        <li role="presentation"><a href="#boletin" aria-controls="boletin" role="tab" data-toggle="tab">Boletín
                Semanal</a></li>
        <li role="presentation"><a href="#informacion" aria-controls="informacion" role="tab" data-toggle="tab">Información
                General</a></li>
    </ul>

    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="imagen">

            <div class="col-lg-8">
                <div class="form-group">
                    <label for="sel1">Seleccionar Galería:</label>
                    <select class="form-control" id="sel1">
                        {{--@foreach($categories as $category)--}}
                        <option>Galería 1</option>
                        <option>Galería 2</option>
                        <option>Galería 3</option>
                        <option>Galería 4</option>
                        {{--@endforeach--}}
                    </select>
                </div>
            </div>
            {{--<button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>--}}
            <div class="col-md-4 div-btn">
                <a class="btn btn-primary pull-right btn-crear-nuevo" href="{{ route('administrador.galerias.index') }}"
                   ><i class="fa fa-picture-o"> Crear Galería</i></a>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="informe">
            <div class="form-group">
                <div class="form-group">
                    <label for="sel1">Seleccionar Párvulo:</label>
                    <select class="form-control" id="sel3">
                        {{--@foreach($categories as $category)--}}
                        <option>Mónica</option>
                        <option>Pascual</option>
                        <option>Oriana Chiguagua</option>
                        <option>Tony Espina</option>
                        {{--@endforeach--}}
                    </select>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="boletin">
            <div class="form-group">
                <div class="form-group">
                    <label for="sel1">Seleccionar Nivel:</label>
                    <select class="form-control" id="sel4">
                        {{--@foreach($categories as $category)--}}
                        <option>Nivel Medio Menor</option>
                        <option>Nivel Medio Mayor</option>
                        {{--@endforeach--}}
                    </select>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="informacion">

        </div>

    </div>
</div>