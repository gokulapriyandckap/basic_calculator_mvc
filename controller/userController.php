<?php

require 'Model/userModel.php';

class userController {
    private $userModel;

    public function __construct()
    {
        $this->userModel = (new userModel());
    }
    public function index (){
       $alldatas = $this->userModel->fetch();
       require 'view/list.php';
    }
    public function create($data){
    $this->userModel->insert($data['first_number'],$data['second_number'],$data['operator']);
    }
    public function delete($data){
        $this->userModel->delete($data['delete']);
    }
    public function read($data){
      $editFetchDatas =  $this->userModel->read($data['editId']);
        require 'view/editview.php';
    }
    public function update($data){
        $this->userModel->update($data['editFirstNum'],$data['editSecondNum'],$data['editOperator'],$data['editId']);
        header("location:/");
    }
}