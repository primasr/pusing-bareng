<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Bantuan Nasional';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
    include 'sidewidget-1.php';
?>

  <link href="style.css" rel="stylesheet">

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Bantuan Nasional</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://www.hackerrank.com/contests/praktikum-final-struktur-data/challenges/bantuan-nasional-1/problem" target="_blank"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 11:30 PM</p>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="other-homepage.php">Other</a>
            </li>
            <li class="breadcrumb-item active">Bantuan Nasional</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Bantuan Nasional</h2>
        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">Berhubungan dengan pandemik yang sedang terjadi, 
          pemerintah Negara nepisi ingin menyalurkan bantuan kepada provinsi-provinsi yang terkena bencana.
          Dalam penyaluran bantuan, kota-kota yang berada di provinsi yang sama akan mendapat jumlah bantuan yang sama, 
          sedangkan kota yang berada di provinsi berbeda akan mendapatkan jumlah bantuan yang berbeda juga.</p>
          
        <p class="justify">Tetapi, karena perekonomian yang semakin memburuk, 
          pemerintah juga harus menghemat pengeluaran dari kas Negara. Tentukanlah berapa total bantuan minimal yang harus dikeluarkan oleh pemerintah.
          Dua kota berada didalam provinsi yang sama jika kita dapat melewati satu atau 
          lebih jalan untuk sampai dari satu kota ke kota lainnya.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">Baris pertama berisi sebuah bilangan T yang merupakan banyaknya kasus uji..</p>
          <p class="justify">Untuk setiap kasus uji, baris pertama berisi 2 buah bilangan N dan M yang menyatakan banyaknya kota serta jalan pada Negara nepisi..</p>
          <p class="justify">M baris selanjutnya berisi dua bilangan U dan V yang berarti terdapat jalan yang menghubungkan kota U dan kota V.</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">Untuk setiap kasus uji, keluarkan satu buah baris yang berisi “Kasus #K: X” dimana K merupakan nomor kasus uji, 
          dan X merupakan biaya minimal yang dikeluarkan pemerintah</p>

        <p class="justify">Berikut adalah gambaran untuk kasus uji pertama</p>

        <div class="img-div">
        <img class="card-img-top img-shadow" width="200" height="300" src="https://s3.amazonaws.com/hr-assets/0/1608515508-d9e09c0fd1-Explanation.PNG" alt="Counting Rooms">
        </div>

        <p class="justify">Salah satu cara yang optimal adalah</p>
        <ul class="a">
          <li>memberikan bantuan sejumlah 1 pada kota 1,2 dan 3</li>
          <li>memberikan bantuan sejumlah 2 pada kota 4</li>
          <li>memberikan bantuan sejumlah 3 pada kota 5</li>
        </ul>
        <p class="justify">Sehingga total bantuan yang diberikan sebanyak 8</p>

        <h5>Contoh Masukan</h5>
        <pre>2<br>5 3<br>1 2<br>2 3<br>3 1<br>7 6<br>1 2<br>1 3<br>1 4<br>1 5<br>1 6<br>1 7</pre>

        <h5>Contoh Keluaran</h5>
        <pre>Kasus #1: 8<br>Kasus #2: 7</pre>

        <hr>

        <button class="accordion_2">Solution</button>
        <div class="panel_2 code-font">
            <p><br></p>
            <p>#include &lt;bits/stdc++.h&gt;</p>
            <p>using namespace std;</p>
            <p><br></p>
            <p>vector &lt;int&gt; myVector;</p>
            <p>int tambah;</p>
            <p><br></p>
            <p>class Graph</p>
            <p>{</p>
            <p>&nbsp; &nbsp; int V;</p>
            <p>&nbsp; &nbsp; list&lt;int&gt;* adj;</p>
            <p>&nbsp; &nbsp; void DFSUtil(int v, bool visited[]);</p>
            <p><br></p>
            <p>&nbsp; &nbsp; public : Graph(int V);</p>
            <p>&nbsp; &nbsp; ~Graph();</p>
            <p>&nbsp; &nbsp; void addEdge(int v, int w);</p>
            <p>&nbsp; &nbsp; void MencariYangTerhubung();</p>
            <p>};</p>
            <p><br></p>
            <p>void Graph::MencariYangTerhubung()</p>
            <p>{</p>
            <p>&nbsp; &nbsp; bool* visited = new bool[V];</p>
            <p>&nbsp; &nbsp; for (int v = 0; v &lt; V; v++)</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; visited[v] = false;</p>
            <p><br></p>
            <p>&nbsp; &nbsp; for (int v = 0; v &lt; V; v++) {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; if (visited[v] == false) {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DFSUtil(v, visited);</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; myVector.push_back(tambah);</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tambah = 0;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
            <p>&nbsp; &nbsp; }</p>
            <p>&nbsp; &nbsp; delete[] visited;</p>
            <p>}</p>
            <p><br></p>
            <p>void Graph::DFSUtil(int v, bool visited[])</p>
            <p>{</p>
            <p>&nbsp; &nbsp; visited[v] = true;</p>
            <p>&nbsp; &nbsp; tambah++;</p>
            <p>&nbsp; &nbsp; list&lt;int&gt;::iterator i;</p>
            <p>&nbsp; &nbsp; for (i = adj[v].begin(); i != adj[v].end(); ++i)</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; if (!visited[*i])</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DFSUtil(*i, visited);</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
            <p>}</p>
            <p><br></p>
            <p>Graph::Graph(int V)</p>
            <p>{</p>
            <p>&nbsp; &nbsp; this -&gt; V = V;</p>
            <p>&nbsp; &nbsp; adj = new list&lt;int&gt;[ V ];</p>
            <p>}</p>
            <p><br></p>
            <p>Graph::~Graph() { delete[] adj; }</p>
            <p><br></p>
            <p>void Graph::addEdge(int v, int w)</p>
            <p>{</p>
            <p>&nbsp; &nbsp; adj[v].push_back(w);</p>
            <p>&nbsp; &nbsp; adj[w].push_back(v);</p>
            <p>}</p>
            <p><br></p>
            <p>int main()</p>
            <p>{</p>
            <p>&nbsp; &nbsp; int testcase;</p>
            <p>&nbsp; &nbsp; cin &gt;&gt; testcase;</p>
            <p>&nbsp; &nbsp; for (int mboh = 1; mboh &lt;= testcase; mboh++)</p>
            <p>&nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; tambah = 0;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; int n,m;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; cin &gt;&gt; n &gt;&gt; m;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; Graph g(n);</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; while(m--)</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int a,b;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cin &gt;&gt; a &gt;&gt; b;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; g.addEdge(a-1, b-1);</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; g.MencariYangTerhubung();</p>
            <p><br></p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; sort(myVector.begin(), myVector.end(), greater&lt;int&gt;());</p>
            <p><br></p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; int hasil = 0;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; int kali = 1;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; for (auto i = myVector.begin(); i != myVector.end(); i++)</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hasil+= (*i) * kali;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; kali++;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;Kasus #%d: %d\n&quot;,mboh, hasil);</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; myVector.clear();</p>
            <p>&nbsp; &nbsp; }</p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p>&nbsp; &nbsp; return 0;</p>
            <p>}</p>
            <p><br></p>
        </div>

        <script>
          var acc = document.getElementsByClassName("accordion_2");
          var i;

          for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
              this.classList.toggle("active_2");
              var panel = this.nextElementSibling;
              if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
              } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
              } 
            });
          }
        </script>

        <hr>
    
        <div class="col-lg-12">
          <h2>Please Comment Below</h2>

          <div class="comment-form-container" >
            <form id="frm-comment" name="form1" onsubmit="required()">
              <div class="control-group form-group">   
                <label>Username:</label>            
                <input type="hidden" name="comment_id" id="commentId"
                  placeholder="Name" required/>
                  <?php if ($_SESSION) : ?>
                    <input class="input-field" type="text"
                      name="name" id="name" value = "<?php echo $_SESSION['username']?>" required/>
                  <?php else: ?>
                    <input class="input-field" type="text"
                      name="name" id="name" required/>
                  <?php endif; ?>

              </div>

              <div class="control-group form-group">
                <label>Message:</label> 
                <p class="emoji-picker-container">
                  <textarea class="input-field" data-emojiable="true"
                    data-emoji-input="unicode" type="text" name="comment"
                    id="comment" onfocus="this.value=''" required></textarea>
                </p>
              </div>

              <div>
                <input type="button" class="btn-submit" id="submitButton" value="Add a Comment" />
                <div id="comment-message">Comment Added Successfully!</div>
                <div id="login-message">Must login to Comment!</div>
                <div id="fill-message">Please fill the blank!</div>
              </div>


            </form>
          </div><div id="output"></div>
          
        </div>

        <hr>

	      <script>

            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            function required()
            {
              var empt = document.forms["form1"]["name"].value;
              var empt2 = document.forms["form1"]["comment"].value;
              if (empt == "" || empt == null,  empt2 == "" || empt2 == null)
              {
              alert("Please Fill All Required Field");
              return false;
              }
              else 
              {
              //alert('Code has accepted : you can try another');
              return true; 
              }
            }

            <?php if ($_SESSION) : ?>
            $("#submitButton").click(function () {
                $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                if (required() == false)
                {
                  $("#alert-message").css('display', 'inline-block');
                }
                else
                {
                  $.ajax({
                    url: "comments/other-1-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {

                        $("#comment-message").css('display', 'inline-block');
                        $("#name").val("");
                        $("#comment").val("");
                        $("#commentId").val("");
                        listComment();
                        
                    }
                  });
                }
            });

            <?php else: ?>
              $("#submitButton").click(function () {

                $("#login-message").css('display', 'inline-block');

            });
            <?php endif; ?>

            $(document).ready(function () {
                listComment();
            });

            $(function () {
                // Initializes and creates emoji set from sprite sheet
                window.emojiPicker = new EmojiPicker({
                    emojiable_selector: '[data-emojiable=true]',
                    assetsPath: 'comments/vendor/emoji-picker/lib/img/',
                    popupButtonClasses: 'icon-smile'
                });

                window.emojiPicker.discover();
            });


            function listComment() {
                $.post("comments/other-1-list.php",
                        function (data) {
                            var data = JSON.parse(data);

                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments =  "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by' style='color: #09F;'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" +
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";
                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {

                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by' style='color: #09F;'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" +
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);

                    }
                }
            }

         

        </script>

      </div>

      <?php
          include 'sidewidget-2.php';
      ?>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php
    include 'header 2.php';
    include 'footer.php'
?>    