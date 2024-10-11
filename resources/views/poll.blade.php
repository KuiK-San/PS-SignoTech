<x-background active="view" title="Enquetes" >
    <x-slot:content>

        <h3 class="m-3 text-center">Enquetes</h3>

        <table class="table table-striped table-hover">
            <thead>
                <tr >
                    <th scope="col">#</th>
                    <th scope="col">Titulo da Enquete</th>
                    <th scope="col">Criador</th>
                    <th scope="col">Data final</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($polls as $poll)

                    <tr>
                        <th class="">{{ $poll->id }}</th>
                        <td class="col-5">{{ $poll->titulo }}</td>
                        <td class="col-4">{{ $poll->poll_owner }}</td>
                        <td class="col-1">{{ $poll->final_date }}</td>
                        <td class="col-1"><a href="/poll/{{ $poll->id }}"><button type="button" class="btn btn-sm btn-light"><i class="fa-regular fa-eye"></i></button></a></td>
                    </tr>

                @endforeach
                
            </tbody>
        </table>
        
    </x-slot:content>
</x-background>