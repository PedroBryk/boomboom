# 💪 Sistema de Gerenciamento de Academia com Laravel

---

## 🚀 Sobre o Projeto

Este sistema foi desenvolvido para gerenciar uma academia de forma simples e eficiente, usando o framework Laravel.  
A ideia central é que o sistema suporte três tipos de usuários:  

- **Aluno:** pode fazer login, visualizar seus treinos personalizados e consultar as aulas disponíveis para se inscrever.  
- **Professor:** pode criar e gerenciar aulas e treinos, ajudando os alunos a alcançarem seus objetivos.  
- **Administrador:** tem controle total sobre o sistema, incluindo o gerenciamento de usuários e permissões.

---

## 🏋️ Funcionalidades Principais

- Sistema de autenticação para alunos, professores e administradores.  
- Visualização e gerenciamento de treinos e aulas.  
- Inscrição dos alunos nas aulas disponíveis.  
- Controle administrativo completo dos usuários.

---

## 🛠️ Estrutura do Projeto

### Migrations criadas:

- `aluno`: tabela de alunos;
- `professor`: tabela de professores;
-`administrador`: tabela de administradores;  
- `aulas`: cadastro das aulas oferecidas.  
- `treinos`: registro dos treinos disponibilizados.  

### Controllers implementados:

-AlunoController
-ProfessorController
-AdministradorController
-AulaController
-TreinoController

### Models implementadas:

-Aluno
-Professor
-Administrador
-Aula
-Treino

### Rotas implementadas (apenas para testes):

-/Alunos
-/Professores
-/Administrador
-/Aulas
-/Treinos

### Views implementadas (apenas para testes):

Para cada controller foi criada uma pasta dentro das views e cada pasta contém um arquivo index.blade.php para teste

