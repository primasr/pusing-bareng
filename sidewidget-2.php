<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for topics.." title="Type in a name">

        <button class="accordion_3">Show Topics</button>
        <div class="panel_3">
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
        
          <table id="myTable">
              <tr class="header">
                  <th style="width:70%;">Topics</th>
                  <th style="width:30%;">Platform</th>
              </tr>
              <tr>
                  <td><a href="tlx-hello-world.php">Hello World!</a></td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td>Caesar Chipper</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td>Rotasi Matriks</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td>Faktorial Ganjil-Genap</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td>Weird Algorithm</td>
                  <td>CSES</td>
              </tr>
              <tr>
                  <td>Increasing Array</td>
                  <td>CSES</td>
              </tr>
              <tr>
                  <td>MudMud Libur</td>
                  <td>HackerRank</td>
              </tr>
              <tr>
                  <td>Tugas dari Bos</td>
                  <td>HackerRank</td>
              </tr>
          </table>

        </div>

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

          var acc = document.getElementsByClassName("accordion_3");
          var i;

          for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
              this.classList.toggle("active_3");
              var panel = this.nextElementSibling;
              if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
              } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
              } 
            });
          }
          </script>

    </div>

</div>