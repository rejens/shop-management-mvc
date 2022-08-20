<?php require_once APPROOT . "/views/includes/includes.php" ?>
<div class="d-flex justify-content-end">
    <label for="buying-from">from</label>
    <input type="date" name="" id="buying-from">
    <label for="buying-to">to</label>
    <input type="date" name="" id="buying-to">
</div>
<table class=" mt-1 table  table-striped  table-borderless table-hover ">
    <thead class="table-dark ">
        <tr>
            <th scope="col">date</th>
            <th scope="col">name</th>
            <th scope="col">quantity</th>
            <th scope="col">price</th>
            <th scope="col">vendor</th>

        </tr>
    </thead>
    <form method='post'>
        <tbody id="buyingTransaction-table">

        </tbody>
</table>


<?php require_once APPROOT . "/views/includes/footer.php" ?>