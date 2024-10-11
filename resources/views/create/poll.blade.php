<x-background active="create" title="Criar Enquete" >
    <x-slot:content>
        
        <div class="m-3">
            <h3 class="text-center">Nova Enquete</h3>

            <form action="/poll" method="POST">
                @csrf
                <div class="form-group col-12">
                    <label for="titulo">Titulo da Enquete</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Nome da sua enquete aqui">
                </div>


                <div class="form-group col-12">
                    <label for="usuario">Seu Nome</label>
                    <input type="text" class="form-control" id="usuario" placeholder="Seu nome aqui">
                </div>


                <div class="form-group col-12">
                    <label for="descricao">Descrição da Enquete</label>
                    <textarea class="form-control" id="descricao" rows="3" placeholder="Escreva aqui a descrição da sua enquete com até 300 caracteres" maxLength="300"></textarea>
                </div>


                <div class="form-row col-12">

                    <div class="form-group col-12 col-sm-6 ">
                        <label for="intial_date">Data Inical</label>
                        <input type="date" class="form-control" id="intial_date" placeholder="Seu nome aqui">
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label for="final_date">Data Final</label>
                        <input type="date" class="form-control" id="final_date" placeholder="Seu nome aqui">
                    </div>
                </div>


                <div class="form-group col-12">
                    <label for="final_date">Adiconar Opções de Votação</label>
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <div class="input-group-text" id="btnGroupAddon">+ Add</div>
                        </div>
                        <input type="text" class="form-control" placeholder="Digiete uma nova opção" aria-label="Digiete uma nova opção" aria-describedby="btnGroupAddon">
                    </div>
                </div>


                <div class="form-group col-12">
                    <label for="opcoes">Opções Adicionadas</label>
                    <select multiple class="form-control" id="opcoes">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>


                <div class="col-12"><button type="" class="btn btn-danger col-12 col-sm-2 offset-sm-10">Remover Opção</button></div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Criar Enquete</button>
                </div>

            </form>
        </div>
        
    </x-slot:content>
</x-background>