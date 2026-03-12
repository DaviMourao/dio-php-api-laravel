# 🎸 API de Bandas - Laravel 12

Este repositório contém o desenvolvimento de uma API RESTful construída passo a passo com base no Bootcamp de PHP da **Digital Innovation One (DIO)**. 

## 🚀 O Grande Diferencial: Refatoração e Modernização
O curso original da DIO foi gravado utilizando o ecosistema do **Laravel 5.8** e uma versão mais antiga do PHP. Para garantir que este projeto estivesse alinhado com o mercado atual, **toda a aplicação foi refatorada do zero por mim para utilizar o moderno Laravel 12 e o PHP 8.3**.

**Principais atualizações aplicadas em relação ao material original:**
* **Estrutura de Rotas:** Migração da sintaxe antiga baseada em strings (`'BandController@getAll'`) para a sintaxe moderna e segura baseada em arrays e classes (`[BandController::class, 'getAll']`).
* **Instalação de API Moderna:** No Laravel 12, o arquivo `api.php` não vem mais por padrão. A estrutura de API foi ativada manualmente utilizando os novos comandos (`php artisan install:api`).
* **Banco de Dados:** Atualização das configurações de `migrations` para evitar erros de limite de chaves (`1071 Specified key was too long`) comuns ao conectar versões novas do Laravel com bases de dados locais.

## 📁 Arquivos Desenvolvidos

Durante a jornada, estruturamos os seguintes arquivos principais:

* **`routes/api.php`**: O coração do roteamento da nossa API, onde todos os endpoints foram definidos usando o prefixo `/api` e apontados para seus respectivos Controllers.
* **`app/Http/Controllers/HelloWorldController.php`**: Nosso primeiro Controller de teste, criado para entender o fluxo de requisições `GET` e `POST`, bem como a captura de parâmetros de URL e payloads (Body) usando o objeto `Request`.
* **`app/Http/Controllers/BandController.php`**: O Controller principal da aplicação. Nele, desenvolvemos a lógica de negócio simulando a comunicação com o banco de dados. 

## 🔗 Endpoints da API

Abaixo estão as rotas disponíveis e testadas na aplicação:

| Método | Endpoint | Descrição |
|---|---|---|
| `GET` | `/api/bands` | Retorna a lista completa de bandas. |
| `GET` | `/api/bands/{id}` | Retorna os detalhes de uma banda específica com base no seu ID. Caso não exista, retorna erro `404 Not Found`. |
| `GET` | `/api/bands/gender/{genre}` | Filtra e retorna a lista de bandas com base no gênero musical (ex: *Rock*). |
| `POST` | `/api/hello-post/{name}` | Rota de teste que recebe um nome na URL e dados extras no `Body` (JSON), retornando a união de ambos. |

## 🛠️ Tecnologias Utilizadas

* **PHP 8.3**
* **Laravel 12**
* **MySQL** (via WampServer)
* **Thunder Client** (Extensão do VS Code para testes de requisições HTTPS)

## ⚙️ Como executar o projeto localmente

1. Clone este repositório.
2. Na raiz do projeto, instale as dependências usando o Composer:
   ```bash
   composer install

```

3. Crie um banco de dados MySQL e configure as credenciais no arquivo `.env`.
4. Execute as migrations para criar as tabelas necessárias:
```bash
php artisan migrate

```


5. Inicie o servidor embutido do Laravel:
```bash
php artisan serve

```


6. A API estará disponível em `http://127.0.0.1:8000/api`.

---

*Desenvolvido por Davi como parte do aprendizado em desenvolvimento Back-end.*

```



```
