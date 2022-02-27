<?php

require_once '../config/Database.php';

class menuController{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from menu');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image'] ='../images/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO menu(menu_image, menu_title, menu_price)
        VALUES(:menu_image, :menu_title, :menu_price)');

        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_price', $request['price']);
        $query->execute();

        return header('location: menudashboard.php');
         
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from menu WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE menu SET menu_image = :menu_image, menu_title = :menu_title, menu_price = :menu_price
        WHERE id = :id');
        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_price', $request['price']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menudashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from menu WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menudashboard.php');
    }




    public function userLogin($email,$password){

        $checkLogin = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
        $result = $this->conn->query($checkLogin);
        if($result->num_rows>0){

            $data = $result->fetch_assoc();
            $this->userAuthentication($data);
            return true;
        }else{
            return false;
        }
    }

    private function userAuthentication($data){
        $_SESSION['authenticated'] = true;
        $_SESSION['auth_rule'] = $data['role_as'];
        $_SESSION['auth_user'] = [
            'user_id' => $data['id'],
            'user_fname' => $data['fname'],
            'user_lname' => $data['lname'],
            'user_email' => $data['email']
        ];
    }

    public function isLoggedIn(){

    }
}
?>