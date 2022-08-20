const URLROOT = "http://localhost/tps_for_shop/";

//notification
notification();

function notification() {
  $.ajax({
    type: "POST",
    url: URLROOT + "api/notification.php",
    dataType: "json",
    success: function (response) {
      var arr = "";
      var count = 0;

      $.each(response, function (key, value) {
        arr +=
          "<li class='dropdown-item list-group-item-action list-group-item-light' href='#'>" +
          value["name"] +
          " is about to get expired </li>";
        count++;
      });
      $.ajax({
        type: "post",
        url: URLROOT + "api/expiryNotification.php",
        dataType: "json",
        success: function (response) {
          for (i of response) {
            arr += `<li class='dropdown-item list-group-item-action list-group-item-light' href='#'> 
					${i["name"]} 
				    has expired </li>`;
            count++;
          }
          $(".notificationCenter").html(arr);
          $("#notificationBadge").text(count);
          if (count < 1) {
            $("#notificationBadge").hide();
          }
        },
      });
    },
  });
}

//inventory work start

//when search is not engaged
showItem();
//inventory work

//when search is not engaged

//when search is engaged

//when search is engaged
$("#searchItem").on("keyup", showItem);

function showItem() {
  $.ajax({
    type: "get",
    url: URLROOT + "api/inventory.php?searchItem=" + $("#searchItem").val(),
    dataType: "json",
    success: function (response) {
      let data = ``;
      for (i of response) {
        data += `<tr>  <td> ${i["name"]}  </td> <td> ${i["cp"]}  </td> <td> ${i["sp"]}  </td> <td> ${i["quantity"]}  </td> <td>  <div class='me-auto'>
                            <button type='button' class='btn btn-primary editButton' data-toggle='tooltip' data-placement='top' title='edit' onclick="editButton(${i["id"]})"><i class='fa-solid fa-pen-to-square'></i></button>
                            <button type='button' class='btn btn-danger deleteButton'  data-toggle='tooltip' data-placement='top' title='delete' onclick="deleteButton(${i["id"]})"><i class='fa-solid fa-trash'></i> </button>
                            <button type='button' class='btn btn-success soldButton' data-toggle='tooltip' data-placement='top' title='add to cart' onclick="addToCart('${i["name"]}')"><i class='fa-solid fa-check'></i></button>
                        </div></td> </tr> `;
      }
      $("#inventory-table").html(data);

      $(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
    },
  });
}
//inventory work end

//sales transaction start
sellingTransaction();

$(".selling-table").on("input", sellingTransaction);

function sellingTransaction() {
  let from = $("#selling-from").val();
  let to = $("#selling-to").val();
  $.ajax({
    type: "post",
    url: URLROOT + "api/salesTransaction.php",
    data: { from: from, to: to },
    dataType: "json",
    success: function (response) {
      data = ``;
      for (i of response) {
        data += `<tr><td>  ${i["datee"]} </td>
            <td> ${i["name"]} </td> 
			<td> ${i["cp"]} </td>
			<td> ${i["sp"]} </td>
			<td> ${i["quantity"]} </td>

          <td> ${i["pl"]} </td> 
           </tr>`;
      }
      $("#salesTransaction-table").html(data);
    },
  });
}
//sales transaction end

//buying transactin start
buyingTransaction();

function buyingTransaction() {
  let from = $("#buying-from").val();
  let to = $("#buying-to").val();
  $.ajax({
    type: "post",
    url: URLROOT + "api/buyingTransaction.php",
    data: { from: from, to: to },
    dataType: "json",
    success: function (response) {
      data = ``;
      for (i of response) {
        data += `<tr><td>  ${i["datee"]} </td>
            <td> ${i["name"]} </td> 
            <td> ${i["quantity"]} </td>
            <td> ${i["price"]} </td> 
            <td> ${i["vendor"]} </td> </tr>`;
      }
      $("#buyingTransaction-table").html(data);
    },
  });
}
//buying transaction end

//add item start

$("#saveAddModal").on("click", function () {
  const inputName = $("#inputName").val();
  const inputCp = $("#inputCp").val();
  const inputSp = $("#inputSp").val();
  const inputQuantity = $("#inputQuantity").val();
  const inputExpiry = $("#inputExpiry").val();
  const inputVendor = $("#inputVendor").val();
  $("#addModal").modal("hide");

  $.ajax({
    type: "post",
    url: URLROOT + "api/addItem.php",
    data: {
      inputName: inputName,
      inputCp: inputCp,
      inputSp: inputSp,
      inputQuantity: inputQuantity,
      inputExpiry: inputExpiry,
      inputVendor: inputVendor,
    },
    success: function (response) {
      if (response == 1) {
        Swal.fire("item has already expired");
      } else {
        Swal.fire({
          title: "success!",
          text: "item added successfully!",
          icon: "success",
          button: "ok",
        });
      }
      notification();
      showItem();
      $("#clearAdd").click();
    },
  });
});
//add item end

//delete item start

function deleteButton(id) {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "post",
        url: URLROOT + "api/deleteItem.php",
        data: { id: id },
        success: function (response) {
          Swal.fire("Poof! item has been deleted!", {
            icon: "success",
          });
          showItem();
          notification();
        },
      });
    } else {
      Swal.fire("your data is safe");
    }
  });
}
//delete item end

//edit item start

function editButton(id) {
  Swal.fire({
    title: "update",
    html: `<input type="number"  id="quantity" class="swal2-input" placeholder="add quantity(otp)">
<input type="number" id="price" class="swal2-input" placeholder="update price">`,
    confirmButtonText: "save",
    focusConfirm: false,
    preConfirm: () => {
      const quantity = Swal.getPopup().querySelector("#quantity").value;
      const price = Swal.getPopup().querySelector("#price").value;
      if (!price || price <= 0) {
        Swal.showValidationMessage(`Please enter valid quantity`);
      } else if (quantity && quantity <= 0) {
        Swal.showValidationMessage(`Please enter valid quantity and price`);
      }
      return { quantity: quantity, price: price };
    },
  }).then((result) => {
    quantity = result.value.quantity;
    price = result.value.price;

    $.ajax({
      type: "post",
      url: URLROOT + "api/updateItem.php",
      data: {
        id: id,
        quantity: quantity,
        price: price,
      },
      success: function (response) {
        Swal.fire({
          title: "success!",
          text: "item updated successfully!",
          icon: "success",
          button: "ok",
        });
        showItem();
      },
    });
  });
}

//edit item end

//add to cart item start
function addToCart(name) {
  Swal.fire({
    title: "add to cart",
    html: `<input type="number" id="quantity-cart" class="swal2-input" placeholder="quantity">`,
    confirmButtonText: "add to cart",
    focusConfirm: false,
    preConfirm: () => {
      const quantity = Swal.getPopup().querySelector("#quantity-cart").value;
      if (!quantity || quantity <= 0) {
        Swal.showValidationMessage(`Please enter valid quantity`);
      }
      return { quantity: quantity };
    },
  }).then((result) => {
    quantity = result.value.quantity;

    $.ajax({
      type: "post",
      url: URLROOT + "api/cartInsert.php",
      data: { quantity: quantity, name: name },
      success: function (response) {
        if (response == 1) {
          Swal.fire("not enough item in the inventory");
        } else if (response == 2) {
          Swal.fire("item already in the cart");
        } else if (response == 3) {
          Swal.fire("cannot add expired item");
        } else {
          showCart();
        }
      },
    });
  });
}
//add to cart item end

function showCart() {
  $.ajax({
    url: URLROOT + "api/cartShow.php",
    dataType: "json",
    success: function (response) {
      data = ``;
      for (i of response) {
        data += `<li class="list-group-item" id="${i["item_name"]}"><div>${i["item_name"]}  <span class="float-end"> <span class="me-4">(${i["quantity"]})</span> <button type="button" class="btn-close"  aria-label="Close"  onclick='deleteCart("${i["item_name"]}")'></button></span></li>`;
      }
      $("#cart-item").html(data);
    },
  });
}
showCart();

function deleteCart(name) {
  $(`#${name}`).hide(500);
  $.ajax({
    type: "post",
    url: URLROOT + "api/cartRemove.php",
    data: { name: name },
    success: function (response) {},
  });
}

$("#checkout").click(function () {
  $.ajax({
    type: "post",
    url: URLROOT + "api/cartCheckout.php",
    success: function (response) {
      showItem();
      showCart();
      $(".btn-close").click();
      // generateBill();
      // location.replace(URLROOT + "pages/bill");
    },
  });
});

function generateBill() {
  // $.ajax({
  // 	type: "post",
  // 	url: URLROOT + "api/bill.php",
  // 	dataType: "json",
  // 	success: function (response) {
  // 		let data = ``;
  // 		for (i of response) {
  // 			data += ` <tr>
  // 				<td>${i[item_name]}</td>
  // 				<td>${i["sp"]}</td>
  // 				<td>${i["quantity"]}</td>
  // 				<td>${i["salesAmt"]}</td>
  //     </tr>`;
  // 		}
  // 		$("#bill-body").html(data);
  // 	},
  // });
  alert("check");
}
