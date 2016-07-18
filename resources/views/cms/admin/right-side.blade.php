<div class="panel-primary">
    <div class="panel-heading">Control de Ingreso</div>
</div>
<div class="panel-body">
    <table class="table table-striped">
        <tbody>
        @foreach($auditorias as $auditoria)
            <tr>
                <td class="auditoria_name">{!! $auditoria->user->full_name !!}</td>
                <td class="auditoria">{!! $auditoria->created_at !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{!! $auditorias->render() !!}
