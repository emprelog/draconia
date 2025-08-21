# 10. Modelos de Dados (Principais)

Esta é uma representação das principais tabelas do banco de dados MySQL.

-   **users:** Armazena dados de autenticação e roles (níveis de acesso do painel).
    -   `id`, `email`, `password`, `role`, `two_factor_secret`, ...

-   **characters:** Dados principais dos personagens.
    -   `id`, `id_publico`, `user_id`, `nome`, `avatar`, `grupo_id`, `vip_ate`, `evo`, `nivel`, ...

-   **groups:** Informações dos grupos (guildas).
    -   `id`, `nome`, `sigla`, `avatar`, `descricao`, `mural_permissoes`, `membros_max=7`

-   **group_posts:** Posts no mural de um grupo.
    -   `id`, `group_id`, `character_id`, `texto`

-   **friends:** Relação de amizade entre personagens.
    -   `character_id`, `friend_id`

-   **blocks:** Relação de bloqueio entre personagens.
    -   `character_id`, `blocked_id`

-   **items:** Definições estáticas dos itens.
    -   `id`, `categoria`, `tier`, `nome`, `pesos_json`

-   **character_items:** Itens que um personagem possui.
    -   `id`, `character_id`, `item_id`, `evolucao`, `equipado`

-   **techniques:** Definições estáticas das técnicas.
    -   `id`, `tipo`, `nome`, `base`, `custo_ki`, `cooldown`, `limites_json`, `arena_potencias`

-   **character_techniques:** Técnicas que um personagem aprendeu.
    -   `id`, `character_id`, `technique_id`, `evolucao`

-   **loadouts:** Loadouts de técnicas para cada modo de jogo.
    -   `id`, `character_id`, `modo`, `ataque_ids[]`, `defesa_ids[]`, `suporte_ids[]`

-   **matches:** Logs de partidas (PvP, Torneio, etc.).
    -   `id`, `modo`, `participantes_json`, `vencedor_id`, `log_compacto_json`, `seed`

-   **seasons:** Informações sobre as temporadas.
    -   `id`, `starts_at`, `ends_at`, `status`

-   **season_points:** Pontuação dos jogadores na temporada.
    -   `id`, `season_id`, `character_id`, `arena_pts`, `torneio_pts`, `invasao_pts`, `total`

-   **season_group_points:** Pontuação dos grupos na temporada.
    -   `id`, `season_id`, `group_id`, `total`, `membros_contabilizados_json`

-   **events:** Registros de todos os eventos agendados.
    -   `id`, `season_id`, `tipo`, `reg_start`, `fight_start`, `vagas`, `off_season`, `config_json`, `status`

-   **event_registrations:** Inscrições dos jogadores nos eventos.
    -   `id`, `event_id`, `character_id`, `status`

-   **arena_groups:** Grupos formados para uma partida de Arena.
    -   `id`, `event_id`, `group_no`, `character_ids_json`

-   **arena_logs:** Logs de ações da Arena para replay e processamento.
    -   `id`, `event_id`, `tick`, `payload_json`

-   **tournament_brackets:** Chaves e resultados do torneio.
    -   `id`, `event_id`, `round`, `match_no`, `a_id`, `b_id`, `winner_id`, `log_id`

-   **invasions:** Estado atual de uma invasão.
    -   `id`, `event_id`, `boss_hp_max`, `boss_hp_curr`, `entry_cost`, `last_hit_character_id`, `top_damage_character_id`

-   **invasion_damage:** Dano total causado por cada jogador na invasão.
    -   `id`, `event_id`, `character_id`, `damage_total`

-   **achievements / character_achievements:** Conquistas do jogo e quais jogadores as possuem.

-   **diary_posts / diary_comments:** Posts do diário e seus comentários.

-   **economy_logs:** Logs de transações de moedas para auditoria.
