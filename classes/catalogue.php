<?php

include "my-functions.php";





class Item{
    public int $id;
    public string $name;
    public string $description;
    public int $price;
    public string $imageURL;
    public int $weight;
    public int $stock;
    public bool $available;

   public function __construct(int $id,string $name, int $price,  string $imageURL, int $weight, int $stock)
    {
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->imageURL=$imageURL;
        $this->weight=$weight;
        $this->stock=$stock;
    }

    public function setPrice(){
       return $this->price=$price;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function displayItem(){
        ?>
        <main>
            <div class="container">
                <div class="columns">
                    <div class="columns__column">
                        <img src="<?php echo $this->imageURL ?>" height="400" width="400" alt="image vélo"/>
                    </div>
                    <div class="columns__column">
                        <h3><?=  $this->getName()?></h3>
                        <p>Prix : <?= formatPrice($this->price)  ?></p>
                        <p><?= "Poids: " . formatWeight($this->weight)  ?></p>

                        <form class="form" action="./cart.php" method="post">
                            <input type="hidden" name="action" value="add">
                            <input type="hidden" id="marqueVelo" name="product" value="<?= $this->id?>">
                            <label for="nombreVelo">Quantité</label>
                            <input class="quantiy_input" id="nombreVelo" type="number" name="quantity" value="0" min="0", max="<?= $this->stock ?>">
                            <p><input class="submit_button" type="submit" name="order_form" value="Ajouter au panier"> </p>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php
    }

}



class Catalogue
{

    public array $items;
   public function __construct(array $data)
    {
        $this->items=$data;
    }

   public function displayCatalogue($products){

        foreach ($products as $item){
            $cat = new Item($item['id'],$item['name'],$item['price'], $item['picture'],$item['weight'],$item['stock']);
            $cat->displayItem();
        }
    }
}








