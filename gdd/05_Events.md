# 05. Eventos (Com Horário)

Todos os eventos possuem um fluxo de **Inscrição → Combate**, com horários visíveis no Calendário do jogo.

## 8.1 Arena (Todos vs. Todos)
- **Turno Global:** 1 minuto.
- **Fases:**
    1.  **Fase 1 (5 min):** Jogadores são divididos em grupos balanceados e só podem atacar membros do seu próprio grupo.
    2.  **Fase 2 (Merge):** Os grupos são desfeitos e todos os jogadores restantes podem se enfrentar até que reste apenas um campeão.
- **Pódio:** Ouro, Prata e Bronze são premiados.
- **Inatividade:** 10 minutos sem realizar uma ação resulta em eliminação sem recompensa.
- **Galeria:** Um registro permanente dos Top 30 de cada Arena da temporada.
- **Pontuação:** Concede pontos para o ranking da temporada (ver `06_Seasons_and_Ranking.md`).
- **Layout (Fixo):**
    - **Topo:** Painel do jogador (HP, Ki, seletores de técnica, potência e alvo, botão de ataque).
    - **Meio:** Grid com todos os jogadores (HP/Ki, status, sigla do grupo, ícones de efeito).
    - **Rodapé:** Log de combate (ataques, esquivas, crits, eliminações, etc.).
- **Potência:** O jogador pode escolher a potência do ataque (1, 2 ou 3), onde mais potência gasta mais Ki para causar mais dano.
- **Anti-Colusão:** Um algoritmo de agrupamento é usado para evitar alianças pré-definidas (ver `08_Arena_Grouping_Algorithm.md`).

### Horários da Arena (Exemplo)
| Inscrições | Combates | Vagas | Tipo       |
| :--- | :--- | :--- | :--- |
| 06:30      | 07:00    | 100   | Off Season |
| 10:30      | 11:00    | 100   | Normal     |
| 12:30      | 13:00    | 100   | Normal     |
| 15:30      | 16:00    | 100   | Normal     |
| 18:30      | 19:00    | 100   | Normal     |
| 22:30      | 23:00    | 100   | Off Season |

*Arenas "Off Season" não contam pontos para a temporada, mas concedem drops e conquistas.* 

## 8.2 Torneio (Semanal)
- **Formato:** Eliminação simples 1x1.
- **Vagas:** Limite de vagas configurável no painel de administração.
- **Auto-Preenchimento:** Se o número de inscritos for menor que o mínimo (ex: 8), o sistema preenche as vagas com bots para garantir que o evento ocorra.
- **Galeria:** A chave final do torneio e os Top 30 melhores desempenhos são registrados.
- **Pontuação:** Concede pontos de temporada com base na classificação final.

## 8.3 Invasão (Boss Global)
- **Formato:** Todos os jogadores contra um Boss global.
- **Interface:** Apresenta um grid de participantes, log de dano e sistema de eliminação por inatividade (10 min).
- **Custo de Entrada:** Cada participação consome uma quantia de Dinheiro (moeda soft).
- **Comportamento do Boss:** Pode esquivar e contra-atacar alvos aleatórios entre os participantes.
- **Prêmios Especiais:** Recompensas únicas para o jogador que der o **Last Hit** (último golpe) e para o que causar o **Top Dano**.
- **Galeria:** Registro dos Top 30 contribuidores da temporada.
