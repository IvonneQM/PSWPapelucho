<div>

    <ul id="archivosTabs" class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#imagen" aria-controls="imagen" role="tab" data-toggle="tab" data-type="galerias|jardines">Imágen</a>
        </li>
        <li role="presentation"><a href="#informe" aria-controls="informe" role="tab" data-toggle="tab" data-type="niveles">Informe al
                Hogar</a></li>
        <li role="presentation"><a href="#boletin" aria-controls="boletin" role="tab" data-toggle="tab" data-type="parvulos">Boletín
                Semanal</a></li>
        <li role="presentation"><a href="#informacion" aria-controls="informacion" role="tab" data-toggle="tab">Información
                General</a></li>
    </ul>

    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="imagen">

            <div class="col-lg-8">
                <div class="form-group">
                    <label for="sel1">Seleccionar Galería:</label>
                    <select name="galerias" class="form-control" id="sel1">
                       @foreach($galerias as $galeria)
                        <option value="{{$galeria->getKey()}}">{{$galeria->name}}</option>
                        @endforeach
                    </select>
                    <select name="jardines" class="form-control" id="sel1">
                        @foreach($jardines as $jardin)
                            <option value="{{$jardin->getKey()}}">{{$jardin->name}}</option>
                        @endforeach
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
                    <select name="parvulos" class="form-control" id="sel3">
                        @foreach($parvulos as $parvulo)
                        <option value=""{{$parvulo->getKey()}}>{{$parvulo->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="boletin">
            <div class="form-group">
                <div class="form-group">
                    <label for="sel1">Seleccionar Nivel:</label>
                    <select name="niveles" class="form-control" id="sel4">
                        @foreach($niveles as $nivel)
                            <option value=""{{$nivel->getKey()}}>{{$nivel->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="informacion">

        </div>
        {!! Form::hidden('type', null , array('id' => 'type')) !!}
    </div>
</div>