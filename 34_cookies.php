<?php
//cookies:-cookies jo hota hai directly store kr diya jata hai Broser me ,COOKIES ME sensitave data store nahi kiya jata hai computers jitna ki sessions me kiya data store kiya jata hai
//Sessions:-sessions ko carefully store kiya jata hai server pr,sessions secure data ko store karne ke liye used kiye jate hai ,email id,pssword ,token numbers..etc ye sab ka used sessions me kiya jata hai
echo time() ."<br>";
//Syntex to set a cookie
setcookie("category","Books",time() + 86400, "/");
echo "the cookie is set <br>";
?>