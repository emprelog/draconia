# 09. Painel de Administração

O painel de administração é uma ferramenta web para gerenciar todos os aspectos do jogo, com diferentes níveis de acesso para a equipe.

## Níveis de Acesso (Roles)
- **Admin Mestre:** Acesso total. Pode gerenciar usuários, permissões, economia e realizar resets.
- **Game Designer:** Acesso para configurar o balanceamento do jogo (dano, custos, chances, pontos de temporada, prêmios, limites de uso, configurações de bosses).
- **Event Manager:** Cria e edita eventos (Arena, Torneio, Invasão), incluindo horários, vagas, tipo (normal/off-season) e bots.
- **Moderador:** Modera conteúdo gerado por usuários (Diário, Mural), gerencia bans e silêncios, e aprova avatares.
- **Analista:** Acesso de apenas leitura a relatórios e logs do jogo.

## Seções do Painel

1.  **Temporadas:**
    - Criar, editar e encerrar temporadas.
    - Configurar a pontuação por evento e posição.
    - Definir as recompensas finais (individuais e de grupos).

2.  **Eventos:**
    - **Arena:** Gerenciar janelas de inscrição/combate, vagas, tipo, duração das fases, limites de inatividade e pesos do algoritmo de agrupamento.
    - **Torneio:** Definir limite de vagas, horários, regras de bots e prêmios.
    - **Invasão:** Configurar HP do boss, resistências, custo de entrada, chances de esquiva/contra-ataque e prêmios (Last Hit/Top Dano).

3.  **Economia & Balanceamento:**
    - Ajustar custos de evolução, chances base, decaimento de cura/escudo, ganhos por modo e prêmios de medalhas.
    - Gerenciar o status VIP.

4.  **Conteúdo:**
    - Cadastrar e editar itens, técnicas, NPCs, bosses e conquistas (com ícones e chaves).

5.  **Usuários/Grupos:**
    - Gerenciar permissões, siglas de grupos, auditoria de mudanças e resets de nome (pago).

6.  **Galerias & Rankings:**
    - Aprovar destaques para as galerias.
    - Visualizar e exportar (CSV) os Top 30 por evento.

7.  **Relatórios:**
    - Visualizar dados de participação, retenção, economia, combate e logs do algoritmo anti-colusão.

8.  **Sistema:**
    - Monitorar jobs e filas (Redis).
    - Gerenciar canais Reverb, limiares anti-spam, webhooks e backups.
