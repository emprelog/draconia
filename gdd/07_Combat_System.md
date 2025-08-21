# 07. Regras Comuns de Combate

## Ordem de Turno
- A ordem das ações é determinada pelo atributo **Velocidade (SPD)**.
- Uma diferença de SPD alta em relação ao oponente concede uma chance de 5% de ganhar um turno extra (máximo de 1 por rodada).

## Fórmulas de Dano

### Ataque Básico
`dano = (ATK * 1.0) - (DEF * 0.35)`
- O dano mínimo é sempre 1.

### Técnicas
- O dano ou efeito das técnicas varia de `1.2x` a `2.0x` do valor base, além de outras escalas (como por SPD ou ATK).

### Dano Crítico
- **Chance Base:** 5%
- **Bônus:** A chance de crítico pode aumentar em até 5% com base na SPD.

## Restrições Específicas da Arena
Para manter o combate dinâmico e evitar loops, a Arena possui regras especiais:
- **Decaimento de Cura/Escudo:** A eficácia de curas e escudos diminui se a mesma técnica for usada repetidamente.
- **Usos Limitados:**
    - **Eco de Mana:** Máximo de 2 usos por partida.
    - **Eco do Leviatã:** Máximo de 3 usos por partida.
