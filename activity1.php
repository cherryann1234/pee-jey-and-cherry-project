<?php
class Item {
    private $title;
    private $cost;
    private $details;
    private $type;
    private $quantity;

    public function configureItem($title, $cost, $details, $type, $quantity) {
        $this->title = $title;
        $this->cost = $cost;
        $this->details = $details;
        $this->type = $type;
        $this->quantity = $quantity;
    }

    public function displayItemDetails() {
        return "Item Title: $this->title\n" .
               "Cost: $this->cost\n" .
               "Details: $this->details\n" .
               "Type: $this->type\n" .
               "Quantity: $this->quantity\n";
    }
}

$item = new Item();
$item->configureItem("bowl", "4$", "the best bowl for soup", "kitchenware", 300);
echo $item->displayItemDetails();
?>
