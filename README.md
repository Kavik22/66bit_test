# Инструкция по развёртыванию

Данная инструкция поможет вам развернуть проект на локальной машине.
## Шаг 1: Копирование репозитория

Выберите директорию на локальном хранилище, куда вы хотите скопировать проект. Перейдите в эту директорию и выполните команду:

 
    git clone https://github.com/Kavik22/66bit_test.git

## Шаг 2: Настройка .env

На основе файла .env.example создайте файл .env, выполнив следующую команду:

    cp .env.example .env

## Шаг 3: Сборка и запуск контейнеров

Запустите Docker-контейнеры, выполнив команду:

 
    docker-compose up -d

## Шаг 4: Настройка работы приложения и базы данных

Выполните следующие команды по порядку, чтобы настроить приложение и базу данных:

 
    docker exec -it 66bit_app bash
    chmod 777 -R ./
    composer install
    php artisan key:generate
    php artisan migrate
    php artisan db:seed --class=CountrySeeder
    php artisan db:seed --class=GenderSeeder

Теперь ваш проект развернут и готов к использованию [здесь](http://localhost:8876/)!
