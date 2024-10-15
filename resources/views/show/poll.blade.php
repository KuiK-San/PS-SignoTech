@php
    use Carbon\Carbon;
@endphp

<x-background active="" title="Enquete de {{ $poll->poll_owner }}" >
    <x-slot:content>

        
        
        <div class="m-3">
            <h3 class="text-center">{{ $poll->titulo }}</h3>
            <p><small>Enqute criada por {{ $poll->poll_owner }} disponível até {{ $poll->final_date }}</small></p>
            <div class="offset-10  ">
                <small><a href="/poll/{{$poll->id}}/edit"><i class="fa-solid fa-pencil"></i> Editar Enquete</a></small>   
            </div>
            
            
            <h4>Descrição</h4>
            <p class="lead">{{ $poll->descricao }}</p>
            
            <form action="/poll/{{ $poll->id }}/vote" method="post">
                @csrf
                <input type="text" name="" id="json" class="d-none" value="{{ $poll->options }}">

                <div class="col-12" id="form">

                </div>
                
                @if (Carbon::parse($poll->final_date)->isPast())
                <button type="button" class="btn btn-primary my-3 col-12" disabled>Votar</button>
                @else
                <button type="submit" class="btn btn-primary my-3 col-12">Votar</button>
                @endif
                    
            </form>
                
            <div class="">
                <small><button class="btn btn-sm btn-secondary col-12" onclick="visualisarVotos()" id="viewBtn">Visualizar votos</button></small>   
            </div>


            <x-bs-script/>
            <script src="{{ asset('js/optionsVoting.js') }}"></script>
            <script src="{{ asset('js/viewVotes.js') }}"></script>
            <script src="{{ asset('js/votesRefresh.js') }}"></script>
            <script>
                
                setInterval(refreshVotes, 30, {{ $poll->id }});
            </script>
        </div>
        
        
    </x-slot:content>
</x-background>