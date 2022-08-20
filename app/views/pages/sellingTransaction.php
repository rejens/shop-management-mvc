
<?php require_once APPROOT . "/views/includes/includes.php" ?>
<div class="d-flex justify-content-end">
    <label for="selling-from">from</label>
    <input type="date" name="" id="selling-from" class="selling-table">
    <label for="selling-to">to</label>
    <input type="date" name="" id="selling-to" class="selling-table">
</div>
<table class=" mt-1 table  table-striped  table-borderless table-hover ">
    <thead class="table-dark ">
        <tr>
            <th scope="col">date</th>
            <th scope="col">name</th>
            <th scope="col">cp</th>
            <th scope="col">sp</th>
            <th scope="col">quantity</th>
            <th scope="col">profit/loss</th>
        </tr>
    </thead>

    <form method='post'>
        <tbody id="salesTransaction-table">

        </tbody>
</table>




<?php require_once APPROOT . "/views/includes/footer.php" ?>