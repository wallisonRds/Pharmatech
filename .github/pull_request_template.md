# 🚀 Pull Request: [Título da Funcionalidade ou Correção]

## 📝 Resumo da Alteração
Ex: "Módulo de Validade: Adição de alertas visuais no estoque e integração com o banco de dados PHP/SQL."

## 🛠️ Mudanças por Camada (Nexus-Dev)

### 🖥️ Front-end (Interface)
- [ ] Criado componente de alerta para medicamentos vencidos no `dashboard.php`.
- [ ] Implementada lógica JavaScript para manipular o DOM e destacar lotes críticos.
- [ ] Tratamento de mensagens de erro amigáveis para o usuário na tela de cadastro.

### ⚙️ Back-end (Lógica & PHP)
- [ ] Criado `EstoqueController` e lógica de filtragem de lotes.
- [ ] Implementada validação de campos obrigatórios (Nome, Lote, Validade).
- [ ] Adicionado middleware/verificação de sessão para proteger as rotas de inventário.

### 🗄️ Database (Persistência & SQL)
- [ ] Nova query/migration: criação da tabela `lotes_medicamentos`.
- [ ] Atualização do schema para incluir campos de `data_entrada` e `data_vencimento`.
- [ ] Indexação na coluna `codigo_barras` para otimização de busca no estoque.

---

## 🧪 Plano de Testes (Passo a Passo)
1. **Configuração:** Certifique-se de que o servidor local (XAMPP/Docker) está rodando e as tabelas SQL foram importadas.
2. **Teste de Sucesso:** Cadastre um medicamento com validade futura. Verifique se ele aparece na lista principal.
3. **Teste de Alerta:** Cadastre um item com validade para os próximos 5 dias. O sistema deve destacá-lo em vermelho/amarelo.
4. **Segurança:** Tente acessar a página de inventário sem estar logado. O sistema deve redirecionar para o `login.php`.

---

## 📸 Evidências Visuais
| Desktop (Web) | Mobile (Responsivo) |
| :--- | :--- |
| ![Preview Desktop](URL_AQUI) | ![Preview Mobile](URL_AQUI) |

---

## 🚨 Checklist de Qualidade (Nexus-Dev)
- [ ] **Segurança:** Não subi senhas de banco ou chaves de API no código.
- [ ] **SQL:** Testei as consultas e elas não causam lentidão no carregamento.
- [ ] **LGPD:** Verifiquei se não há exposição desnecessária de dados sensíveis.
- [ ] **Limpeza:** Removi `console.log`, `var_dump` e comentários de teste.
- [ ] **Documentação:** O `README.md` ou a Wiki foi atualizada com os novos campos de banco de dados.

---
**Relacionado à Issue:** #ID_DA_ISSUE
**Revisores Sugeridos:** @membro-da-equipe-1, @membro-da-equipe-2
