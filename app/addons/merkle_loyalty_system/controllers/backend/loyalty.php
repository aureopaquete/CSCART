<?php
    use tygh\Registry;

if(!defined('BOOTSTRAP')) { die('Access denied'); }

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($mode == 'manage') {

        // ir a BD buscar os dados de utilizador
        $selectuser = "select user_id, sum(points) points, firstname, data from cscart_users as P Left Join cscart_points as U on U.fk_user_id= P.user_id group by user_id";

        $points = db_get_array($selectuser);

        foreach ($points as $key => $user) {
            $user_transactions = "select * from cscart_points where fk_user_id =".$user["user_id"];
            $points[$key]["pontos"] = db_get_array($user_transactions);
        }

        //mostrar no template
        Tygh::$app['view']->assign('items', $points);

    } 
    if ($mode == 'update'){
            $id_anterior = $_GET['user_id'];
            $joinids = "select * from cscart_points as P Left Join cscart_users as U on P.user_id = U.fk_user_id where user_id ".$id_anterior;
        }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($mode != "manage"){
        throw new ErrorException("Pedido Invalido");
    }
    $query1 = "insert into cscart_points(fk_user_id, data, points) values(".$_POST["user_id"].",NOW(), ".$_POST["points"].")";
    db_query($query1);
    return array(CONTROLLER_STATUS_REDIRECT, 'admin.php?dispatch=loyalty.manage');
}