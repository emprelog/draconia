# 11. Fluxos Técnicos e API

## Fluxos Principais (Backend)

### Arena
1.  **Inscrição:** Jogador se inscreve via `POST /events/{id}/register`. A inscrição é validada (vagas, etc.) e registrada em `event_registrations`.
2.  **Início:** `ArenaStartJob` é executado. Ele fecha as inscrições e usa o algoritmo de agrupamento para criar os times, salvando-os em `arena_groups`.
3.  **Ticks:** `ArenaTickJob` roda a cada 1 minuto. Processa as ações recebidas (`/arena/{id}/action`), resolve os combates, e envia as atualizações para os clientes via Laravel Reverb.
4.  **Merge:** Após 5 minutos, `ArenaMergeJob` une os grupos, movendo todos os jogadores para um canal global (`arena:{id}:global`).
5.  **Fim:** `ArenaCloseJob` é executado. Define o pódio, salva os Top 30 na galeria, distribui medalhas/pontos e atualiza `season_points`.

### Torneio
1.  **Inscrição e Bots:** Após o período de inscrição, `TournamentFillBotsJob` é executado para preencher vagas vazias, se necessário.
2.  **Chaves:** O sistema gera as chaves do torneio e as salva em `tournament_brackets`.
3.  **Rodadas:** `TournamentRoundJob` gerencia as partidas em horários definidos. A comunicação durante a luta é via WebSocket (Reverb).
4.  **Fim:** `TournamentCloseJob` finaliza o evento, salva a chave final e os destaques na galeria.

### Invasão
1.  **Entrada:** Jogador entra no evento via `POST /invasion/{id}/attack`, pagando o custo de entrada.
2.  **Ações do Boss:** `InvasionTickJob` executa as ações do boss (como contra-ataques) em intervalos regulares.
3.  **Fim:** `InvasionCloseJob` é acionado quando o boss é derrotado. Ele registra o Last Hit e o Top Dano, distribui os prêmios e atualiza a galeria.

## Resumo de Jobs
-   **Arena:** `ArenaStartJob`, `ArenaTickJob` (1m), `ArenaMergeJob` (5m), `ArenaCloseJob`
-   **Torneio:** `TournamentFillBotsJob`, `TournamentRoundJob`, `TournamentCloseJob`
-   **Invasão:** `InvasionTickJob`, `InvasionCloseJob`
-   **Temporada:** `SeasonCloseJob` (consolida pontos e distribui prêmios)

## Endpoints-Chave (API REST)
-   `POST /events/{id}/register`: Inscreve o jogador em um evento.
-   `POST /arena/{id}/action`: Envia uma ação do jogador na Arena (técnica, potência, alvo).
-   `POST /tournament/{id}/action`: Envia uma ação em uma luta de torneio.
-   `POST /invasion/{id}/attack`: Ataca o boss da Invasão.
-   `GET /events/calendar`: Lista os próximos eventos e suas janelas de inscrição/combate.
-   `GET /galleries?season={id}&type=arena|torneio|invasao`: Retorna os dados das galerias.
-   `GET /season/{id}/leaderboards?scope=individual|grupos`: Retorna os rankings da temporada.
