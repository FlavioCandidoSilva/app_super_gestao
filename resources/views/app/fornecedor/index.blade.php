<h3>Fornecedor</h3>


@php
    
@endphp


@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        interação atual: {{$loop->iteration}}
        <br>
        Fornecedor:{{ $fornecedores[1]['nome'] }}
        <br>
        Status: {{ $fornecedores[1]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[1]['CNPJ'] ?? 'Dado não foi informado' }}
        <br>
        Telefone: {{ $fornecedores[1]['ddd'] ?? 'Dado informado' }} 
        <br>
        @if($loop->first)
            Primeira interação do loop
            <br>
            {{$loop->count}}
        @endif
    @empty
        não existe
    @endforelse
@endisset