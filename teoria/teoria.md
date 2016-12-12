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

---

### Typehint de funções
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

Todos os membros (a menos modificadores de acesso) de A são acessiveis (visíveis) em B.

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

Exercío de __[herança](aula4/pokemon.php)__ feito na aula.

#### Ícones em diagrama de classes

Atributos:
    Atributos são representados com o símbolo: **-**

Métodos:

- Métodos são representados por **+**.
- Ao encontrar um ícone **+** em um diagrama de classes significa que o método é **público**.

---

### Abstração

Ato de esconder detalhes de implementação de classes usuárias.

O foco é mostrar apenas o que o objeto sabe fazer (e não sabe como fazer).

Representa também uma generalização de comportamentos.
Esse conceito é obtido por dois meios:
- a) classes abstratas (pode possuir atributos e métodos concretos)
- b) interfaces (constantes + assinatura de métodos)

#### Classes abstratas
Possuem atributos e métodos concretos.

Classe abstrata pode ter apenas um "pai".

Classes abstratas e interfaces não podem ser instanciadas.

Métodos abstratos é um método sem corpo de código.


No typehint, se uma classe A (abstrata, interface) for marcada como typehint, EXEMPLO,

```php
interface Foo{
   public function metodo(A $a);
}
OU
class Foo{
   public function metodo(A $a){

   }
}
```

E B, C e D são subclasses de A, então é possível fazer o seguinte:

```php
$foo = new Foo();
$foo->metodo(new B);
$foo->metodo(new C);
$foo->metodo(new D);
```

Não é permitido

```php
$foo->metodo(new A); 
```

Pois A é abstrata.

#### Interface
Interfaces podem ter vários "pais".

Interface simula herança múltipla.


---

### Typehint
No typehint, se uma classe A for marcada com typehint, ex:

```php
class Foo{
    public function metodo(A $a){

    }
}
```

E B, C e D são subclasses de A, então é possível fazer o seguinte:

```php
$foo = new Foo();
$foo->metodo(new B);
$foo->metodo(new C);
$foo->metodo(new D);
```

Não é permitido:
```php
$foo->metodo(new A);
```
Pois, A é abstrata.

---

### Duck Typing
"Se algo, grasna como um pato, voa como um pato e nada como um pato então esta coisa é um pato."

Exercío de duck typing feito na aula6.

---

### Instalações
```bash
mysql-ctl install
```

```bash
phpmyadmin-ctl install
```

```bash
mysql-ctl start
```