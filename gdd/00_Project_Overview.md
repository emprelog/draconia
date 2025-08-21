# 00. Visão & Loop do Projeto

## Tema
- Cavaleiros e dragões.
- RPG tático de turnos, rápido e mobile-first.

## Loop Principal
1.  **Entrar:** O jogador acessa o jogo.
2.  **Pegar Recompensas:** Coleta recompensas diárias, de missões ou de eventos.
3.  **Evoluir:** Melhora itens e técnicas usando os recursos obtidos.
4.  **Lutar:** Engaja em combates (NPC, PvP, Eventos).
5.  **Ganhar:** Adquire elixir, dinheiro e medalhas através das lutas.
6.  **Subir no Ranking:** Melhora sua posição nos rankings individuais e de grupo.
7.  **Repetir.**

## Princípios de Design
- **Simplicidade:** Interface com poucas telas e decisões claras para o jogador.
- **Progressão Visível:** O avanço do jogador é claramente perceptível.
- **Combate Rápido:** Lutas na Arena são baseadas em turnos de 1 minuto.

## Stack Tecnológica
- **Backend:** Laravel 12 usando bibliotecas já prontas do laravel para agilizar o desenvolvimento, como Laravel Jetstream 
- **Frontend:** Vue.js 3.5 com Inertia.js v2
- **UI:** Vuetify 3.9
- **Real-time:** Laravel Reverb
- **Banco de Dados:** MySQL
- **Cache/Filas:** Redis
- **Fonte (Títulos):** Playfair Display
