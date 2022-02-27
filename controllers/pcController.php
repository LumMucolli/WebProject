<?php

require_once '../config/Database.php';

class pcController{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from pc');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image'] ='../images/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO pc(pc_image, pc_title, pc_price)
        VALUES(:pc_image, :pc_title, :pc_price)');

        $query->bindParam(':pc_image', $request['image']);
        $query->bindParam(':pc_title', $request['title']);
        $query->bindParam(':pc_price', $request['price']);
        $query->execute();

        return header('location: create-pc.php');
         
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from pc WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE pc SET pc_image = :pc_image, pc_title = :pc_title, pc_price = :pc_price
        WHERE id = :id');
        $query->bindParam(':pc_image', $request['image']);
        $query->bindParam(':pc_title', $request['title']);
        $query->bindParam(':pc_price', $request['price']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: pcdashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from pc WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: pcdashboard.php');
    }
}
?>