<?php
  $conn = new mysqli('localhost', 'root', '', 'cart');


    $stock_id = $_POST['stock_id'];
    $count = $_POST['count'];

    // $count = $_POST['count'];

    $query = "SELECT * FROM stocks WHERE id = '$stock_id' ";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();

    echo "<tr id='tr-{$count}'>
            <td><b id='number'>{$count}</b></td>
            <td>
                <input type='text' name='product_given_id[]' class='invoice form-control' readonly value='{$row['product_given_id']}'>
            </td>

            <td>
                <input type='text' name='stock[]' class='invoice form-control' readonly value='{$row['stock']}'>
            </td>

            <td>
                <input type='text'  class='form-control' readonly value='{$row['highest_sale_price']}'>
            </td>

            <td>
                <input type='text'  class='form-control' readonly value='{$row['lowest_sale_price']}'>
            </td>

            <td>
                <input type='text'  name='sale_price[]' class='form-control sale_price'  >
            </td>

            <td>
                <input type='text' name='sale_quantity[]'  class='form-control sale_quantity' value='1'>
            </td>

            <td>
                <input type='text' name='sale_amount[]' class='form-control sale_amount' value='0'>
            </td>
            <td>
                <button type='button' id='{$count}' class='btn bg-red btn-xs btn_remove'><i class='material-icons'>delete</i></button>
            </td>
        </tr>";
