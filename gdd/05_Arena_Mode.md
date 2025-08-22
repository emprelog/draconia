# Fase 5: Modo Arena

**Objetivo:** Implementar a funcionalidade completa do modo de jogo Arena.

- [ ] Criar migrações para:
  - `arena_groups`
  - `arena_logs`
- [ ] Criar os Models correspondentes.
- [ ] Desenvolver os Jobs da Arena: `ArenaStartJob`, `ArenaTickJob`, `ArenaMergeJob`, `ArenaCloseJob`.
- [ ] Implementar o algoritmo de agrupamento anti-colusão.
- [ ] Criar os canais do Reverb para a Arena.
- [ ] Desenvolver a interface da Arena com Vuetify, seguindo o layout especificado (painel do jogador, grid, log).
- [ ] Criar os componentes Vue: `ArenaBoard.vue`, `PotencyPicker.vue`, `TargetPicker.vue`.
- [ ] Implementar os endpoints da API: `POST /events/{id}/register`, `POST /arena/{id}/action`.
- [ ] Implementar a Galeria da Arena (Top 30).
