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

---

### Herança
Relação hierárquica entre classes.

Java e php não suportam herança múltipla (colocar vírgula para separar as classes).

Uma classe A acima de uma classe B é chamada de superclasse, enquanto B é chamada de subclasse.

Todos os membros (a menos de modificador de acesso) de A são acessiveis (visíveis) em B.

```php
$b = new B();
$b -> metodo();
```

```php
class Foo(){
    public $a;
    public function __construct($a){
        $this->a = $a;
    }
}

class Bar extends Foo{
    public function __construct($a){
        parent :: __construct($a);
    }
}
```

**extends** indica uma classe filha que está herdando uma classe pai.

Herança se utiliza **apenas uma vez**.

Em uma relação de herança uma classe sabe muito da outra.

Exercío de __[herança](aula4/pokemon.php)__

#### Ícones em diagrama de classes

Atributos:
    Atributos são representados com o símbolo: **-**

Métodos:
    Métodos são representados por **+**.
    
    Ao encontrar um ícone **+** em um diagrama de classes significa que o método é **público**.
