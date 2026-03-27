Markdown
# 💊 PharmaTech - Sistema de Gerenciamento de Estoque Farmacêutico

![Status](https://img.shields.io/badge/Status-Em%20Desenvolvimento-yellow)
![License](https://img.shields.io/badge/License-MIT-green)
![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php)
![JS](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?logo=javascript)

O **PharmaTech** é uma solução robusta para o controle de inventário de farmácias, focada na organização de medicamentos, monitoramento de lotes e alertas de validade. O sistema foi desenvolvido com uma arquitetura separada entre **Backend** e **Frontend** para garantir escalabilidade e manutenção simplificada.

---

## 🚀 Funcionalidades Principais

* **📦 Controle de Estoque:** CRUD completo de medicamentos e produtos correlatos.
* **🔢 Gestão de Lotes:** Rastreamento detalhado por lote e fornecedor.
* **⚠️ Alertas de Validade:** Monitoramento automático de produtos próximos ao vencimento.
* **📊 Dashboard Administrativo:** Visualização rápida de itens críticos e métricas de estoque.
* **🏗️ Arquitetura MVC:** Organização clara de rotas, controladores e modelos.
* **🛡️ Conformidade LGPD:** Implementação de boas práticas no tratamento de dados sensíveis.

---

## 📁 Estrutura do Projeto

* **`.github/`**: Templates de Issue e Pull Request para padronização do desenvolvimento.
* **`back/`**: API em PHP contendo a lógica de negócio e conexão com banco de dados.
* **`database/`**: Scripts SQL (`schema.sql` e `seeds.sql`) para replicação do banco.
* **`front/`**: Interface do usuário construída com HTML, CSS modular e JS Moderno.

---

## 🛠️ Tecnologias Utilizadas

### **Backend**
* **Linguagem:** PHP 8.x
* **Banco de Dados:** SQLite (Desenvolvimento) / MySQL (Produção)
* **Padrão:** MVC (Model-View-Controller)

### **Frontend**
* **Interface:** HTML5 & CSS3 (Metodologia de componentes)
* **Interatividade:** JavaScript (ES6+ com módulos)
* **Design:** Figma (Prototipagem de UI/UX)

---

## 🔧 Como Executar o Projeto

### **Pré-requisitos**
* PHP 8.x ou superior instalado.
* Extensão `pdo_sqlite` habilitada no seu `php.ini`.
* Git para clonagem.

### **1. Clonar o repositório**
```bash
git clone [https://github.com/wallisonRds/pharmatech.git](https://github.com/wallisonRds/pharmatech.git)
cd pharmatech
2. Configurar o Banco de Dados
Os scripts estão na pasta /database. Se usar o SQLite (recomendado para teste), o arquivo database.sqlite já contém a estrutura.

Para MySQL: Importe o schema.sql e o seeds.sql (dados de teste) no seu gerenciador.

3. Iniciar o Backend
Acesse a pasta da API e inicie o servidor embutido do PHP:

Bash
cd back/public
php -S localhost:8000
4. Acessar o Frontend
Como o frontend consome a API do backend, ele deve ser servido para evitar problemas de CORS. Você pode usar a extensão Live Server do VS Code no arquivo front/public/index.php ou rodar outro servidor PHP:

Bash
cd front/public
php -S localhost:3000
Acesse http://localhost:3000 no seu navegador.

👥 Equipe (Nexus-Dev)
Este projeto é desenvolvido pela equipe Nexus, seguindo padrões rigorosos de qualidade, documentação e estabilidade institucional.