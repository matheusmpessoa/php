## Anotações

### Analise do problema
Quando for analisar a regra do negócio (o problema):
1. Identifique a classe
2. Identifique a relação
3. Desenhe um diagrama de classes
4. Identifique os atributos
5. Identifique os metodos
6. Esboce o código
7. Codifique

### Typehint
```php
public function __construct($marca, Pneu $p1, Pneu $p2, Pneu $p3){

}
```
Injeta a tipagem no construct.


### This
Antes de utilizar o objeto da classe coloque o **this**.

### Acoplamento
Nivel que uma classe sabe da outra.

### Orientação a Objeto
- Sempre buscar esconder atributos.
- Nivel que uma classe sabe da outra.
- Sempre buscar **baixo** acomplamento.
- Acoplamento alto aumenta a dependência no seu código.