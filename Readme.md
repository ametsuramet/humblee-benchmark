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
*1569ms for 100.000 record*


![Lumen Script](https://raw.githubusercontent.com/ametsuramet/humblee-benchmark/master/Lumen-Script.png)

*Lumen Script*

##USING APACHE BENCHMARK
## HUMBLEE
```bash
╰─$ ab -t 10 -c 10 http://localhost:3000/employees
This is ApacheBench, Version 2.3 <$Revision: 1748469 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)
Finished 16 requests


Server Software:
Server Hostname:        localhost
Server Port:            3000

Document Path:          /employees
Document Length:        12546972 bytes

Concurrency Level:      10
Time taken for tests:   10.437 seconds
Complete requests:      16
Failed requests:        0
Total transferred:      200754688 bytes
HTML transferred:       200751552 bytes
Requests per second:    1.53 [#/sec] (mean)
Time per request:       6523.332 [ms] (mean)
Time per request:       652.333 [ms] (mean, across all concurrent requests)
Transfer rate:          18783.49 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.2      0       1
Processing:  1091 4839 1834.6   6009    6847
Waiting:     1066 4819 1837.0   5991    6830
Total:       1092 4839 1834.5   6009    6848

Percentage of the requests served within a certain time (ms)
  50%   6009
  66%   6137
  75%   6243
  80%   6243
  90%   6366
  95%   6848
  98%   6848
  99%   6848
 100%   6848 (longest request)
```

## LUMEN
```bash
╰─$ ab -t 10 -c 10 http://localhost:4000/employees
This is ApacheBench, Version 2.3 <$Revision: 1748469 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)
Finished 13 requests


Server Software:
Server Hostname:        localhost
Server Port:            4000

Document Path:          /employees
Document Length:        12546972 bytes

Concurrency Level:      10
Time taken for tests:   10.589 seconds
Complete requests:      13
Failed requests:        0
Total transferred:      163113093 bytes
HTML transferred:       163110636 bytes
Requests per second:    1.23 [#/sec] (mean)
Time per request:       8145.553 [ms] (mean)
Time per request:       814.555 [ms] (mean, across all concurrent requests)
Transfer rate:          15042.67 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.1      0       1
Processing:  1424 5434 2335.5   6217    8148
Waiting:     1394 5408 2334.9   6193    8109
Total:       1424 5434 2335.4   6217    8148

Percentage of the requests served within a certain time (ms)
  50%   5851
  66%   7359
  75%   7683
  80%   7684
  90%   7697
  95%   8148
  98%   8148
  99%   8148
 100%   8148 (longest request)
```


