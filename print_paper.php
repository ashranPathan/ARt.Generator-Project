<?php
//print_invoice.php
if(isset($_GET["pdf"]) && isset($_GET["id"]))
{
 include 'pdf.php';
 include('config.php');
 $output = '';
 $statement = $connect->prepare("
  SELECT * FROM registration 
  WHERE u_id = :u_id
  LIMIT 1
 ");
 $statement->execute(
  array(
   ':u_id'       =>  $_GET["id"]
  )
 );
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '
   <table width="100%" border="1" cellpadding="5" cellspacing="0">
    <tr>
     <td colspan="2" align="center" style="font-size:18px"><b>Invoice</b></td>
    </tr>
    <tr>
     <td colspan="2">
      <table width="100%" cellpadding="5">
       <tr>
        <td width="65%">
         To,<br />
         <b>RECEIVER (BILL TO)</b><br />
         Name : '.$row["name"].'<br /> 
         Billing Address : '.$row["order_receiver_address"].'<br />
        </td>
       </tr>
      </table>
      <br />
      <table width="100%" border="1" cellpadding="5" cellspacing="0">
       <tr>
        <th>Sr No.</th>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Actual Amt.</th>
        <th colspan="2">Tax1 (%)</th>
        <th colspan="2">Tax2 (%)</th>
        <th colspan="2">Tax3 (%)</th>
        <th rowspan="2">Total</th>
       </tr>
       <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>Rate</th>
        <th>Amt.</th>
        <th>Rate</th>
        <th>Amt.</th>
        <th>Rate</th>
        <th>Amt.</th>
       </tr>';
  $statement = $connect->prepare(
   "SELECT * FROM content 
   WHERE u_id = :u_id"
  );
  $statement->execute(
   array(
    ':u_id'       =>  $_GET["id"]
   )
  );
  $item_result = $statement->fetchAll();
  $count = 0;
  foreach($item_result as $sub_row)
  {
   $count++;
   $output .= '
   <tr>
    <td>'.$count.'</td>
    <td>'.$sub_row["project_title"].'</td>
    <td>'.$sub_row["order_item_quantity"].'</td>
    <td>'.$sub_row["order_item_price"].'</td>
    <td>'.$sub_row["order_item_actual_amount"].'</td>
    <td>'.$sub_row["order_item_tax1_rate"].'</td>
    <td>'.$sub_row["order_item_tax1_amount"].'</td>
    <td>'.$sub_row["order_item_tax2_rate"].'</td>
    <td>'.$sub_row["order_item_tax2_amount"].'</td>
    <td>'.$sub_row["order_item_tax3_rate"].'</td>
    <td>'.$sub_row["order_item_tax3_amount"].'</td>
    <td>'.$sub_row["order_item_final_amount"].'</td>
   </tr>
   ';
  }
  $output .= '
  <tr>
   <td align="right" colspan="11"><b>Total</b></td>
   <td align="right"><b>'.$row["order_total_after_tax"].'</b></td>
  </tr>
  <tr>
   <td colspan="11"><b>Total Amt. Before Tax :</b></td>
   <td align="right">'.$row["order_total_before_tax"].'</td>
  </tr>
  <tr>
   <td colspan="11">Add : Tax1 :</td>
   <td align="right">'.$row["order_total_tax1"].'</td>
  </tr>
  <tr>
   <td colspan="11">Add : Tax2 :</td>
   <td align="right">'.$row["order_total_tax2"].'</td>
  </tr>
  <tr>
   <td colspan="11">Add : Tax3 :</td>
   <td align="right">'.$row["order_total_tax3"].'</td>
  </tr>
  <tr>
   <td colspan="11"><b>Total Tax Amt.  :</b></td>
   <td align="right">'.$row["order_total_tax"].'</td>
  </tr>
  <tr>
   <td colspan="11"><b>Total Amt. After Tax :</b></td>
   <td align="right">'.$row["order_total_after_tax"].'</td>
  </tr>
  
  ';
  $output .= '
      </table>
     </td>
    </tr>
   </table>
  ';
 }
 $pdf = new Dom();
 $file_name = 'Invoice-'.$row["u_id"].'.pdf';
 $pdf->loadHtml($output);
 $pdf->render();
 $pdf->stream($file_name, array("Attachment" => false));
}
?>