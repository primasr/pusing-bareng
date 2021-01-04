<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for topics.." title="Type in a name">

        <button class="accordion_3">Show Topics</button>
        <div class="panel_3">
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
          <br>
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
                  <td><a href="tlx-caesar-chipper.php">Caesar Chipper</a></td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td><a href="tlx-rotasi-matriks.php">Rotasi Matriks</a></td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td><a href="tlx-faktorial-gg.php">Faktorial Ganjil-Genap</a></td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td><a href="tlx-konversi-biner.php">Konversi Biner</a></td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td><a href="tlx-menggambar-pegunungan.php">Menggambar Pegunungan</a></td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td><a href="tlx-ukuran-kejauhan.php">Ukuran Kejauhan</a></td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td><a href="tlx-candy-businessman.php">Candy Businessman</a></td>
                  <td>TLX TOKI</td>
              </tr>
              <tr>
                  <td><a href="tlx-hard-word.php">Hard Word</a></td>
                  <td>TLX TOKI</td>
              </tr>              
              <tr>
                  <td><a href="cses-counting-rooms.php">Counting Rooms</a></td>
                  <td>CSES</td>
              </tr>
              <tr>
                  <td><a href="cses-missing-number.php">Missing Number</a></td>
                  <td>CSES</td>
              </tr>
              <tr>
                  <td><a href="cses-increasing-array.php">Increasing Array</a></td>
                  <td>CSES</td>
              </tr>
              <tr>
                  <td><a href="hackerrank-outdoor-study.php">Outdoor Study</a></td>
                  <td>Hackerrank</td>
              </tr>
              <tr>
                  <td><a href="hackerrank-mudmud.php">MudMud dan Kakaknya</a></td>
                  <td>Hackerrank</td>
              </tr>
              <tr>
                  <td><a href="hackerrank-parkiran-aya.php">Parkiran Aya</a></td>
                  <td>Hackerrank</td>
              </tr>
          </table>
          <br>

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