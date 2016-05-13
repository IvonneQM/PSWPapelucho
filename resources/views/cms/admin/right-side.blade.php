<h2> Auditoría </h2>

@foreach($auditorias as $auditoria)

    {!! $auditoria->user->full_name !!}
    {!! $auditoria->created_at !!}
@endforeach