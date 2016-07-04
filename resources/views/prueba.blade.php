
{!! Html::style('css/select2.min.css') !!}


{!! Form::model($makeForm, ['method'=>'get','id' => 'searchform', 'class' => 'form'])!!}

{!! Field::select('galeria_id',$galerias) !!}
{!! Field::select('jardin_id',$jardines) !!}

{!! Form::close()!!}

{{--['name'=>'jardines']
['name'=>'galerias']--}}

{!! Html::script('js/select2.min.js') !!}


<script type="text/javascript">
    $(document).ready(function(){
        $('select').select2();
        $('#searchform select').change(function () {
            ('#searchform').submit();
            console.log('se cambio')

        });
    });
</script>