<?php if ($isAuth): ?>
    Welcome : <?= $userName ?>, <a href="/auth/logout">[Exit]</a>
<?php else: ?>
    <form action="/auth/login" method="post">
        <input type="text" name="login" placeholder="admin">
        <input type="password" name="pass" placeholder="123">
        <input type="submit" name="submit" value="Login">

    </form>
<?php endif; ?>


<a href="/">Main</a>
<a href="/product/catalog">Catalog</a>
<a href="/basket">Basket(<span id="count"><?=$count?></span>)</a><br>
<a href="/product/orders">Orders</a>
