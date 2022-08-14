<?php

setcookie("name", "John Watkin", time() + 3600, "/", "", 0);


if (isset($_COOKIE["name"])) {

    print($_COOKIE["name"]);
    print($HTTP_COOKIE_VARS["name"]);

}
else {
    print("Hakuna Kitu Hapa");
}


?>
