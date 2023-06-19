<?php

class Panier{
    protected array $datas;
    protected int $idProduct;
    protected int $quantity;

    public function __construct(array $data)
    {
        $this->datas = $data;
    }

    public function add(int $idProduct){
        if(!isset($idProduct)){
            $this->datas['quantity']=1;
        } else {
            $this->datas['quantity']+=1;
        }
    }
    public function update(int $idProduct, int $quantity){
        $this->datas['quantity']+=$quantity;
    }
    public function delete($idProduct){
        unset($this->datas[$idProduct]);
    }
}

