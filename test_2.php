<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="get">
  <table align="center">
      <tr>
        <td>List :
        </td>
        <td><input type="text" name="list" id="list" >
        </td>
        <td>
        </td>
      </tr>
      <tr>
        <td>ค้นหา :
        </td>
        <td><input type="text" name="search" id="search" >
        </td>
        <td><button type="button" name="bt_1" id="bt_1" onclick="show();">ค้นหา</button>
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
          ประเภทการค้นหา :
          <br>
          <select id="type_search" name="type_search">
            <option value="1">Linear Search</option>
            <option value="2">Binary Search</option>
            <option value="3">Bubble Search</option>
          </select>
        </td>
        <td>
        </td>
      </tr>
      <tr border="1">
        <td colspan="3">
          <div name="show" id="show">

          </div>
        </td>
      </tr>
  </table>
</form>
<script>
 function show(){
   alert( $('#list').val());
/*
$.get("show.php",
   {
     list: $('#list').val(),
     search: $('#search').val(),
     type_search: $('#type_search').val();
   },
   function(data){
     alert("Data: " + data);
   });*/
   $.ajax({
     type: "GET",
     url: "show.php",
    /* list: $('#list').val(),
     search: $('#search').val(),
     type_search: $('#type_search').val(),*/
     data: {list : $('#list').val(),search : $('#search').val(),type_search : $('#type_search').val()},
     success: function(data){
         $("#show").html(data);
     }
   });
 };
</script>
</body>
</html>
