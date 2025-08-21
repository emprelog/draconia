# 13. Regras Específicas e Anti-Abuso

## Anti-Abuso e Justiça
-   **Rate Limits:** Limites de requisições para inscrições e ações por tick para prevenir spam e abuso.
-   **Anti-Colusão (Arena):**
    -   O sistema detecta "não agressão" prolongada entre amigos ou membros da mesma guilda após o merge.
    -   Se detectado, pode aplicar um debuff de exposição (`-DEF`) sobre os jogadores que não atacam por `N` turnos.
-   **Logs de Auditoria:** Todas as mudanças administrativas, seeds de eventos e distribuições de prêmios são registradas para garantir a transparência.
-   **Bots de Torneio:** São claramente marcados com um ícone e possuem stats baseados na média dos jogadores inscritos para serem competitivos, mas justos.

## Regras Específicas da Invasão
-   **Entrada:** Consome `entry_cost` (Dinheiro) a cada vez que o jogador entra para atacar o boss.
-   **Boss:**
    -   Possui uma chance de esquiva (ex: 10-15%).
    -   Pode realizar um contra-ataque aleatório por tick.
    -   Pode aplicar debuffs globais (ex: `-5% SPD` para todos os jogadores por 2 turnos).
-   **Prêmios:** Last Hit e Top Dano são únicos e concedidos no final do evento.

## Torneio — Limite de Vagas
-   O limite é definido no Painel de Administração (ex: 64 vagas).
-   Se o número de inscritos for ímpar ou não preencher a chave, o sistema gera `byes` (passagens diretas) ou preenche com bots.
-   O torneio sempre ocorre se houver no mínimo 8 jogadores reais inscritos.

## Conquistas e Medalhas (Exemplos)
-   **Campeão de Arena:** Vencer uma Arena (medalha de ouro).
-   **Lâmina do Torneio:** Vencer um Torneio (1º lugar).
-   **Último Golpe:** Dar o last hit em um boss de Invasão.
-   **Flagelo do Draco:** Ser o Top Dano em uma Invasão.
-   **Maratonista:** Participar de todas as Arenas Normais de uma temporada.
-   **Emblema 18:** Atingir o nível 10 em todas as técnicas e ter itens com média de evolução `+9` ou superior.
