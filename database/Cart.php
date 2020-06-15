<?php

class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->connection)) return null;

        $this->db = $db;
    }

    // Insert item into cart
    public function insertIntoCart($params = null, $table = 'cart')
    {
        if ($this->db->connection != null) {
            if ($params != null) {

                // Get table columns
                $columns = implode(',', array_keys($params));
                $values = implode(',', array_values($params));

                // Query
                $query = sprintf('INSERT INTO %s(%s) VALUES (%s)', $table, $columns, $values);

                // Execute query
                $result = $this->db->connection->query($query);
                return $result;
            }
        }
    }

    // Get user id and insert it into cart table
    public function addToCart($userId, $itemId)
    {
        if (isset($userId) && isset($itemId)) {
            // Get data from user
            $params = array(
                "user_id" => $userId,
                "product_id" => $itemId
            );

            // Insert data into cart
            $result = $this->insertIntoCart($params);

            if ($result) {
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    public function calculateSubtotal($arr)
    {
        if (isset($arr)) {
            $sum = 0;

            foreach ($arr as $item) {
                $sum += floatval($item[0]);
                setcookie('subtotal', sprintf("%.2f", $sum), time() + 3600, '/' );
            }
               
        }
    }

    public function deleteCartItem($itemId = null, $table = 'cart')
    {
        if ($itemId != null) {
            $result = $this->db->connection->query("DELETE FROM {$table} WHERE product_id={$itemId}");
            if ($result) {
                header("Location: " . $_SERVER['PHP_SELF']);
            }

            return $result;
        }
    }

    public function getCartId($cartArray = null, $key = 'product_id'){
        if($cartArray != null){
            $cart_id = array_map(function($value) use ($key) {
                return $value[$key];
            }, $cartArray);
        }

        return $cart_id;
    }
}
