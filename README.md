# Desafio técnico vaga estágio de desenvolvimento SignoTech

### Descrição do desafio:

Criar um back (crud completo de criação/edição/exclusão) com gerenciamento de enquete e
opções.
- A enquete deve ter um título e uma data programada para início e para término.
- O cadastro de opções de respostas da enquete devem ser dinâmicas, é obrigatório
mínimo 3 opções.
Visualização da enquete
- Listar todas as enquetes cadastradas no banco com o título e data de início e
término, apresentar todas as enquetes, não iniciadas/em andamento/finalizadas.
- Criar tela de apresentar a enquete com opções de resposta, com a data de início e
término. Essa tela deve obedecer:
- Ao lado de cada opção, apresentar os números de votação total do lado de cada
opção.
- Se a enquete não estiver ativa entre data/hora início e data/hora fim, as opções e o
botão de votar deve estar desabilitado.
- * Os números de resultados devem ser apresentados sempre que houver novo
voto (realtime)

## Como executar o programa? Passo a passo

Requisitos: Docker

1. Clone o repositório em sua maquina </br>
  ```
git clone --recurse-submodules --remote-submodules git@github.com:KuiK-San/PS-SignoTech.git
```
3. Faça um novo .env</br>
```
cp .env.example .env
```
4. Entre no repositório do copie o .env do laradock e configure se necessário </br>
```
cd laradock
cp .env.example .env
```
5. Execute os containers docker dentro do laradock</br>
```
docker-compose up -d nginx mysql
```
7. Identifique qual o container workspace e entre no terminal</br>
```
docker ps
docker exec -it {{ docker container laradock_workspace id }} bash
```
8. Instale o composer e rode as migrations </br>
  ```
composer install
php artisan key:generate
php artisan migrate
```
10. Acesse o projeto em localhost :)
 
