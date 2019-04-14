<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM contacts ORDER BY `contacts`.`name` ASC");
?>

<!DOCTYPE html>
<head>
  <title>ContactBook</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="search.js"></script>
</head>
<body>


<header>Contact Address Book</header>
  <div id="main">
    <article>
      <div id="content">

        <div id ="topRow">
          <input id="myInput" type="text" placeholder="Search..">
          <button id="myBtn">Add Contact</button>
        </div>

        <div id = "bottomRow">
          <table>
						<thead><tr class="header">
              <th>Contact Type</th>
              <th>Business Name</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th></th>
              <th></th>
						</thead>

            </tr>
            <tbody id="myTable">
              <?php
									while($res = mysqli_fetch_array($result)) {
									echo "<tr>";
									if($res['contactType'] == "Employee"){
									echo "<td>"."<img src=\"images/contact.png\" width=\"20\" height=\"20\">"."</td>";
									}else{
									echo "<td>"."<img src=\"images/building.png\" width=\"20\" height=\"20\">"."</td>";
									}
									echo "<td>".$res['businessName']."</td>";
									echo "<td>".$res['name']."</td>";
									echo "<td>".$res['phone']."</td>";
									echo "<td>".$res['email']."</td>";
									echo "<td>"."<a href=\"edit.php?id=$res[id]\">"."<img src=\"images/pencil.png\" width=\"20\" height=\"20\">"."</a></td>";
									echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">"."<img src=\"images/cross.png\" width=\"20\" height=\"20\">"."</a></td>";
									}
							?>
        </table>

        <div id="myModal" class="modal">
          <div class="modal-content">

              <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Add Contact</h2>
              </div>

              <div class="modal-body">
                <form action="add.php" method="post" name="form1">
                  <table width="25%" border="0">
                    <tr>
                      <td>Contact Type</td>
                      <td>
                				<select name = contactType>
                          <option value="Employee">Employee
                          </option>
                          <option value="Organisation">Organisation
                          </option>
                        </select>
                      </td>
										</tr>

                    <tr>
                      <td>Business Name</td>
                      <td><input type="text" name="businessName"></td>
                    </tr>

                    <tr>
											<td>Name</td>
                      <td><input type="text" name="name"></td>
                    </tr>

                    <tr>
                      <td>Phone</td>
                      <td><input type="text" name="phone"></td>
                    </tr>

                    <tr>
                      <td>Email</td>
                      <td><input type="text" name="email"></td>
                    </tr>

                    <tr>
                      <td></td>
                      <td><input type="submit" name="Submit" value="Add"></td>
                    </tr>

                  </table>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>


      <script>
        var modal = document.getElementById('myModal');
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
          modal.style.display = "block";
        }
        span.onclick = function() {
          modal.style.display = "none";
        }
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>

    </article>
  </div>
  <footer>Created by Jordan Walker</footer>
	
</body>
</body>
</html>
