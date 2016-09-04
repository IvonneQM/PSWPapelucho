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
{!! $auditorias->render() !!}
