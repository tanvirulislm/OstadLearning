<?php


function loginUser($userName,$password){
    if(validUserName($userName)){
        echo "fail user name";
    }
    else if(validPassword($password)){
        echo "fail password";
    }
    else if(!matching($userName,$password)){
        echo "fail matching";
    }
    else{
        login();
    }
}





function validUserName($userName){
    if(empty($userName)){
        return true;
    }
    else{
        return false;
    }
}


function validPassword($password){
    if(empty($password)){
        return true;
    }
    else{
        return false;
    }
}


function matching($userName,$password){
    if($userName=="abc" && $password=="123"){
        return true;
    }
    else{
        return false;
    }
}


function login(){
    echo "login successful";
}


loginUser("abc","");