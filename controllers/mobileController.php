<?php

require_once '../config/Database.php';

class mobileController{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from mobile');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image'] ='../images/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO mobile(mobile_image, mobile_title, mobile_price)
        VALUES(:mobile_image, :mobile_title, :mobile_price)');

        $query->bindParam(':mobile_image', $request['image']);
        $query->bindParam(':mobile_title', $request['title']);
        $query->bindParam(':mobile_price', $request['price']);
        $query->execute();

        return header('location: create-mobile.php');
         
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from mobile WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE mobile SET mobile_image = :mobile_image, mobile_title = :mobile_title, mobile_price = :mobile_price
        WHERE id = :id');
        $query->bindParam(':mobile_image', $request['image']);
        $query->bindParam(':mobile_title', $request['title']);
        $query->bindParam(':mobile_price', $request['price']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: mobiledashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from mobile WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: mobiledashboard.php');
    }
}
?>