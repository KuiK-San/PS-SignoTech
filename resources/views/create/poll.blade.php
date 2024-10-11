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
                    <p class="text-danger d-none" id="alert">Adicione pelo menos 3 opções!</p>
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