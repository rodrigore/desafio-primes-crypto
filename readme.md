# Desafío Primes Crypto

https://www.programando.org/blog/2019/12/15/desafio-primes-crypto.html

* Lenguaje PHP (al menos 7.1)
* Test unitarios con PHPUnit

# Requerimientos
* php 7.1
* [composer](https://getcomposer.org/)

# Pasos de instalación
* git clone http://github.com/rodrigore/desafio-primes-crypto
* cd desafio-primes-crypto
* composer install
* ./vendor/bin/phpunit tests/

# Solución

Mi solución fue mi parecida a un desafio que realice hace un par de años que se conoce como 'Prime factors' en donde hay que obtener cuales numeros primos  multiplicados hacen el numero original.

# Inconvenientes

Una vez lo resolvi e intente descrifrar las palabras encryptadas, mi programa falló por el largo de los numeros enteros por lo que mi primera idea fue buscar 'BigInteger php' en google (nunca habia necesitado este tipo de datos en mis proyectos). Encontré una biblioteca que supuestamente funcionaba con php 7.1 (es decir relativamente moderna) que me obligo un poco a modificar el código pero me dejo poder descifrar las palabras.

# Comentarios y mejoras

Mi solución usa un ciclo for combinado con un while, el cual puede modificarse ya sea para acortar aun mas las lineas del codigo en dos ciclos for anidados, realizando las operaciones de aumentar el contador en las condiciones.
