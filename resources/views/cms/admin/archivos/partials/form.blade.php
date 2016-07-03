<div>

    <ul id="archivosTabs" class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#imagen" aria-controls="imagen" role="tab" data-toggle="tab"
                                                  data-type="galerias-jardines">Imágen</a>
        </li>
        <li role="presentation"><a href="#informe" aria-controls="informe" role="tab" data-toggle="tab"
                                   data-type="parvulos">Informe al
                Hogar</a></li>
        <li role="presentation"><a href="#boletin" aria-controls="boletin" role="tab" data-toggle="tab"
                                   data-type="niveles">Boletín
                Semanal</a></li>
        <li role="presentation"><a href="#informacion" aria-controls="informacion" role="tab" data-toggle="tab"
                                   data-type="general">Información
                General</a></li>
    </ul>

    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active panel-option" id="imagen">

            <div class="col-lg-8 conteiner-option">
                <div class="form-group">

                    <label for="sel1">Galería:</label>
                    <select name="galerias" class="form-control" id="sel1">
                        @foreach($galerias as $galeria)

                            <option value="{{$galeria->getKey()}}">{{$galeria->name}} </option>

                        @endforeach
                    </select>


                    {!!Form::label('name','Jardin: ')!!}
                    <select name="jardines" class="form-control" id="sel2">
                        @foreach($jardines as $jardin)

                            <option value="{{$jardin->getKey()}}">{{$jardin->name}}</option>

                        @endforeach

                    </select>

                </div>

                {{--button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>--}}
                <div class="col-md-4 div-btn">
                    <a class="btn btn-primary pull-right btn-crear-nuevo"
                       href="{{ route('administrador.galerias.index') }}"
                    ><i class="fa fa-picture-o"> <span class="button-title">Crear Galería</span></i></a>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane panel-option" id="informe">
            <div class="form-group">
                {!! Form::label('nombreParvulo','Seleccionar Párvulo: ') !!}
                {!! Form::text('user',null, ['id'=>'user' , 'class'=>'form-control']) !!}
                {!! Form::hidden('parvulos',null, ['id'=>'user_id']) !!}
            </div>
        </div>

        <div role="tabpanel" class="tab-pane panel-option" id="boletin">
            <div class="form-group">
                <label for="sel4">Seleccionar Nivel:</label>
                <select name="niveles" class="form-control" id="sel4">
                    @foreach($niveles as $nivel)
                        <option value="{{$nivel->getKey()}}">{{$nivel->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane panel-option" id="informacion">

        </div>
        {!! Form::hidden('type', 'galerias-jardines' , array('id' => 'type')) !!}
    </div>
</div>