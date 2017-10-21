<?php
function check_if_added($item_id,$con)
{
    $user_id = $_SESSION['id'];
    $query = "SELECT * FROM users_items WHERE item_id = '$item_id' AND user_id = '$user_id'"
            . " And status = 'Added to cart'";
    $result = mysqli_query($con, $query) or die (mysqli_error($con));
    $num_rows = mysqli_num_rows($result);
    if($num_rows>=1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
?>
