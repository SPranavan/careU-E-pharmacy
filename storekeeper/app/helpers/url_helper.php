<?php
    function redirect($page){
        header('location: '. URLROOT . '/' . $page);  //urlroot==views folder ??
    }