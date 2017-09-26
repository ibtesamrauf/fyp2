<?php 
session_set_cookie_params(0);
error_reporting(0);
	
session_start();
// var_dump($_SESSION['cart']);
if (empty($_SESSION['cart']) && empty($_SESSION['deal'])) 
{
  // if (empty($_SESSION['deal'])) 
  // {
      $_SESSION['cart'] = array();
      $_SESSION['deal'] = array();
      echo "Cart is empty";
  // }
}
else
{

include('con_db.php');

   echo "<table style='width:100%'>";
   echo "<th style='width:60%'>NAME</th>";
   echo "<th style='width:20%' align='left'>Quantity</th>";
   echo "<th style='width:15%' align='right'>PRICE</th>";
echo "<tr><td><br></td></tr>";



      $total=0;
      $item_count=0;


       $total_deal=0;
        $item_count_deal=0;

if (!empty($_SESSION['cart'])) 
{
  # code...

      $ids = array();
        foreach($_SESSION['cart'] as $id=>$value){
            array_push($ids, $id);
        }
      $id_where = implode(',', $ids);

      $query = "SELECT * FROM dish 
      WHERE dish_id IN ($id_where)
      ORDER BY FIELD(dish_id, $id_where)";

      $fetch = mysql_query($query) or die(mysql_error());




      while($result = mysql_fetch_assoc($fetch)  )
      {
        $quantity=$_SESSION['cart'][$result['dish_id']]['quantity'];
              $sub_total=$result['dish_price']*$quantity;

      echo "<tr>
      <td align='left'>$result[dish_name]  </td>
      <td align='center'>$quantity </td>
      <td align='right'>$result[dish_price]</td>
      </tr>";
      echo "<tr><td><br></td></tr>";
              $item_count += $quantity;
              $total+=$sub_total;
      }

}

if (!empty($_SESSION['deal'])) 
{
  # code...
        $ids_deal = array();
          foreach($_SESSION['deal'] as $id=>$value){
              array_push($ids_deal, $id);
          }

        $id_where_deal = implode(',', $ids_deal);
        

        $query1 = "SELECT * FROM deal 
        WHERE deal_id IN ($id_where_deal)
        ORDER BY FIELD(deal_id, $id_where_deal)";

        $fetch1 = mysql_query($query1) or die(mysql_error());

       
           // $id_aa =  explode(' ', $id_where);



        //    echo "<table style='width:100%'>";
        //    echo "<th style='width:60%'>NAME</th>";
        //    echo "<th style='width:20%' align='left'>Quantity</th>";
        //    echo "<th style='width:15%' align='right'>PRICE</th>";
        // echo "<tr><td><br></td></tr>";
           



        while($result1 = mysql_fetch_assoc($fetch1)  )
        {
          $quantity=$_SESSION['deal'][$result1['deal_id']]['quantity'];
                $sub_total_deal=$result1['deal_price']*$quantity;

        echo "<tr>
        <td align='left'>$result1[deal_name]  </td>
        <td align='center'>$quantity </td>
        <td align='right'>$result1[deal_price]</td>
        </tr>";
        echo "<tr><td><br></td></tr>";
                $item_count_deal += $quantity;
                $total_deal+=$sub_total_deal;
        }
}



    // print_r($_SESSION['deal']);


$item_count_final = $item_count + $item_count_deal;
$total_final = $total + $total_deal; 
echo "<tr><td><br></td></tr>";
echo "<tr>
<td colspan='2' align='right'>total $item_count_final tiems </td>
<td align='right'>$total_final</td>
</tr>";

echo "</table>";

// echo "<div class='col-md-8'></div>";
//     echo "<div class='col-md-4'>";
//         echo "<div class='cart-row'>";
//             echo "<h4 class='m-b-10px'>Total ({$item_count} items)</h4>";
//             echo "<h4>&#36;" . number_format($total, 2, '.', ',') . "</h4>";
//             echo "<a href='checkout.php' class='btn btn-success m-b-10px'>";
//                 echo "<span class='glyphicon glyphicon-shopping-cart'></span> Proceed to Checkout";
//             echo "</a>";
//         echo "</div>";
//     echo "</div>"; 


}
?>