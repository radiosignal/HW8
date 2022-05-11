
<h1>Basket:</h1>
<?php foreach ($basket as $item):?>

    <div id="<?=$item['basket_id']?>">

        <h3><?=$item['name']?></h3>
        <img src="../img/<?=$item['image']?>" alt="img" width="150"><br>
        <p>price: <?=$item['price']?></p>
        <button data-id="<?=$item['basket_id']?>" class="delete">Delete</button>
          </div><div><button orders-id="<?=$item['basket_id']?>" class="add_orders ">Add to orders</button>
    </div>
<?php endforeach;?>




<script>
    let buttons_orders = document.querySelectorAll('.add_orders');
    buttons_orders.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('orders-id');
            (
                async () => {
                    const response = await fetch('/orders/add/?id=' + id);
                    const answer = await response.json();

                    console.log(answer);
                }
            )();
        })
    })
</script>



<script>
    let buttons = document.querySelectorAll('.delete');
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/basket/delete/?id=' + id);
                    const answer = await response.json();
                    document.getElementById('count').innerText = answer.count;

                    document.getElementById(id).remove();

                    // console.log(answer);
                }
            )();
        })
    })
</script>
