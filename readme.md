# Projeto de Autenticação em PHP

Este é um projeto de autenticação em PHP que inclui um sistema de cadastro e login básico usando PHP, MySQL e Bootstrap. Este projeto é ideal para estudos e pode ser utilizado como parte do seu portfólio de desenvolvimento web.

## Funcionalidades

- Cadastro de novos usuários com validação de campos.
- Login de usuários existentes.
- Proteção de páginas para permitir apenas o acesso a usuários autenticados.
- Página de acesso negado para usuários não autenticados.

## Estrutura do Projeto

O projeto está estruturado da seguinte forma:

- **cadastro/**: Contém arquivos relacionados ao formulário de cadastro.
- **login/**: Contém arquivos relacionados ao formulário de login.
- **connection.php**: Arquivo de conexão com o banco de dados MySQL.
- **denied-access.php**: Página exibida quando o acesso é negado.
- **index.php**: Página principal, exibida quando o usuário está autenticado.
- **protect.php**: Script que protege as páginas, permitindo apenas o acesso a usuários autenticados.

## Instruções de Uso

1. Clone este repositório em seu ambiente local.
2. Importe o arquivo SQL `create_users_table.sql` para criar a tabela `users` em seu banco de dados MySQL.
3. Configure as informações de conexão com o banco de dados no arquivo `connection.php`.
4. Abra o projeto em um servidor web (por exemplo, Apache).
5. Acesse o projeto via navegador para testar as funcionalidades.

## Estrutura do Banco de Dados

Para criar a tabela `users`, utilize o seguinte SQL:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL
);
