<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Farma Link

Farma Link es una aplicación web para la administración de información de medicamentos. Este proyecto incluye un dashboard, un sistema de autenticación y la capacidad de gestionar información de medicamentos. Está desarrollado con Laravel, Laravel Jetstream, Tailwind CSS, Alpine.js y Livewire.

## Requisitos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

## Instalación

Sigue los siguientes pasos para instalar el proyecto en tu entorno local.

1. **Clona el repositorio**

   ```bash
   git clone https://github.com/David-morales01/FarmaLink.git
   cd FarmaLink

2. **Instala las dependencias de PHP con Composer**

   ```bash
    composer install. 
3. **Instala las dependencias de JavaScript con npm**

   ```bash
    npm install
4. **Configura el archivo de entornom**

   ```bash
    cp .env.example .env
5. **CGenera la clave de la aplicación**

   ```bash
   php artisan key:generate
6. **Compila los assets de la aplicación**

   ```bash
    npm run dev
4. **Migraciones y Seeders**

   ```bash
   php artisan migrate --seed
## Ejecuta el Proyecto

   ```bash
   php artisan serve
 