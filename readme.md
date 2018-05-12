# Quiz Humor Geek
## Requerimentos
Para instalar e executar o projeto em ambiente local é necessário:
- Git
- Docker (win/osx/linux)

## Instalação
Após clonar o projeto em um diretório local, basta abrir com terminal (git bash no windows) e acessar o diretório da instalação e seguir os passos abaixo.

Para fazer o build dos containers, execute:
```bash
docker-compose build
```

Para executar os containers:
```bash
docker-compose up -d
```

Após realizar as etapas acima, o container estará funcionando e poderá ser acessado:
```bash
docker exec -it -w /var/www/quiz/src quiz-php bash
```

Ao acessar o container, execute os comandos abaixo:
```bash
composer install
cp .env.example .env
php artisan migrate --seed
```

Se tudo ocorrer bem, o quiz poderá ser acessado via http://localhost ou pelo IP utilizado pelo Docker.

## Design da solução
@TODO