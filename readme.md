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
Abaixo tentarei explciar os processos que passei para desenvolver a solução solicitada.

### Arquitetura
Em uma aplicação real para o tema proposto, consideraria utilizar alguma tecnologia javascript para interação com o usuário, levaria em consideração ReactJs ou Vue.js, deixando o back-end responsável apenas por prover os dados e para calcular o resultado. Preferi utilizar apenas PHP pelo fato do teste ser para uma posição de programador PHP.
Apesar da aplicação não necessitar de um banco de dados por não existir nenhuma operação de gravação ou alteração de registro, optei por utilizá-lo por ser uma demonstração didática.

### Escolha do framework
Optei por utilizar o Laravel pela arquitetura proposta pelo framework e pelo conhecimento na ferramenta. Consigo ser bastante produtivo utilizando-o.

### Considerações finais
A etapa mais desafiadora foi classificar as respostas de acordo com a série e também levar em consideração o peso de cada questão para o resultado final. 
Gostaria, se possível, que independente do processo 