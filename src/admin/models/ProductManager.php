<?php


class ProductManager
{
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection=$connection;
    }

    public function add(Product $produit) {
        $req=$this->connection->prepare
        ('INSERT INTO product(id, brand, price, category) VALUES(?, upper(?), ?, ?)');
        $req->execute(array($produit->getId(),$produit->getBrand(),$produit->getPrice(),$produit->getCategory()));
    }

    public function delete(Product $product) {
        $req=$this->connection->prepare('DELETE FROM product WHERE id=?');
        $req->execute(array($product->getId()));
    }

    public function search(String $category, String $id="%", String $brand="%") {
        $req=$this->connection->prepare
        ('SELECT * FROM product WHERE category=? AND id LIKE(?) AND brand LIKE(?)');
        $req->execute(array($category, $id, $brand));
        $products=[];
        while( $product=$req->fetch() ) {
            $products[]=new Product($product);
        }
        return $products;
    }

    // check if the product passed as a parameter exist in the DB
    public function isExist(Product $product) {
        $req=$this->connection->prepare('SELECT EXISTS(SELECT 1 FROM product WHERE id=?) AS exist');
        $req->execute( array($product->getId()) );
        $exist=($req->fetch())['exist'];
        return $exist;
    }
}