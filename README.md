
# 🕒 In-N-Out - Sistema de Ponto Eletrônico

<p align="center">
  <img alt="Status do Projeto" src="https://img.shields.io/badge/status-concluído-green">
</p>

<p align="center">
  <img alt="PHP" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img alt="MySQL" src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
  <img alt="JavaScript" src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">
  <img alt="Bootstrap" src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white">
  <img alt="HTML5" src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white">
  <img alt="CSS3" src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white">
</p>

## 📄 Sobre o Projeto

**In-N-Out** é um sistema completo de registro de ponto para funcionários, desenvolvido para facilitar o controle de horas trabalhadas. O projeto foi criado como parte do curso de PHP da Cod3r, aplicando conceitos de desenvolvimento web em uma aplicação prática e funcional.

O grande diferencial deste projeto é a construção de um **mini-framework PHP do zero**, seguindo os princípios da arquitetura **MVC (Model-View-Controller)**, o que garante um código organizado, manutenível e escalável.

---

## ✨ Principais Funcionalidades

### Para Funcionários:
-   ✅ **Autenticação Segura:** Sistema de login e gerenciamento de sessão.
-   ✅ **Dashboard Principal:** Tela para registrar os pontos do dia (entrada/saída).
-   ✅ **Registro de Ponto em Tempo Real:** Botão para "Bater o Ponto" que registra a hora exata.
-   ✅ **Widgets Dinâmicos:**
    -   Exibição do total de horas trabalhadas no dia, com **atualização em tempo real** via JavaScript.
    -   Cálculo e exibição da **hora de saída projetada**, considerando a jornada de 8 horas e o intervalo de almoço.
-   ✅ **Relatório Mensal Individual:** Visualização de todos os registros de ponto do mês, com cálculo do saldo de horas (crédito/débito).

### Para Administradores:
-   ✅ **Controle de Acesso:** Rotas e itens de menu são exibidos ou ocultados com base no perfil do usuário (admin vs. comum).
-   ✅ **Relatório Mensal Completo:** Acesso ao relatório mensal de **qualquer funcionário** através de filtros.
-   ✅ **Relatório Gerencial:**
    -   Dashboard com indicadores-chave: total de funcionários ativos, faltas no dia e soma de horas trabalhadas pela equipe no mês.
    -   Tabela com a lista de funcionários ausentes no dia.
-   ✅ **Gerenciamento de Usuários (CRUD Completo):**
    -   **C**reate: Formulário para cadastrar novos usuários.
    -   **R**ead: Tabela com a lista de todos os usuários.
    -   **U**pdate: Formulário para editar os dados de usuários existentes.
    -   **D**elete: Funcionalidade para excluir usuários, com proteção para não remover quem possui registros de ponto.

### Segurança e Desenvolvimento:
-   ✅ **Proteção contra XSS:** Sanitização de todos os dados de entrada para prevenir ataques de Cross-Site Scripting.
-   ✅ **Validação no Back-end:** Regras de validação robustas no formulário de cadastro de usuário.
-   ✅ **Ferramenta de Teste:** Formulário para "simular" batidas de ponto em horários específicos, facilitando os testes da lógica de cálculo.

---

## 🛠️ Tecnologias e Arquitetura

-   **Back-end:**
    -   **PHP 7.4+** (Vanilla - procedural e orientado a objetos).
    -   **Arquitetura MVC** construída do zero.
    -   **Padrão Active Record (simplificado)** para interação com o banco de dados.
-   **Front-end:**
    -   HTML5 (com tags semânticas).
    -   CSS3 e **Bootstrap** para layout e componentes.
    -   **JavaScript (Vanilla)** para interatividade e atualizações em tempo real.
-   **Banco de Dados:** MySQL.
-   **Ambiente de Desenvolvimento:** Servidor web local (XAMPP, MAMP, Laragon) com Apache.

---

## 🚀 Como Executar o Projeto

Siga os passos abaixo para executar o projeto em seu ambiente local.

**1. Pré-requisitos:**
-   [Git](https://git-scm.com/)
-   [PHP](https://www.php.net/) 7.4 ou superior
-   Servidor web local com Apache e MySQL (XAMPP, MAMP, Laragon, etc.)

**2. Clone o Repositório:**
```bash
git clone [https://github.com/GPetrolini/projeto-in-n-out.git](https://github.com/GPetrolini/projeto-in-n-out.git)
