<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>jQuery Show Hide Elements Using Select Box</title>
  <base href="https://www.myWork.com">
  <style>
    .box {
      color: #fff;
      padding: 20px;
      display: none;
      margin-top: 20px;
    }

    .insert {
      background: #ff0000;
    }

    .availabilityOne {
      background: #228B22;
    }

    .reportOne {
      background: #ff000d;
    }

    .searchOne {
      background: #ff000d;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function () {
      $("select").change(function () {
        $(this).find("option:selected").each(function () {
          var optionValue = $(this).attr("value");
          if (optionValue) {
            $(".box").not("." + optionValue).hide();
            $("." + optionValue).show();
          } else {
            $(".box").hide();
          }
        });
      }).change();
    });
  </script>
</head>

<body>
  <div>
    <select>
      <option>Choose Option</option>
      <option value="insert">Insert Item to Inventory</option>
      <option value="availabilityOne">Check Availability</option>
      <option value="reportOne">Generate Report</option>
      <option value="searchOne">Filter and Search</option>
      <option value="editOne">Update/Delete</option>
    </select>
  </div>
  <div class="insert box">
    <form method="post" action="server.php">
      <h1>Insert Items to Inventory</h1>
      Item Code : <input type="text" name="a"><br>
      Item Name : <input type="text" name="b"><br>
      Catagory : <input type="text" name="c"><br>
      Brand : <input type="text" name="d"><br>
      Quantity : <input type="number" name="e"><br>
      Price : <input type="number" name="f"><br>
      <input type="button" value="Insert" name="save">

    </form>
  </div>


  <div id="availabilityOne" class="availabilityOne box">

    <h1>Check Whether Item is Available</h1>
    <label for="cars">Choose a catagory:</label>

    <select name="cars" id="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </select>
    <br>
    <label for="item">Choose an brand:</label>
    <select name="cars" id="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </select>
    <br>

    <label for="item">Choose an item:</label>
    <select name="cars" id="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </select>
    <br>

    <button>Check</button>

  </div>



  <div id="reportOne" class="reportOne box">
    <h1>Generate Report</h1>

    <form>

      <form action="/action_page.php">
        <label for="cars">Choose a method to generate Report:</label>
        <select name="report" id="reportOne">
          <optgroup label="INS">
            <option value="inweek">Per Week</option>
            <option value="inmonth">Per Month</option>
            <option value="inyear">Per Year</option>
          </optgroup>
          <optgroup label="OUTS">
            <option value="outweek">Per Week</option>
            <option value="outmonth">Per Month</option>
            <option value="outyear">Per Year</option>
          </optgroup>
        </select>
        <br><br>
        <input type="submit" value="Submit">
      </form>


      <button>Generate Report</button>
    </form>
  </div>



  <div id="searchOne" class="searchOne box">
    <form>

      <h1>Search Item According to any attribute</h1>
      <label for="item">Search item according to :</label>
      <select name="search" id="search">
        <option value="itemCode">Item Code</option>
        <option value="item name">Item Name</option>
        <option value="catagory">Catagory</option>
        <option value="brand">Brand</option>
        <option value="addedDate">Added Date</option>
      </select>
    </form>
  </div>




  <div class="green box">You have selected <strong>green option</strong> so i am here</div>
  <div class="blue box">You have selected <strong>blue option</strong> so i am here</div>
</body>

</html>