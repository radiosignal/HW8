<h1>Orders</h1>




<?php foreach ($orders as $item):?>

    <div id="<?=$item['orders_id']?>">

        <h3><?=$item['name']?></h3>
        <img src="../img/<?=$item['image']?>" alt="img" width="150"><br>
        <p>price: <?=$item['price']?></p>
        <button data-id="<?=$item['orders_id']?>" class="delete">Delete</button>

    </div>
<?php endforeach;?>



<script>
    let buttons = document.querySelectorAll('.delete');
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/orders/delete/?id=' + id);
                    const answer = await response.json();
                    document.getElementById('count').innerText = answer.count;

                    document.getElementById(id).remove();

                    // console.log(answer);
                }
            )();
        })
    })
</script



