# 📋 tarefas-laravel

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1-blue?style=for-the-badge&logo=php)
![Status](https://img.shields.io/badge/status-em%20desenvolvimento-yellow?style=for-the-badge)

Sistema simples de gerenciamento de tarefas desenvolvido com Laravel para fins de estudo e demonstração no GitHub.

Repositório: [bitguardian/tarefas-laravel](https://github.com/bitguardian/tarefas-laravel)

---

## 🔧 Tecnologias utilizadas

- [x] Laravel 10+
- [x] PHP 8.1+
- [x] SQLite (ou MySQL)
- [x] Bootstrap 5
- [x] Blade (engine de templates)
- [x] SweetAlert2 (confirmação de exclusão)

---

## 💻 Funcionalidades

- ✅ Criar, editar e excluir tarefas
- ✅ Exclusão com alerta de confirmação
- ✅ Validação de formulário com mensagens amigáveis
- ✅ Layout responsivo com Bootstrap
- ✅ Paginação automática das tarefas
- ✅ Estrutura de layout com Blade (`@extends`, `@section`)
- ✅ Pronto para deploy

---

## 🚀 Como rodar localmente

```bash
# Clone o repositório
git clone https://github.com/bitguardian/tarefas-laravel.git

# Acesse a pasta
cd tarefas-laravel

# Instale as dependências
composer install

# Copie o .env e gere a key
cp .env.example .env
php artisan key:generate

# Crie o banco SQLite
touch database/database.sqlite

# Altere o .env:
# DB_CONNECTION=sqlite
# DB_DATABASE=absolute/path/para/database/database.sqlite

# Rode as migrations
php artisan migrate

# Inicie o servidor
php artisan serve
```

Acesse em: [http://localhost:8000](http://localhost:8000)

---

## 🗂️ Estrutura das Views

```
resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    └── tarefas/
        ├── index.blade.php
        ├── create.blade.php
        └── edit.blade.php
```

---

## 📄 Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

## 🧑‍💻 Autor

Feito com 💻 por **Bruno Moura**  
[🔗 GitHub](https://github.com/bitguardian) • [📧 analisedigital@pm.me](mailto:analisedigital@pm.me)
