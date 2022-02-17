<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        //todo your code.

        // novo array para retorno
        $new_products = [];

        foreach (ProductStructure::products as $value) {

            $temp = explode('-', $value);

            //Verifica se existe a cor, se não encontrar adiciona no array
            if (array_key_exists($temp[0], $new_products) === false)
                $new_products[$temp[0]] = array($temp[1] => 1);
            else // caso já exista a cor 
            {
                //Verifica se existe o tamanho, se não encontrar adiciona no array
                if (array_key_exists($temp[1], $new_products[$temp[0]]) === false) {
                    $new_products[$temp[0]][$temp[1]] =  1;
                } else {
                    //Se encontrar apenas incrementa 
                    $new_products[$temp[0]][$temp[1]]++;
                }
            }
        }

        return $new_products;
    }
}


