# Libro de Amor: generador de libros personalizados en Laravel 10

[![PHP](https://img.shields.io/badge/PHP-%5E8.1-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?logo=laravel&logoColor=white)](https://laravel.com/)
[![Fortify](https://img.shields.io/badge/Auth-Laravel%20Fortify-FF2D20?logo=laravel&logoColor=white)](https://laravel.com/docs/10.x/fortify)
[![DomPDF](https://img.shields.io/badge/PDF-DomPDF-c0392b)](https://github.com/barryvdh/laravel-dompdf)
[![Wompi](https://img.shields.io/badge/Pagos-Wompi-5b21b6)](https://wompi.com/)

Aplicación web para crear un libro de amor personalizado: la pareja elige sus avatares (femenino y masculino), arma la portada y las páginas del libro, confirma el pago en línea y recibe el libro en PDF. Incluye un panel de administración para gestionar los pedidos y descargar los PDF.

## Qué problema resuelve

Convierte la creación de un regalo personalizado en un flujo guiado de principio a fin: personalización, pago verificado contra la pasarela y entrega del libro en PDF, sin intervención manual para cada pedido.

## Flujo de la aplicación

1. **Avatares**: selección de avatar femenino y masculino (`/avatar`, `/avatar-female`, `/avatar-male`).
2. **Portada y páginas**: edición de la portada y del contenido del libro (`/front-page`, `/books-pages`).
3. **Datos del comprador**: formulario con nombres, dirección, teléfono y correo (`/form`).
4. **Pago**: la respuesta de la pasarela Wompi se consulta por API para confirmar el estado de la transacción (`/pago/respuesta`) y se guarda en el libro.
5. **Entrega**: generación del PDF con DomPDF (`/books-pdf`) y descarga desde el panel.
6. **Administración**: panel autenticado en `/admin` con el listado de pedidos y actualización de su estado.

## Estructura

```
.
├── app/
│   ├── Http/Controllers/
│   │   ├── AvatarController.php      # Selección y edición de avatares
│   │   ├── BookController.php        # Portada, páginas, PDF, guardado y pago
│   │   └── Admin/HomeController.php  # Panel de administración y descarga de PDF
│   └── Models/                       # Book, Shopper, Transaction, User
├── database/migrations/              # Libros, información de compra y transacciones
├── resources/views/
│   ├── books/                        # Avatares, portada, páginas y respuesta de pago
│   └── admin/                        # Panel de administración
├── public/img/                       # Imágenes y recursos gráficos del libro
└── routes/                           # web.php y admin.php
```

## Requisitos

- PHP 8.1 o superior y Composer 2.
- MySQL (u otra base de datos compatible con Laravel).
- Una cuenta de Wompi si vas a verificar pagos reales.

## Ejecución local

```bash
git clone git@github.com:KevinAndrey96/love-book.git
cd love-book
composer install
cp .env.example .env
php artisan key:generate
```

Define en `.env` los datos de tu base de datos (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) y continúa:

```bash
php artisan migrate
php artisan serve
```

Los recursos de CSS y JavaScript ya están compilados en `public/`, por lo que no hace falta un paso de build. La aplicación queda disponible en `http://127.0.0.1:8000`.

## Seguridad

La clave de la aplicación y las credenciales de la base de datos se leen del entorno y el archivo `.env` ya no se versiona. Las versiones anteriores del historial de Git pueden contener valores antiguos, por lo que deben considerarse comprometidos y rotarse antes de reutilizar el proyecto.

## Licencia

Sin licencia de código abierto. Todos los derechos reservados.

El código no se distribuye bajo ninguna licencia abierta; su uso o redistribución requiere autorización expresa del titular.
