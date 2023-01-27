# MINI-CORE CONTRATOS
Mini-core MVC realizado sobre framework de Cake-PHP sobre la administración de contratos. Para esto se ha utilizado base de datos en phpMyAdmin y su código se encuentra disponible en repositorio de GitHub

El ejercicio planteado solicitaba un mini-core MVC en donde se solicitaba mostrar:
- Cliente
- Monto acumulado de sus contratos

Sobre esto se debería poder filtrar por periodo de fechas a seleccionar. Adicionalmente se agregó detalle de los contratos (nombre y fecha) de la fecha seleccionada y se cuenta con CRUD activo tanto para clientes como para contratos. 


## CakePHP Estructura de la aplicación

![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

A continuación la estructura para generar la aplicación basada en  [CakePHP](https://cakephp.org) 4.x.

El origen de código framework se lo puede encontrar en el siguiente enlace: [cakephp/cakephp](https://github.com/cakephp/cakephp).

### Instalación

1. Descargar [Composer](https://getcomposer.org/doc/00-intro.md) o actualizar `composer self-update`.
2. Ejecutar `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

Si el composer está instalado globalmente se debe ejecutar:

```bash
composer create-project --prefer-dist cakephp/app
```

En caso que se desee utilizar una app customizada en base al nombre del directorio (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

Hasta este punto se puede visualizar el homepage por defecto de una aplicación cake PHP
Para configuraciones personalizadas sobre el puerto especifico se deben seguir las siguientes configuraciones (Se debe personalizar de acuerdo a puerto seleccionado):

```bash
bin/cake server -p 8765
```

Visitar `http://localhost:8765` para ver página de bienvenida.

### Actualizar

Las configuraciones adicionales se deberán realizar de manera manual. En este caso se configuro reconocimiento de la bdd en Model en base a conexión PHP y de Xampp

### Configuración

Leer y editar el ambiente directamente `config/app_local.php` y configurar el 
`'Datasources'` 
Adicionalmente se cambian parametros de reconocimeinto en  `config/app.php`.

## Funcionalidad Mini-CORE MVC

### Levantar Servicio para ejecutar proyecto de manera local

Es importante considerar que como preámbulo se deberán tener las configuraciones respectivas del framework y base de datos relacionada en el proyecto. Posterior a ello se describe el paso a paso para ejecución del proyecto de manera local.

Primero: levantar módulos de XAMPP: Apache y Mysql
Segundo: levantar el seervicio sobre la ubicación bin del proyecto con el comando: cake server 
Tercero: acceder al proyecto. Para acceder al proyecto lo haremos desde localhost, a continuación se adjuntan los enlaces respectivos para cada funcionalidad
    - CRUD Cliente: http://localhost:8765/cliente
    - CRUD Contrato: http://localhost:8765/contratos
    - Mini-CORE: http://localhost:8765/contratos/coreContratos

### MVC
El patrón de diseño utilizado para este proyecto es MVC. 
    
    - Modelo: podemos encontrar la estructura de cada una de las tablas, donde se considera sus restricciones y estilo. Se enlaza con la base de datos
    
    - Controlador: la sección de controladores permite establecer la funcionalidad y acceso a cada acción sobre el modelo. Permite la relación entre los tres componentes
    
    - Vista: En las vistas se maneja toda la parte visual, enlaces y en esta ocasión el mini-core. Podemos encontrar cada una de las vistas en la sección de templates, donde se define la estructura en base a html y php. 

### Mini-CORE
    - La funcionalidad del mini-core en filtrados en base a periodo de fechas se realiza directamente sobre 
    vista -> template -> core_contratos. Para esto se utilizó funcionalidad de comparación de fechas de php, considerando los diferentes escenarios posibles

## Enlaces

### Repositorio de GitHub
https://github.com/pattymicaelazurita/contrato

### Proyecto deployado


### Fuentes de aprendizaje para desarrollo
Aplicación web con cake php: https://www.youtube.com/watch?v=vvAVm2EMezo&t=1098s
Creación Repositorio: https://www.youtube.com/watch?v=eQMcIGVc8N0
CRUD php: https://www.youtube.com/watch?v=8UFHwedGVrc
Asociaciones CakePhp: https://www.youtube.com/watch?v=WKNLXLtY-AY&list=PL-9WnOL7eRJZFoTXKm7EvR_p38rtF87YH&index=14
Manejo de fechas: https://linuxhint.com/calculate-date-difference-php/

### Contacto
patricia.zurita@udla.edu.ec
patty.zurita@yahoo.com