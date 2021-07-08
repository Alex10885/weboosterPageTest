<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $prod_name = $_POST['prodName'];

    $to = "ale10885@yandex.ru";
    $date = date ("d.n.Y");
    $time = date("h.i");
    $from = $email;
    $subject = "заявка с сайта";

    $msg ="
        Имя: $name /n
        Телефон: $phone /n
        Почта: $email /n
        Наименование товара: $prod_name";
        mail($to, $subject, $msg, "From: $from");

