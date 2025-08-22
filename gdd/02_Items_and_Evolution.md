# 02. Itens, Loja e Evolução

## Itens
- **Categorias:** 10 categorias de itens (Capacete, Armadura, etc.).
- **Tiers:** 10 itens por categoria, divididos em tiers.
- **Evolução:** Cada item pode ser evoluído até o nível +10.

## Loja
- **Preço de Compra:** `250 * tier²`
- **Preço de Venda:** `40%` do preço de compra.

## Fórmulas de Evolução

### Atributo do Item
O atributo de um item é calculado com base no seu poder, categoria e nível de evolução.

`atributo = poder_base * peso_categoria * (1 + 0.15 * e)`
- `poder_base = tier * 10`
- `peso_categoria`: Define a distribuição de poder entre os atributos.
- `e`: Nível de evolução do item (0 a 10).

### Custo de Elixir
O custo para tentar evoluir um item para o próximo nível.

`custo_elixir = ceil(5 * (e + 1)²) `
- `e`: Nível de evolução atual.

### Chance de Sucesso
A chance base de sucesso ao evoluir um item.

| Nível Atual | Nível Alvo | Chance Base | Custo Elixir |
| :--- | :--- | :--- | :--- |
| +0 | +1 | 100% | 5 |
| +1 | +2 | 95% | 20 |
| +2 | +3 | 90% | 45 |
| +3 | +4 | 85% | 80 |
| +4 | +5 | 80% | 125 |
| +5 | +6 | 70% | 180 |
| +6 | +7 | 60% | 245 |
| +7 | +8 | 50% | 320 |
| +8 | +9 | 40% | 405 |
| +9 | +10 | 30% | 500 |

**Bônus de Chance:**
- **VIP:** +10%


## Livro Sagrado
- Item especial que evolui através do uso, não por elixir.
- A cada 5 usos, o nível sobe em 1, até o máximo de 10.
- Não depende de chance de sucesso.
