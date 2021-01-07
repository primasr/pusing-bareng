<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4 whole-card-shadow">
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
              <tr class="tlx clickable-row my-pointer" data-href='tlx-hello-world.php'>
                  <td>Hello World!</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr class="tlx clickable-row my-pointer" data-href='tlx-caesar-chipper.php'>
                  <td>Caesar Chipper</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr class="tlx clickable-row my-pointer" data-href='tlx-rotasi-matriks.php'>
                  <td>Rotasi Matriks</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr class="tlx clickable-row my-pointer" data-href='tlx-faktorial-gg.php'>
                  <td>Faktorial Ganjil-Genap</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr class="tlx clickable-row my-pointer" data-href='tlx-konversi-biner.php'>
                  <td>Konversi Biner</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr class="tlx clickable-row my-pointer" data-href='tlx-menggambar-pegunungan.php'>
                  <td>Menggambar Pegunungan</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr class="tlx clickable-row my-pointer" data-href='tlx-ukuran-kejauhan.php'>
                  <td>Ukuran Kejauhan</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr class="tlx clickable-row my-pointer" data-href='tlx-candy-businessman.php"'>
                  <td>Candy Businessman</td>
                  <td>TLX TOKI</td>
              </tr>
              <tr class="tlx clickable-row my-pointer" data-href='tlx-hard-word.php'>
                  <td>Hard Word</td>
                  <td>TLX TOKI</td>
              </tr>              
              <tr class="cses clickable-row my-pointer" data-href='cses-counting-rooms.php"'>
                  <td>Counting Rooms</td>
                  <td>CSES</td>
              </tr>
              <tr class="cses clickable-row my-pointer" data-href='cses-missing-number.php'>
                  <td>Missing Number</td>
                  <td>CSES</td>
              </tr>
              <tr class="cses clickable-row my-pointer" data-href='cses-increasing-array.php'>
                  <td>Increasing Array</td>
                  <td>CSES</td>
              </tr>
              <tr class="hr clickable-row my-pointer" data-href='hackerrank-outdoor-study.php'>
                  <td>Outdoor Study</td>
                  <td>Hackerrank</td>
              </tr>
              <tr class="hr clickable-row my-pointer" daa-href='hackerrank-mudmud.php'>
                  <td>MudMud dan Kakaknya</td>
                  <td>Hackerrank</td>
              </tr>
              <tr class="hr clickable-row my-pointer" data-href='hackerrank-parkiran-aya.php'>
                  <td>Parkiran Aya</td>
                  <td>Hackerrank</td>
              </tr>
              <tr class="spoj clickable-row my-pointer" data-href='spoj-drawing-polygrams.php'>
                  <td>Drawing Polygrams</td>
                  <td>SPOJ</td>
              </tr>
              <tr class="spoj clickable-row my-pointer" data-href='spoj-herding.php'>
                  <td>Herding</td>
                  <td>SPOJ</td>
              </tr>
              <tr class="spoj clickable-row my-pointer" data-href='spoj-divisibility.php'>
                  <td>Divisibility</td>
                  <td>SPOJ</td>
              </tr>
              <tr class="olymp clickable-row my-pointer" data-href='olymp-repeated-josephus.php'>
                  <td>Repeated Josephus</td>
                  <td>e-Olymp</td>
              </tr>
              <tr class="olymp clickable-row my-pointer" data-href='olymp-grasshopper.php'>
                  <td>Grasshopper</td>
                  <td>e-Olymp</td>
              </tr>
              <tr class="olymp clickable-row my-pointer" data-href='olymp-simple-problem.php'>
                  <td>Simple Problem</td>
                  <td>e-Olymp</td>
              </tr>
              <tr class="other clickable-row my-pointer" data-href='other-bantuan-nasional.php'>
                  <td>Bantuan Nasional</td>
                  <td>Other</td>
              </tr>
              <tr class="other clickable-row my-pointer" data-href='other-depth-pohon.php'>
                  <td>Depth Pohon</td>
                  <td>Other</td>
              </tr>
              <tr class="other clickable-row my-pointer" data-href='other-i-love-kimia.php'>
                  <td>I Love Kimia</td>
                  <td>Other</td>
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

            jQuery(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
            });
          </script>

    </div>

</div>