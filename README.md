# EVO_Sveltekit
Заготовка для использования Evolution как Handless CMS с отдельным фронтендом на SvelteKit

Для запуска окружения:
1. Необходимо создать файл .env.dev в корне, рядом с файлом docker-compose.yml
С содержимым:
>DB_NAME=devDB\
DB_USERNAME=dev_user\
DB_USERPASSWORD=#2iA31_-123!\
DB_ROOTPASSWORD=toor

2. Собрать и запустить окружение коммандой:
>**docker-compose --env-file .env.dev up --build**

3. EVO будет доступна по адресу api.localhost, для входа в админ-панель:
- Имя пользователя: **root**
- Пароль: **tratata**

Перед тем как положить контейнер желательно сделать резервную копию БД через PMA (localhost:5700). И разместить её в папке **dump**.

4. SvelteKit доступен по адресу localhost

*Удачной разработки!*
