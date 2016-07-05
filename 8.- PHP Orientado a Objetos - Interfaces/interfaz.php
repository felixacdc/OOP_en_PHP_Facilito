<?php

interface Auto
{
    public function encender();
    public function apagar();
}

interface Gasolina extends Auto
{
    public function vaciarTanque();
    public function llenarTanque($cant);
}