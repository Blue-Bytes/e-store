<?php
include_once 'Product.php';

class ProductManager
{
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection=$connection;
    }

    public function search(String $category, String $id="%", String $brand="%", $sort_by) {
        $req=$this->connection->prepare
        ('SELECT * FROM article WHERE categorie=? AND id_article LIKE(?) AND marque LIKE(?) ORDER BY ?');
        if( $sort_by=='brand' )
            $req=$this->connection->prepare
            ('SELECT * FROM article WHERE categorie=? AND id_article LIKE(?) AND marque LIKE(?) ORDER BY marque');
        else
            $req=$this->connection->prepare
            ('SELECT * FROM article WHERE categorie=? AND id_article LIKE(?) AND marque LIKE(?) ORDER BY prix_unitaire');
        $req->execute(array($category, $id, $brand));
        $products=[];
        while( $product=$req->fetch() ) {
            // translate keys from french to english
            $product=['id'=>$product['id_article'], 'brand'=>$product['marque'],
                'price'=>$product['prix_unitaire'], 'category'=>$product['categorie']];
            $products[]=new Product($product);
        }
        return $products;
    }

    // get brands that exist in a category
    public function get_brands_in_category(String $category) {
        $req=$this->connection->prepare('SELECT DISTINCT marque FROM article WHERE categorie=?');
        $req->execute(array($category));
        $brands=[];
        while( $brand=$req->fetch() ) {
            $brands[]=$brand['marque'];
        }
        return $brands;
    }
}