# HUMBLEE vs LUMEN BENCHMARK
please use this sample data [datacharmer/test_db](https://github.com/datacharmer/test_db)

## INIT PROJECT & START DEVELOPMENT SERVER
### Humblee
```bash
composer create-project --prefer-dist ametsuramet/humblee:dev-master HumbleeEmployee
```
enter to project directory
```bash
cd HumbleeEmployee
```
create env file:
```bash
APP_NAME=humblee
APP_URL=http://localhost
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_ENV=development

DB_HOST=localhost
DB_DATABASE=employees
DB_USERNAME=root
DB_PASSWORD=root
DB_PORT=3306
```

Start Server 
```bash
php -S localhost:3000 -t public
```

### Lumen
```bash
composer create-project --prefer-dist laravel/lumen lumenEmployee
```
enter to project directory
```bash
cd lumenEmployee
composer install
```
create env file:
```bash
APP_ENV=local
APP_DEBUG=true
APP_KEY=
APP_TIMEZONE=UTC

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=employees
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=file
QUEUE_DRIVER=sync
```

Start Server 
```bash
php -S localhost:4000 -t public
```

## BENCMARK RESULT
* call url ```http://localhost:3000/employees``` for Humblee
* call url ```http://localhost:4000/employees``` for Lumen

### HUMBLE RESULT
![Humblee Result](https://raw.githubusercontent.com/ametsuramet/humblee-benchmark/master/Humblee-Employee.png)
*1057ms for 100.000 record*

![Humblee Script](https://raw.githubusercontent.com/ametsuramet/humblee-benchmark/master/Humblee-Script.png)
*Humblee Script*

### Lumen RESULT
![Lumen Result](https://raw.githubusercontent.com/ametsuramet/humblee-benchmark/master/Lumen-Employee.png)
*1057ms for 100.000 record*

![Lumen Script](https://raw.githubusercontent.com/ametsuramet/humblee-benchmark/master/Lumen-Script.png)
*Lumen Script*


