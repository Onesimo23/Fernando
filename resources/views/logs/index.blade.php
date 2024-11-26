@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Registros de Usuários</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuário</th>
                    <th>Ação</th>
                    <th>Endereço IP</th>
                    <th>Navegador/Dispositivo</th>
                    <th>Data e Hora</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($logs as $log)
                    <tr>
                        <td>{{ $log->id }}</td>
                        <td>{{ $log->user->name ?? 'Convidado' }}</td>
                        <td>{{ $log->action }}</td>
                        <td>{{ $log->ip_address }}</td>
                        <td>{{ $log->user_agent }}</td>
                        <td>{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Nenhum registro encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $logs->links() }}
    </div>
</div>
@endsection
