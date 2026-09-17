# Sistema de Gerenciamento de Carros - GerenCar

## Descrição

Sistema web para cadastro e gerenciamento de carros e marcas. Usuários autenticados podem consultar os veículos cadastrados, enquanto usuários administradores também podem cadastrar, editar e excluir carros.

## Tecnologias utilizadas

- Laravel 13
- PHP 8.3 ou superior
- PostgreSQL
- Blade
- Laravel Breeze
- Tailwind CSS
- Vite

## Instalação

Pré-requisitos:

- PHP 8.3 ou superior
- Composer
- Node.js e npm
- PostgreSQL

Clone o projeto e acesse a pasta da aplicação:

```bash
git clone <url-do-repositorio>
cd vinicius_trabalho_laravel_1Bim
```

Instale as dependências PHP e JavaScript:

```bash
composer install
npm install
```

Crie o arquivo de ambiente. No Windows PowerShell, use:

```powershell
Copy-Item .env.example .env
```

No Linux ou macOS, use:

```bash
cp .env.example .env
```

Configure no arquivo `.env` as credenciais do banco PostgreSQL, por exemplo:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=postgres
DB_PASSWORD=sua_senha
```

Gere a chave da aplicação, crie as tabelas e execute os seeders:

```bash
php artisan key:generate
php artisan migrate:fresh --seed
```

Gere os assets frontend para produção:

```bash
npm run build
```

## Execução

Inicie o servidor Laravel:

```bash
php artisan serve
```

Acesse a aplicação em [http://localhost:8000](http://localhost:8000).

Durante o desenvolvimento, o Vite pode ser iniciado em outro terminal para recompilar os assets automaticamente:

```bash
npm run dev
```

## Usuários para teste

Os usuários abaixo são criados pelo `UserSeeder`:

| Nome | E-mail | Senha | Papel |
| --- | --- | --- | --- |
| Admin | `admin@teste.com` | `senhasegura321` | Administrador |
| Usuario | `user@teste.com` | `senha123` | Usuário |
