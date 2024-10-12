@isset($poll)

<x-background active="" title="Editar Enquete #{{ $poll->id }}" >
    <x-slot:content>
        
        <div class="m-3">
            <h3 class="text-center">Editar enquete</h3>

            <form action="/poll/{{ $poll->id }}" method="POST" id="form">
                @method('PUT')
                @csrf
                <div class="form-group col-12">
                    <label for="titulo">Titulo da Enquete</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome da sua enquete aqui" value="{{ $poll->titulo }}">
                </div>


                <div class="form-group col-12">
                    <label for="usuario">Seu Nome</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Seu nome aqui" value="{{ $poll->poll_owner }}">
                </div>


                <div class="form-group col-12">
                    <label for="descricao">Descrição da Enquete</label>
                    <textarea class="form-control" id="descricao" rows="3" name="descricao" placeholder="Escreva aqui a descrição da sua enquete com até 300 caracteres" maxLength="300">{{ $poll->descricao }}</textarea>
                </div>


                <p class="text-danger container d-none" id="alertDate">Adicione um Período Valido</p>
                <div class="form-row col-12">
                    
                    <div class="form-group col-12 col-sm-6 ">
                        <label for="initial_date">Data Inical</label>
                        <input type="date" class="form-control" id="initial_date" name="intial_date" placeholder="Seu nome aqui" value="{{ $poll->inital_date }}">
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label for="final_date">Data Final</label>
                        <input type="date" class="form-control" id="final_date" name="final_date" placeholder="Seu nome aqui" value="{{ $poll->final_date }}">
                    </div>
                </div>


                <div class="form-group col-12">
                    <label for="final_date">Adiconar Opções de Votação</label>
                    <div class="input-group ">
                        <div class="input-group-prepend" style="cursor: pointer" >
                            <div class="input-group-text" id="btnAddOption">+ Add</div>
                        </div>
                        <input type="text" class="form-control" placeholder="Digiete uma nova opção" id="optionInput">
                    </div>
                </div>
                
                
                <div class="form-group col-12">
                    <label for="opcoes">Opções Adicionadas</label>
                    <p class="text-danger d-none" id="alertOptions">Adicione pelo menos 3 opções!</p>
                    <select multiple class="form-control" name="opcoes" id="opcoes">
                        
                    </select>
                </div>


                <div class="col-12"><button id="removerButton" class="btn btn-danger col-12 col-sm-2 offset-sm-10">Remover Opção</button></div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar Enquete</button>
                    <button type="button" class="btn btn-primary text-bg-danger p-2 border-0" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ route('poll.destroy', $poll->id) }}" data-bs-name="{{ $poll->nome }}">
                        a enquete
                    </button>
                </div>
                
                <input type="text" name="json" id="json" class="d-none" value="{{ $poll->options }}">
            </form>
        </div>


        <!-- DELETE MODAL  -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Excluir Enquete?</h1>
                        <button   button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="text">Tem certeza que deseja excluir a Enquete </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-bg-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form id="delete" action="" method="post">
                            @csrf
                            {{ method_field('DELETE') }} 
                            <button type="submit" id=""  class="btn btn-primary text-bg-primary">Deletar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <x-bs-script />
        <script src="{{ asset('js/optionsScript.js') }}"></script>
        <script src="{{ asset('js/verificatorEdit.js') }}"></script>
        <script src="{{ asset('js/optionsAdding.js') }}"></script>

        <!-- SCRIPT DELETE -->
        <script>
            let deleteModal = document.getElementById('deleteModal')
            console.log(deleteModal)
            if (deleteModal) {
                deleteModal.addEventListener('show.bs.modal', event => {
                    console.log('123')
                    let botao = event.relatedTarget
                    let id = botao.getAttribute('data-bs-id')
                    let name = botao.getAttribute('data-bs-name')

                    document.querySelector('#text').innerHTML = `Tem certeza que deseja excluir a marca ${name}`
                    let deletar = document.querySelector('#delete')
                    
                    deletar.setAttribute('action', id)

                })
            }
        </script>
        
        
    </x-slot:content>
</x-background>

@endisset

@empty($poll)
<x-background active="create" title="Criar Enquete" >
    <x-slot:content>
        
        <div class="m-3">
            <h3 class="text-center">Nova Enquete</h3>

            <form action="/poll" method="POST" id="form">
                @csrf
                <div class="form-group col-12">
                    <label for="titulo">Titulo da Enquete</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome da sua enquete aqui">
                </div>


                <div class="form-group col-12">
                    <label for="usuario">Seu Nome</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Seu nome aqui">
                </div>


                <div class="form-group col-12">
                    <label for="descricao">Descrição da Enquete</label>
                    <textarea class="form-control" id="descricao" rows="3" name="descricao" placeholder="Escreva aqui a descrição da sua enquete com até 300 caracteres" maxLength="300"></textarea>
                </div>


                <p class="text-danger container d-none" id="alertDate">Adicione um Período Valido</p>
                <div class="form-row col-12">
                    
                    <div class="form-group col-12 col-sm-6 ">
                        <label for="initial_date">Data Inical</label>
                        <input type="date" class="form-control" id="initial_date" name="intial_date" placeholder="Seu nome aqui">
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label for="final_date">Data Final</label>
                        <input type="date" class="form-control" id="final_date" name="final_date" placeholder="Seu nome aqui">
                    </div>
                </div>


                <div class="form-group col-12">
                    <label for="final_date">Adiconar Opções de Votação</label>
                    <div class="input-group ">
                        <div class="input-group-prepend" style="cursor: pointer" >
                            <div class="input-group-text" id="btnAddOption">+ Add</div>
                        </div>
                        <input type="text" class="form-control" placeholder="Digiete uma nova opção" id="optionInput">
                    </div>
                </div>
                
                
                <div class="form-group col-12">
                    <label for="opcoes">Opções Adicionadas</label>
                    <p class="text-danger d-none" id="alertOptions">Adicione pelo menos 3 opções!</p>
                    <select multiple class="form-control" name="opcoes" id="opcoes">
                        
                    </select>
                </div>


                <div class="col-12"><button id="removerButton" class="btn btn-danger col-12 col-sm-2 offset-sm-10">Remover Opção</button></div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Criar Enquete</button>
                </div>

                <input type="text" name="json" id="json" class="d-none">
            </form>
        </div>

        <script src="{{ asset('js/optionsScript.js') }}"></script>
        <script src="{{ asset('js/verificatorScript.js') }}"></script>
        
    </x-slot:content>
</x-background>
@endempty