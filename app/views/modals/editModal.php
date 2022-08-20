<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">edit item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="updateQuantity" id="title">add quantity (optional)</label>
                        <input type="number" class="form-control" id="updateQuantity" name="updateQuantity">
                    </div>

                    <div class=" form-group">
                        <label for="updatePrice" id="amount">update price</label>
                        <input type="number" class="form-control" id="updatePrice" name="updatePrice" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modalClose" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveUpdateModal" name="saveUpdateModal"> save changes</button>
                </div>
                <button type="reset" id="clearEdit" hidden>clear</button>

            </form>
        </div>
    </div>
</div>