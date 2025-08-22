# 08. Algoritmo de Agrupamento da Arena

## Objetivo
Evitar a formação de alianças pré-definidas (colusão) e balancear o poder entre os grupos na fase inicial da Arena.

## Passos do Algoritmo
1.  **Buckets de Nível:**
    - Os jogadores inscritos são primeiramente separados em "baldes" com base no **Nível** (0-10) e 

2.  **Regra Rígida de Grupos (Guildas):**
    - O sistema tenta, ao máximo, evitar colocar 2 ou mais jogadores com a mesma sigla de grupo no mesmo time, enquanto houver vagas em outros times.

3.  **Dispersão de Amizades:**
    - Utilizando um grafo de amizades, o algoritmo distribui jogadores que são amigos em times diferentes através de um sistema de round-robin.

4.  **Balanceamento de Poder:**
    - Após a distribuição inicial, o sistema calcula o poder de cada time (soma de ATK+DEF+SPD normalizados) e realiza trocas para garantir que a diferença de poder entre os times seja de no máximo ±10%.

5.  **Análise de Histórico:**
    - O algoritmo verifica o histórico das últimas 3 Arenas para não repetir as mesmas composições de times.

6.  **Seed do Evento:**
    - Cada Arena gera uma "seed" (semente) única para permitir a replicação dos agrupamentos em caso de auditoria ou análise.

7.  **Merge Global:**
    - Após 5 minutos, a fase de grupos termina e todas as regras de agrupamento são desfeitas. A batalha se torna um "todos contra todos" global.
