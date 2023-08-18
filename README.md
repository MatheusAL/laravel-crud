
## Crud de Clientes

Aplicação criada como teste técnico para vaga de desenvolvedor.


## Como executar o projeto?

1. Primeiro, é necessário clonar o projeto:
```bash
git clone https://github.com/MatheusAL/laravel-crud.git
```
2. Em seguida, a instalação das dependências:
```bash
npm install
#ou
yarn install
```
3. O próximo passo é a criação do arquivo .env na raiz do projeto com as variáveis DB_DATABASE e DB_PASSWORD, foi fornecido um arquivo .env.example para auxiliar.

4. Para subir o banco de dados é preciso rodar os seguintes comandos:

```bash
php artisan migrate
#e
php artisan db:seed
```

5. Por fim, para rodar o projeto é necessário rodar dois comandos ao mesmo tempo(importante):
```bash
npm run dev
#e
php artisan:serve
```
