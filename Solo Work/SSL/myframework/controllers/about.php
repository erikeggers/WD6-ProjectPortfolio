<?php

class about extends AppController {
    public function __construct($parent){
        $this->parent = $parent;
        $this->showList();
    }

    public function showList(){
        $data = $this->parent->getModel("fruits")->select('select * from fruit_table');
        $this->getview("header", array("pagename"=>"about"));
        $this->getView("about", $data);
        $this->getView("footer");
    }
    
    public function showAddForm(){
        $this->getview("header", array("pagename"=>"about"));
        $this->getView("addform");
        $this->getView("footer");
    }

    public function addAction(){
        $this->parent->getModel("fruits")->add("insert into fruit_table
        (name) values (:name)", array(":name"=>$_REQUEST["name"]));

        header("Location:/about");
    }

    public function showEditForm(){
        $this->getview("header", array("pagename"=>"about"));
        $this->getView("editForm");
        $this->getView("footer");
    }


    public function editAction(){
        $editId = intval($_GET["id"]);
        $this->parent->getModel("fruits")->update("update fruit_table
        set name = ? where id = ?", array($_REQUEST["name"], $editId ));
        header("Location:/about");
    }

    public function delete(){
        $deleteId = intval($_GET["id"]);
        $this->parent->getModel("fruits")->delete("delete from fruit_table WHERE id = $deleteId");
        header("Location:/about");
    }
}

?>
