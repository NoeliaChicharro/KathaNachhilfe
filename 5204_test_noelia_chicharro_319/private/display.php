<?php
require ("../backend/Login.class.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Display Data</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="wrapper-main">
    <h1>You are loged in as: {username}</h1>
    <div class="button-container">
      <button class="student">Students</button>
      <button class="teacher">Teachers</button>
    </div>
    <table class="display-table">
      <thead>
        <tr><th>Name</th><th>Username</th><th>Email</th><th>Phone</th><tr>
      </thead>
      <tbody>
       
      </tbody>
      <tfoot>
      
      </tfoot>
    </table>
    <button class="logout" name="logout">Log Out</button>
  </div>

  <script src="../api/data.json"></script>
  <script>

    function getData(type){
      try {
        const row = document.createElement("tr");
        const tBody = document.querySelector("tbody");

        fetch("../api/data.json")
          .then(res => res.json())
          .then(data => {

            for (let i = 0; i < data.length; i++) {
              if (data[i].type === type) {
                row.innerHTML = `
                  <th>${data[i].name}</th><th>${data[i].username}</th><th>${data[i].email}</th><th>${data[i].phone}</th>
                  `;
                tBody.appendChild(row);
              }
            }
          });

      } catch (e) {
        console.error("getData failed: " + e.stackTrace);
      }
    }

    document.querySelector('.student').addEventListener('click', () => {
      getData('student')
    });

    document.querySelector('.teacher').addEventListener('click', () => {
      getData('teacher')
    });

  </script>

</body>
</html>
