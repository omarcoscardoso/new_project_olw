<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Desafio OLW 3

Abaixo descrevo as etapas de criação do projeto seguindo a documentação do Laravel:

### Criar o projeto
```shell
curl -s https://laravel.build/new_project_olw?with=mysql,redis,mailpit | bash
```

### Configurar o alias par ao Sail
```shell
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

sail up -d
```

### Instalação do braze

```shell
composer require laravel/breeze --dev
sail php artisan breeze:install
sail php artisan migrate
```

A partir desse ponto o projeto já está acessível em ``http://localhost`` 

### Subir repositório git

```shell
git init
git add .
git commit -m "commit inicial"
git branch -M main
git remote add origin https://github.com/omarcoscardoso/new_project_olw.git
git push -u origin main
```
