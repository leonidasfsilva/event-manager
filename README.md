# EventManager - Sistema para Gestão de Eventos
> [!NOTE]
> ###### Projeto esboço para sistema de gerenciamento de eventos, utilizando as stacks:
> 
> - Laravel 10
> - Bootstrap 5
> - MySQL
> - Docker
> ###### Sistema totalmente responsivo para dispositivos móveis (tablets e smartphones)

> [!IMPORTANT]
> ##### PRÉ-REQUISITOS
> ###### Para a correta execução do sistema em seu ambiente, você deve ter os seguintes softwares já pré instalados em sua máquina:
> - Docker
> - Composer


## Configurando o projeto
Clone o projeto para o seu localhost
```sh
git clone https://github.com/leonidasfsilva/event-manager.git event-manager
```

Acesse a pasta do projeto
```sh
cd event-manager
```

Crie o arquivo *.env* copiando a partir do modelo *.env.example*
```sh
cp .env.example .env
```

Instale as dependências do projeto
```sh
composer install
```

Gere uma nova chave para o projeto
```sh
php artisan key:generate
```

As variáveis de ambiente contidas no arquivo .env gerado já estão configuradas para a correta execução via container Docker,
caso queira executar o projeto via localhost (Laragon, Wamp, Xamp, etc) realize os ajustes necessários
```dosini
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=event_manager
DB_USERNAME=root
DB_PASSWORD=root
```

Caso opte por executar o projeto via localhost (sem Docker), defina a variável **DB_HOST** conforme a seguir 
```dosini
DB_HOST=127.0.0.1
```

Suba o container do projeto
```sh
docker-compose up -d
```

Execute as *migrations* para criar as tabelas
```sh
docker-compose exec app php artisan migrate
```

Execute as *Seeders* necessárias para a popular algumas tabelas do projeto
```sh
docker-compose exec app php artisan db:seed
```

### Acesse a aplicação através da URL abaixo e efetue login com as credenciais abaixo

### [http://localhost:8080/](http://localhost:8080/)

### Credenciais de acesso Admin:
E-mail:
```dosini
admin@mail.com
```
Senha:
```dosini
123456
```
## Instruções para uso da aplicação

A aplicação já possui dados mock cadastrados no banco de dados para uma dinâmica de utilização mais prática, 
porém você pode cadastrar novos dados, excluir ou modificar os dados já existentes.<br>
Cada aba do menu esquerdo possui uma listagem dos módulos do sistema (Participantes, Salas de Evento e Espaços de Café).
<br>
Em cada uma das listagens existe uma coluna de Ações:
<br>
- 🔍 Ver detalhes
- 📝 Editar 
- 🗑️ Excluir

### Associar um participante à uma sala ou espaço:
Para associar um participante à uma sala ou espaço, acesse a listagen de participantes e clique no botão *Ver detalhes* 🔍 do participante desejado, 
você será redirecionado para a tela de **Salas e espaços do participante durante o evento**.
<br>
Nesta tela você poderá definir as salas e espaços que serão utilizadas pelo participante nas etapas 1 e 2.
<br>
### Listar os participantes de uma determinada sala ou espaço:
Para listar os participantes de uma determinada sala ou espaço, 
selecione a aba correspondete no menu lateral (Salas de Eventos ou Espaços de Café).
<br>
Ao abrir a listagem das salas, clique no botão *Ver detalhes* 🔍 da sala ou espaço que deseja visualizar os participantes.
<br>
Será exibida uma tela contendo as listagens dos participantes para as etapas 1 e 2 separadamente.
