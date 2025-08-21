# 01. Contas, Personagens, Grupos e Social

## Contas
- Autenticação completa com e-mail e senha.
- Autenticação de Dois Fatores (2FA) opcional.

## Personagens
- Até 3 personagens por conta.
- **Nome:** Alfanumérico, único, máximo de 16 caracteres.
- **ID:** Imutável e único (ex.: `DRG-8K9F3Q`).
- **Avatar:** Upload de imagem pelo jogador.

## Grupos
- **Membros:** Até 7 por grupo.
- **Afiliação:** 1 grupo por jogador.
- **Sigla:** 3 letras, exibida entre `|` (ex.: `|SIG|`) no nome do personagem.
- **Mural:** Espaço para comunicação interna do grupo.

## Social
- **Interações:** Adicionar amigos, bloquear jogadores, notificações.
- **Feed do Jogo:** Exibe apenas conquistas e eventos importantes (sem posts de jogadores).
- **Diário:** Seção de notícias e atualizações postadas por administradores, com sistema de comentários para jogadores logados.

# Atributos, Moedas e EVO

## Atributos Primários
- **Vida (HP):** Pontos de saúde do personagem.
- **Ki (KI):** Recurso para uso de técnicas.
- **Força (ATK):** Influencia o dano causado.
- **Resistência (DEF):** Reduz o dano recebido.
- **Velocidade (SPD):** Determina a ordem de ataque e bônus de crítico.

## Moedas
- **Dinheiro:** Moeda soft, obtida no jogo.
- **Créditos:** Moeda premium, comprada ou ganha em eventos.
- **Elixir:** Recurso para evolução de itens e técnicas.

## EVO (Metaprogressão)
- **O que é:** Um sistema de progressão da conta, que sobe ao evoluir itens, técnicas e ganhar medalhas de temporada.
- **Bônus:**
    - Regeneração de Ki fora de combate aumentada em `+EVO%`.
    - `EVO × 0,2` pontos de atributo para distribuir (HP/ATK/DEF/SPD).
    - Até `+10%` de chance de sucesso em evoluções de itens a partir do nível +6.

## VIP
- **Duração:** Ativado por dias (item consumível).
- **Bônus:**
    - `+10%` de chance de sucesso em evoluções.
    - `+10%` de elixir ganho.
    - Prioridade em filas de matchmaking.
    - Ícone especial no nick do personagem.

# Nível do Jogador

- **Cálculo:** `Nível = Média arredondada (10 itens + 9 técnicas)`.
- **Exibição na UI:** "Nível X/10" e "EVO Y".
