# Fase 2: Modelos Centrais do Jogo

**Objetivo:** Estruturar o banco de dados e os models para as mecânicas principais do jogo.

- [ ] Criar migrações para:
  - `groups`, `group_posts`
  - `friends`, `blocks`
  - `items`, `character_items`
  - `techniques`, `character_techniques`, `loadouts`
  - `achievements`, `character_achievements`
  - `diary_posts`, `diary_comments`
  - `economy_logs`
- [ ] Criar os Models correspondentes para cada tabela.
- [ ] Implementar as relações (eloquent) entre os models.
- [ ] Implementar a lógica de evolução de itens e técnicas.
- [ ] Implementar o sistema de Grupos (criação, convite, mural).
- [ ] Implementar o sistema social (amigos, bloquear).
