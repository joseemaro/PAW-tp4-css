# PAW-tp4-css

## Guia de instalacion



### Base de datos
- Clonar el repositorio
- Se debe crear una base de datos sql con el nombre "pawtp3".
- Una vez ceada se debe ejecutar el codigo sql que esta en el directorio veramedica/sql/create_table_ap.sql sobre la base.
- Crear un archivo config.php (Hay un ejemplo para copiar en config.php.example).
- Una vez hecho esto ya tenemos la bd creada con la tabla appointments creada.

### Composer

-En el directorio raiz del programa ejecutar el codigo
```
composer install
```

- Una vez realizado esto en la terminal hay que ingresar
```
php -S localhost:8888
```
- y por ultimo en el navegador ir a
```
localhost:8888
```
