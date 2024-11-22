## Download ou Git de um Projeto Laravel Existente

#### Passo 1: Clonar o Repositório

Abra o terminal e navegue até o diretório onde deseja clonar o projeto. Use o comando `git clone` seguido da URL do repositório:
```
git clone https://github.com/usuario/repo-laravel.git
```

Entre no diretório do projeto clonado:
```
cd repo-laravel
```

#### Passo 2: Instalar as Dependências

Instale todas as dependências do Composer:
```
composer install
npm install
```

#### Passo 3: Configurar o Ambiente

Crie uma cópia do arquivo `.env.example` e renomeie para `.env`:
```
cp .env.example .env
```

Gere a chave da aplicação:
```
php artisan key:generate
```

Edite o arquivo `.env` com as configurações do seu banco de dados e outras variáveis de ambiente.

#### Passo 4: Migrar o Banco de Dados

Certifique-se de que o banco de dados esteja configurado corretamente no arquivo `.env` e execute as migrações:
```
php artisan migrate
```

#### Passo 5: Iniciar o Servidor

Finalmente, inicie o servidor de desenvolvimento Laravel:
```
php artisan serve
npm run dev
```

Agora você pode acessar o projeto em `http://localhost:8000`.

Usuario: Teste
Senha: 1234
