<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/sales.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/simple.money.format.js"></script>
    <title>Rojo Africa sales system</title>
  </head>

  <style>
   .nav-link {
    color:  rgb(185, 39, 39)  !important;
    }
</style>
  <body>
  <?php include('navbar.php')?>

    <div class="container-fluid  pl-5 pr-5 pb-5" style="clear:both;margin-top:10%">
      <div class="row">
        <div class="col-md-4 form-group border-right">
          <h5 class="text-danger">Please select the item[s] to sale</h5>
          <select
            name=""
            id="product-select"
            class="form-control"
            style="width: 95%"
          >
            <option value="">Please select the item[s] to sale</option>
            <option value="1:galaxy(270 * 65 * 3)cm:200:5">
              galaxy(270 * 65 * 3)cm, remain:5
            </option>
            <option value="2:galaxy(280 * 67 * 4)cm:200:6">
              galaxy(280 * 67 * 4)cm, remain:6
            </option>
          </select>
          <hr />

          <form action="">
            <fieldset class="border rounded p-2 mb-2 pb-4 form-group">
              <legend class="w-auto">To Client Details:</legend>
              <label for="fname">Customer name:</label>
              <input
                type="text"
                id="cname"
                name="cname"
                class="form-control"
                style="width: 80%"
              />
              <label for="lname">Address:</label>
              <input
                type="text"
                id="address"
                name="address"
                class="form-control"
                style="width: 80%"
              />
              <label for="lname">Location:</label>
              <input
                type="text"
                id="location"
                name="location"
                class="form-control"
                style="width: 80%"
              />
              <label for="lname">Phone:</label>
              <input
                type="text"
                id="phone"
                name="phone"
                class="form-control"
                style="width: 80%"
              />
            </fieldset>
          </form>
        </div>

        <div class="col-md-8">
          <div class="print-link mb-2"></div>

          <table class="table table-bordered">
            <thead>
              <tr align="center">
                <th width="5%">S/N</th>
                <th width="25%">Item Description</th>
                <th width="15%">Unit</th>
                <th width="5%">Quantity</th>
                <th width="15%">Rate</th>
                <th width="20%">Total</th>
                <th width="13%">Disc %</th>
                <th width="7%">Remove</th>
              </tr>
            </thead>
            <tbody>
              <tr id="td-empty">
                <td colspan="8" align="center">No Item Added</td>
              </tr>
            </tbody>
            <tfoot>
              <tr align="right" border="1">
                <td
                  colspan="4"
                  style="border-left-style: hidden; border-bottom-style: hidden"
                ></td>
                <td width="10%"><b>Sub-Total</b></td>
                <td colspan="4">
                  <b><span id="grand-total">0</span></b>
                </td>
              </tr>
              <tr align="right" border="1">
                <td
                  colspan="4"
                  style="border-left-style: hidden; border-bottom-style: hidden"
                ></td>
                <td width="20%"><b>Discount</b></td>
                <td colspan="4" width="60%">
                  <!-- <b><span id="discount">0</span></b> -->
                  <b><span id="discount" class="text-danger">0</span></b>
                  
                    <!--<div class="input-group-append">
                                <input type="text" class="form-control input-sm" value="Discount Options"  style="width:65%" disabled>
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item text-primary" href="#" id="make-discount">Make Discount</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item text-primary" href="#" id="reset-discount">Reset Discount</a>
                                  <a class="dropdown-item text-primary" href="#" id="discard-discount">Discard Discount</a>
                                  
                                  
                                </div>
                              </div>-->
                  </div>
                </td>
              </tr>
              <tr align="right" border="1">
                <td
                  colspan="4"
                  style="border-left-style: hidden; border-bottom-style: hidden"
                ></td>
                <td width="20%"><b>VAT</b></td>
                <td colspan="4">
                  <b><span id="vat">0</span></b>
                </td>
              </tr>

              <tr align="right" border="1">
                <td
                  colspan="4"
                  style="border-left-style: hidden; border-bottom-style: hidden"
                ></td>
                <td width="20%"><b>Total</b></td>
                <td colspan="4">
                  <b><span id="discount-total">0</span></b>
                </td>
              </tr>
            </tfoot>
          </table>
          <div class="mb-2">
            <label for="" class="text-primary">Tick currency below:</label
            ><br />
            <input
              type="radio"
              name="currency"
              value="Tanzanian Shilling"
              class="currency"
            />Tanzanian Shilling<br />
            <input
              type="radio"
              name="currency"
              value="Dollar"
              class="currency"
            />Dollar<br /><br />
            <input
              type="text"
              name="amount_words"
              id="amount-in-words"
              class="form-control"
              placeholder="Total Amount in Words"
            />
          </div>
          <div align="right">
            <a href="#" class="btn btn-primary make-sell"
              >generate PO</a
            >
          </div>
        </div>
      </div>
    </div>

    <script src="js/purchase.js"></script>
  </body>
</html>
