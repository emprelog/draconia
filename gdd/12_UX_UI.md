# 12. UI/UX e PWA

## UI/UX (Vuetify 3.9 + Playfair Display)

### Home (Tela Principal)
-   Apresenta uma série de cards para acesso rápido às principais funcionalidades:
    -   Lutar (NPC/PvP)
    -   Arena
    -   Torneio
    -   Invasão
    -   Inventário
    -   Técnicas
    -   Grupos
    -   Diário
    -   Perfil
-   Inclui um **Calendário** que mostra as próximas janelas de eventos (Inscrição/Combate) e seu tipo (Normal/Off Season).

### Arena
-   **Layout Fixo e Responsivo:**
    -   **Topo:** Painel do jogador com HP/Ki, seletores para técnicas, potência e alvo, e o botão "Atacar".
    -   **Meio:** Um grid que exibe todos os participantes com avatar, sigla do grupo (`|SIG|`), barras de HP/Ki, ícones de buffs/debuffs e status de inatividade.
    -   **Rodapé:** Um log detalhado com todas as ações da partida (ataques, esquivas, danos, curas, eliminações, etc.).

### Torneio
-   Apresenta uma **chave de torneio interativa**.
-   Inclui um botão "Assistir" para acompanhar partidas ao vivo.

### Invasão
-   Exibe uma **barra de HP gigante** para o boss.
-   Mostra uma lista de participantes com o dano total causado.
-   O botão "Atacar" informa o custo de entrada antes de confirmar a ação.

### Perfis de Jogador
-   Exibe **badges** de medalhas conquistadas.
-   Mostra **Emblemas** (como o Emblema 18).
-   Apresenta uma galeria de destaques pessoais do jogador.

## PWA e Notificações

-   O jogo deve ser uma Progressive Web App (PWA) para permitir a instalação em dispositivos móveis e acesso offline a certas funcionalidades (catálogo de itens, loja, diário, galerias).
-   **Notificações Push** serão enviadas para:
    -   Início de eventos nos quais o jogador se inscreveu.
    -   Resultados de partidas (vitória/derrota).
    -   Notificação de prêmios especiais (Last Hit/Top Dano na Invasão).
    -   Fim da temporada e recebimento de recompensas.
    -   Venda de um item no mercado (se aplicável).
    -   Sucesso em uma evolução de item importante.
