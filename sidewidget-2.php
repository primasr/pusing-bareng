<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for topics.." title="Type in a name">

          <table id="myTable">
              <tr class="header">
                  <th style="width:70%;">Topics</th>
                  <th style="width:30%;">Platform</th>
              </tr>
              <tr>
                  <td>Alfreds Futterkiste</td>
                  <td>Germany</td>
              </tr>
              <tr>
                  <td>Berglunds snabbkop</td>
                  <td>Sweden</td>
              </tr>
              <tr>
                  <td>Island Trading</td>
                  <td>UK</td>
              </tr>
              <tr>
                  <td>Koniglich Essen</td>
                  <td>Germany</td>
              </tr>
              <tr>
                  <td>Laughing Bacchus Winecellars ahah anjay maba tslur</td>
                  <td>Canada</td>
              </tr>
              <tr>
                  <td>Magazzini Alimentari Riuniti</td>
                  <td>Italy</td>
              </tr>
              <tr>
                  <td>North/South</td>
                  <td>UK</td>
              </tr>
              <tr>
                  <td>Paris specialites</td>
                  <td>France</td>
              </tr>
          </table>

          <script>
          function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }       
            }
          }
          </script>

    </div>

</div>