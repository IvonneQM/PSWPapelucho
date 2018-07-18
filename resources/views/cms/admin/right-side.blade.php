<table class="w3-table w3-striped w3-white">
    <tbody>
        <tr id="t-header-content-principal">
            <th>Usuario</th>
            <th>Fecha</th>
        </tr>
    @foreach($auditorias as $auditoria)
        <tr>
            <td class="auditoria_name">{!! $auditoria->user->full_name !!}</td>
            <td class="auditoria">{!! $auditoria->created_at !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $auditorias->render() !!}
