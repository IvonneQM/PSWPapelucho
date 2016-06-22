<h2> Auditoría </h2>
<div class="panel-body">
<table class="table table-striped">
    <TBODY>
@foreach($auditorias as $auditoria)
<tr>
    <td class="auditoria_name">{!! $auditoria->user->full_name !!}</td>
    <td class="auditoria">{!! $auditoria->created_at !!}</td>
</tr>
@endforeach
    </TBODY>
</table>
</div>