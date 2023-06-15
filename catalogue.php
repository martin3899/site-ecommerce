<?php

$db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'Martin3899', 'Actutennis38!');
$stmt= $db->prepare('select * from products ');
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


$catalogue=new Catalogue($products);
$catalogue->displayCatalogue($products);
class Item{

    private string $name;
    public string $description;
    public int $price;
    public string $imageURL;
    public int $weight;
    public int $stock;
    public bool $available;

   public function __constructor($name, $price,  $imageURL, $weight ): void
    {
        $this->name=$name;
        $this->price=$price;
        $this->imageURL=$imageURL;
        $this->weight=$weight;

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
        <h3> <?php echo $this->getName() ?> </h3>
        <img src="<?php echo $this->imageURL ?>" height="400" width="400" alt="image vélo">
        <p><?php echo $this->price ?></p>
        <p><?php echo $this->weight ?></p>
        <?php
    }


}

class Catalogue{
    public array $items;
   public function __construct(array $data)
    {
        $this->items=$data;
    }

   public function displayCatalogue($products){

        foreach ($products as $item){
            $cat = new Item($item['name'],$item['price'], $item['picture'], $item['weight']);
            $cat->displayItem();
        }
    }
}



//$giant = new Item();
//$giant->name="Giant";
//$giant->imageURL="http://localhost/site-ecommerce/images/velo-giant.jpg";
//$giant->price=350000;
//$giant->weight=8500;
//echo $giant->displayItem();



