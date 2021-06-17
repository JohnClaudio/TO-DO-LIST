# <p align=""> 📝🟠 TO DO LIST </p>


### <p  align="center">  Sistema de lista de tarefas simples utilizando Laravel e Bootstrap </p>

 
 <p  align="center"> <img src="https://user-images.githubusercontent.com/61328786/122454498-d79c2f00-cf81-11eb-98ca-db52f39994d4.gif" width="450"></p> 

## Instalação e Requisitos

Antes de começar você precisará do composer instalado e configurado devidamente e de um banco de dados SQL.

### 1. Clone e entre no diretório

````
cd to-do-list-laravel
````   

### 2. Instale as depedências do Laravel

````
composer install
````

### 3. Copie e altere o arquivo env.example para  ".env"

```
cp .env.example .env
```

### 4. Dentro do arquivo .env altere as configuração de acordo com o seu banco de dados, exemplo abaixo.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Utilize o Migrate para criar a database/table automaticamente

````
php artisan migrate
````

### 6. Para executar o projeto use

````
php artisan server
````


## 🛠 Tecnologias e Recursos

### Laravel 8

- [x] Migrate
- [x] Blade
- [x] Artisan
- [x] Routes 

### Bootstrap
- [x] Table
- [x] Collapse
- [x] Button
- [x] Form Group 


