<?php

//Transitivité : Si une classe B hérite d'une classe A, et que la classe C hérite de la classe B, alors la classe C hérite de la classe A.

class A
{
    public function testA(){
        return 'Test A';
    }
}
//----------
class B extends A
{
    public function testB(){
        return 'Test B';
    }
}
//----------
class C extends B
{
    public function testC(){
        return 'Test C';
    }
}
//----------
$c = new C;
echo $c -> testA() . '<br>';
echo $c -> testB() . '<br>';
echo $c -> testC() . '<br>';


/**
 * Commentaires :
 * Transitivité :
 *  Si B hérite de A
 *  Et que C hérite de B
 *  ...Alors C hérite de A (indirectement)
 *  --> Même les méthodes protected de A sont accessible dans C malgré l'héritage indirect
 * 
 *  - L'héritage est :
 *  - Non reflexif : class D extends D : Une classe ne peut hérité d'elle-même
 *  - Non symétrique : Si E extends F, alors F n'est pas extends de E
 *  - Sans cycle : Si E extends D, alors il est impossible que F extends E
 *  - Non multiple : class N extends M, P :  En PHP il n'existe pas d'héritage multiple...
 * 
 *  - Une classe parente peut avoir une nombre infini d'héritiers.
 *  
 */
















//------------------------PERSO

class D
{
    public function testD(){
        return 'Test D';
    }
}
//----------
class E extends D
{
    public function testE(){
        return 'Test E ';
    }
}
//----------
class F extends E
{
    public function testF(){
        return 'Test F ' . $this -> testE() . $this -> testD();
    }
}
//----------
$x = new F;
echo $x -> testF() . '<br>';