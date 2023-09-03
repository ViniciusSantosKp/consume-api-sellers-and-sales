# Api tray sales and sellers

Projeto criado utilizando PHP/Laravel, Livewire tailwind.css e Kool com o objetivo de criar uma aplicação para consumir uma api.
 - cadastrar vendedores e vendas.
 - Listar Vendedores
 - Listar vendas totais.
 - Listar vendas de vendedores específicos.


O motivo de usar o Kool.dev no projeto é simplificar as configurações docker e diminuir a necessidade de muitos comandos.
As configurações do docker estão nos arquivos docker-compose.yml normalmente.

### Environment Requirements

- **[Instalar o Docker](https://docs.docker.com/get-docker/)**
- **[Instalar Docker compose v2](https://docs.docker.com/compose/install/)**
- **[Instalar Kool.dev](https://kool.dev/docs/getting-started/installation)**


### Setup

**Clone o repositório no diretório à sua escolha**
Clone o projeto para o diretório de sua escolha.
Em seguida rode os seguintes comandos no terminal (dentro do diretório do projeto)

```bash
    kool run setup
    kool run artisan migrate
```
Para verificar os comandos disponíveis do Kool, acessar o arquivo Kool.yml

Para utilizar essa aplicação, foi criado uma API chamada "API Sellers and Sales" disponíveis aqui no GitHub. Para rodar os dois localmente, é necessário rodar o seguinte comando no terminal (no diretório desse projeto)

```bash
    kool run artisan serve --port=9191
```
acessar o localhost na porta 9191 que o serve utiliza.

OBS*** = Para testar a api simultâneamente localmente, é necessário a instalação e configuração de algum serviço de tunnel para rodar a API (Utilizei Ngrok)

- **[Instalar o Ngrok](https://ngrok.com/docs/getting-started/)**

### OBS****
Outra necessidade é alterar a url da api no arquivo app/Providers/ApiSellersAndSalesProvider na linha 16

```bash
    -'base_uri' => 'https://localhost:8989',
    +'base_uri' => 'https://url-da-api',
```