<?php

require_once '../config/Database.php';

class tvController{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from tv');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image'] ='../images/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO tv(tv_image, tv_title, tv_price)
        VALUES(:tv_image, :tv_title, :tv_price)');

        $query->bindParam(':tv_image', $request['image']);
        $query->bindParam(':tv_title', $request['title']);
        $query->bindParam(':tv_price', $request['price']);
        $query->execute();

        return header('location: create-tv.php');
         
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from tv WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE tv SET tv_image = :tv_image, tv_title = :tv_title, tv_price = :tv_price
        WHERE id = :id');
        $query->bindParam(':tv_image', $request['image']);
        $query->bindParam(':tv_title', $request['title']);
        $query->bindParam(':tv_price', $request['price']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: tvdashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from tv WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: tvdashboard.php');
    }
}
?>