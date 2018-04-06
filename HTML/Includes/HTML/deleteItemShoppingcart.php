<?php
    include "header.php";

    if (isset($_GET['productID']) && isset($_COOKIE['Shoppingcart'])) {
        $productID = $_GET['productID'];
        $cookieData = unserialize($_COOKIE['Shoppingcart']);
        $cookieName = "Shoppingcart";

        for ($i = 0; $i < count($cookieData); $i++) {
            $object = $cookieData[$i];
            if ($productID == $object->ProductID) {
                unset($cookieData[$i]);
                $newCookieData = array_values($cookieData);
                setcookie($cookieName, serialize($newCookieData), time() + (86400 * 30), "/"); // 86400 = 1 day);
                if (count($newCookieData) == 0) setcookie($cookieName, serialize($newCookieData), 1, "/");;
                break;
            }
        }
    }

    header("Location: winkelwagen.php");

    include "footer.php";