<?php

/*
os traits (rasgos) son un mecanismo de reutilización de código en lenguajes de herencia simple, como PHP. El objetivo de un trait es el de reducir las limitaciones propias de la herencia simple permitiendo que los desarrolladores reutilicen a voluntad conjuntos de métodos sobre varias clases independientes y pertenecientes a clases jerárquicas distintas. La semántica a la hora combinar Traits y clases se define de tal manera que reduzca su complejidad y se eviten los problemas típicos asociados a la herencia múltiple y a los Mixins.

Un Trait es similar a una clase, pero con el único objetivo de agrupar funcionalidades muy específicas y de una manera coherente. No se puede instanciar directamente un Trait. Es por tanto un añadido a la herencia tradicional, y habilita la composición horizontal de comportamientos; es decir, permite combinar miembros de clases sin tener que usar herencia.
*/

trait PersonaTrait
{
    // Puede contener atributos, metodos (privados, protected, public, abstracto, estatico)
    public $nombre;

    public function mostrarNombre()
    {
        echo $this->nombre;
    }

    abstract function asignarNombre($nombre);

}

trait Trabajador 
{
    protected function mensaje()
    {
        echo "Mi nombre es: ";
    }
}

/**
* 
*/
class Persona
{
    use PersonaTrait;
    use Trabajador;

    public function asignarNombre($nombre)
    {
        // Atributo definido en el trait
        $this->nombre =  $this->mensaje() . $nombre;
    }

    // Existe algo que se llama orden de precedencia y siempre los metodos de la clase van a tener mas importancia que los de un trait en caso de que existan dos metodos con el mismo nombre uno en el trait y otro en la clase
    /*public function mensaje()
    {
        echo "Hola mundo";
    }*/
}

$persona = new Persona();
$persona->asignarNombre("Felix");
$persona->mostrarNombre();
$persona->mensaje();