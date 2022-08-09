<?php require_once("header.php"); ?>

  <div class="container">
    <form action="create_order_action.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <h2>Place Order</h2>
          <label for="sel1">Print Type</label>
          <select class="form-control" id="sel1" name="sellist1" required>
            <option>UV Print</option>
            <option>Sublimation Print</option>
          </select>
          <br>
          <br>
          <label for="sel2">Phone Name:</label>
          <select class="form-control" id="sel2" name="sellist2" required>
            <br>
            <option>IPHONE</option>
            <option>SAMSUNG</option>
            <option>ONEPLUS</option>
            <option>REDMI</option>
            <option>MI</option>
            <option>OPPO</option>
            <option>REALME</option>
            <option>HUAWEI</option>
            <option>POCO</option>
            <option>POPSOCKET</option>
          </select>

          <br>
          <br>
          <label for="sel3">Phone Model:</label>
          <select class="form-control" id="sel3" name="model" required>
            <br>
            <option>12</option>
            <option>12 max</option>
            <option>12 pro</option>
            <option>12 pro max</option>
            <option>Note 7</option>
            <option>Note 8</option>
            <option>Note 9</option>
            <option>Note 10</option>
            <option>Note 11</option>
          </select> 
          <div class="file-selector-button-control p-2">
            <label for="avatar">Choose a picture:</label>
            <input type="file" name="image" accept="image/png, image/jpeg" required>
          </div>
          <br>
          <div class="container">
            <button style="margin-left: 3%;" class="btn btn-danger" name="post">ADD</button>
          </div> 
      </div>
    </form>
  </div> 


</body>
</html>