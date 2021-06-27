<?php
function getcategory($db,$id){
    $query="SELECT * from category WHERE id=$id";
    $run=mysqli_query($db,$query);
    $data=mysqli_fetch_assoc($run);
    return $data['name'];
}
function getAllCategory($db){
    $query="SELECT * from category ";
    $run=mysqli_query($db,$query);
    $data = array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function detimagesbypost($db,$post_id){
    $query="SELECT * from images WHERE post_id=$post_id";
    $run=mysqli_query($db,$query);
    $data=array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
    
}
function getComments($db,$post_id){
    $query="SELECT * from comments WHERE post_id=$post_id ORDER BY id DESC";
    $run=mysqli_query($db,$query);
    $data=array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
    
}

function getSubMenu($db,$menu_id){
    $query="SELECT * from submenu WHERE parent_menu_id=$menu_id";
    $run=mysqli_query($db,$query);
    $data=array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;

}
function getSubMenuNo($db,$menu_id){
    $query="SELECT * from submenu WHERE parent_menu_id=$menu_id";
    $run=mysqli_query($db,$query);
    return mysqli_num_rows($run);


}
function getAdminInfo($db,$email){
    $query="SELECT * FROM admin WHERE email='$email'";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data;
}

function getPostThumb($db,$id){
    $query="SELECT * FROM images WHERE post_id=$id";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['image'];
}

function getMenu($db){
    $query="SELECT * FROM menu";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}



function getAllSubMenu($db){
    $query="SELECT * FROM submenu";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}
function getAllMenu($db){
    $query="SELECT * FROM menu";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}

function getMenuName($db,$id){
    $query="SELECT * FROM menu WHERE id=$id";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['name'];
}

function getAllPost($db){
    $query="SELECT * FROM posts ORDER BY id DESC";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}


?>