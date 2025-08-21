# 15. Dados para Seed

Este arquivo contém os dados em formato JSON para popular o banco de dados inicial do jogo.

```json
{
  "meta": {
    "game": "Draconiano",
    "generated_at": "2025-08-21T01:09:49.359092"
  },
  "items": [
    {
      "id": "item_1",
      "category_key": "head",
      "category_label": "Capacete",
      "tier": 1,
      "name": "Capuz do Iniciado",
      "base_price": 250,
      "sell_price": 100,
      "weights": {
        "vida": 0.6,
        "ki": 0.4
      },
      "attributes_by_evolution": {
        "0": {
          "vida": 6.0,
          "ki": 4.0
        },
        "1": {
          "vida": 6.9,
          "ki": 4.6
        },
        "2": {
          "vida": 7.8,
          "ki": 5.2
        },
        "3": {
          "vida": 8.7,
          "ki": 5.8
        },
        "4": {
          "vida": 9.6,
          "ki": 6.4
        },
        "5": {
          "vida": 10.5,
          "ki": 7.0
        },
        "6": {
          "vida": 11.4,
          "ki": 7.6
        },
        "7": {
          "vida": 12.3,
          "ki": 8.2
        },
        "8": {
          "vida": 13.2,
          "ki": 8.8
        },
        "9": {
          "vida": 14.1,
          "ki": 9.4
        },
        "10": {
          "vida": 15.0,
          "ki": 10.0
        }
      },
      "evolution_costs": {
        "0->1": {
          "elixir_required": 5,
          "success_chance_percent": 100
        },
        "1->2": {
          "elixir_required": 20,
          "success_chance_percent": 95
        },
        "2->3": {
          "elixir_required": 45,
          "success_chance_percent": 90
        },
        "3->4": {
          "elixir_required": 80,
          "success_chance_percent": 85
        },
        "4->5": {
          "elixir_required": 125,
          "success_chance_percent": 80
        },
        "5->6": {
          "elixir_required": 180,
          "success_chance_percent": 70
        },
        "6->7": {
          "elixir_required": 245,
          "success_chance_percent": 60
        },
        "7->8": {
          "elixir_required": 320,
          "success_chance_percent": 50
        },
        "8->9": {
          "elixir_required": 405,
          "success_chance_percent": 40
        },
        "9->10": {
          "elixir_required": 500,
          "success_chance_percent": 30
        }
      }
    }
  ],
  "techniques": [
    {
      "id": "tech_1",
      "type": "attack",
      "name": "Corte Escamado",
      "base_ki": 10,
      "base_cd": 0,
      "description": "Dano físico leve.",
      "levels": {
        "1": {
          "power_estimate": 10.0,
          "effect_multiplier": 1.0,
          "elixir_to_next": 28,
          "notes": "Level 1: +0% effect over base"
        },
        "2": {
          "power_estimate": 10.6,
          "effect_multiplier": 1.06,
          "elixir_to_next": 63,
          "notes": "Level 2: +6% effect over base"
        },
        "3": {
          "power_estimate": 11.2,
          "effect_multiplier": 1.12,
          "elixir_to_next": 112,
          "notes": "Level 3: +12% effect over base"
        },
        "4": {
          "power_estimate": 11.8,
          "effect_multiplier": 1.18,
          "elixir_to_next": 175,
          "notes": "Level 4: +18% effect over base"
        },
        "5": {
          "power_estimate": 12.4,
          "effect_multiplier": 1.24,
          "elixir_to_next": 252,
          "notes": "Level 5: +24% effect over base"
        },
        "6": {
          "power_estimate": 13.0,
          "effect_multiplier": 1.3,
          "elixir_to_next": 343,
          "notes": "Level 6: +30% effect over base"
        },
        "7": {
          "power_estimate": 13.6,
          "effect_multiplier": 1.36,
          "elixir_to_next": 448,
          "notes": "Level 7: +36% effect over base"
        },
        "8": {
          "power_estimate": 14.2,
          "effect_multiplier": 1.42,
          "elixir_to_next": 567,
          "notes": "Level 8: +42% effect over base"
        },
        "9": {
          "power_estimate": 14.8,
          "effect_multiplier": 1.48,
          "elixir_to_next": 700,
          "notes": "Level 9: +48% effect over base"
        },
        "10": {
          "power_estimate": 15.4,
          "effect_multiplier": 1.54,
          "elixir_to_next": null,
          "notes": "Level 10: +54% effect over base"
        }
      }
    }
  ],
  "npcs": [
    {
      "id": "npc_1",
      "name": "Sedius",
      "type": "1v1",
      "base_level": 4,
      "stats": {
        "hp": 220,
        "ki": 85,
        "atk": 27,
        "def": 13,
        "spd": 11
      },
      "loot_table": {
        "money": [
          100,
          200
        ],
        "elixir": [
          1,
          3
        ],
        "item_drop_chance": 0.011
      }
    }
  ],
  "bosses": [
    {
      "id": "boss_vorm",
      "name": "Vorm, o Ancião",
      "hp": 20000,
      "resistances": {
        "magic": -0.2
      },
      "dodge_chance": 0.12,
      "counter_attack_chance": 0.08
    }
  ],
  "events": [
    {
      "id": "event_1",
      "kind": "arena",
      "season_id": "season_current",
      "registration_time": "06:30",
      "fight_time": "07:00",
      "vagas": 100,
      "off_season": true,
      "config": {
        "pre_merge_minutes": 5,
        "turn_seconds": 60,
        "inactivity_elimination_minutes": 10
      }
    }
  ],
  "seasons": {
    "season_current": {
      "id": "season_current",
      "starts_at": "2025-08-21",
      "ends_at": "2025-09-05",
      "points_rules": {
        "arena": {
          "1": 100,
          "2": 70,
          "3": 50
        },
        "tournament": {
          "1": 120,
          "2": 80,
          "3": 50
        },
        "invasion": {
          "top_dmg": 80,
          "last_hit": 60
        }
      }
    }
  },
  "galleries": {
    "arena": [],
    "tournament": [],
    "invasion": []
  }
}
```
