<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);
    
    /*
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE `id`= $id";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    mysqli_close($conn);
    */

    $pageTitle = 'Rotasi Matriks';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
    include 'sidewidget-1.php';
?>

  <link href="style.css" rel="stylesheet">

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8 bg-content">

        <!-- Title -->
        <h1 class="mt-4">Rotasi Matriks</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://tlx.toki.id/courses/basic/chapters/09/problems/D"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 3, 2021 at 4:30 PM</p>

        <ol class="breadcrumb-tlx">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="tlx-homepage-1.php">TLX TOKI</a>
            </li>
            <li class="breadcrumb-item">Rotasi Matriks</li>
        </ol>

        <hr>

        <!-- Preview Image -->
        <!-- <img class="img-fluid rounded" src="https://simplesnippets.tech/wp-content/uploads/2018/03/hello-world-program-in-c.jpg" alt="Hello World!"> -->

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Rotasi Matriks</h2>
        <table style="width:30%">
            <tr>
                <td style="width:60%">Time limit</td>
                <td style="width:40%">1 s</td>
            </tr>
            <tr>
                <td style="width:60%">Memory limit</td>
                <td style="width:40%">64 MB</td>
            </tr>
        </table>

        <!-- <img class="img-fluid rounded padding" src="https://simplesnippets.tech/wp-content/uploads/2018/03/hello-world-program-in-c.jpg" alt="Hello World!"> -->

        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">Pak Dengklek memberikan Anda sebuah matriks berukuran N × M. 
          Cetak kembali matriks tersebut setelah diputar 90 derajat searah jarum jam.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">Baris pertama berisi dua buah bilangan bulat N dan M. 
            N baris berikutnya masing-masing berisi M buah bilangan bulat, 
            yang menyatakan elemen-elemen matriks tersebut.</p>
        </div>


        <h5>Format Keluaran</h5>
        <p class="justify">Sebuah matris berukuran M × N dengan format seperti masukan yang merupakan matriks yang sudah diputar.</p>

        <h5>Contoh Masukan</h5>
        <pre>4 3<br>34 87 15<br>66 71 52<br>47 47 48<br>45 75 35</pre>

        <h5>Contoh Keluaran</h5>
        <pre>45 47 66 34<br>75 47 71 87<br>35 48 52 15</pre>

        <h5>Batasan</h5>
        <ul class="a">
          <li>1 ≤ N, M ≤ 100</li>
          <li>1 ≤ (setiap elemen matriks) ≤ 100</li>
        </ul>

        <!-- <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote> -->

        <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p> -->

        <hr>

        <button class="accordion_2 accordion-tlx">Solution</button>
        <div class="panel_2 code-font">
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
         -->
            <p><br></p>
            <p>#include &lt;bits/stdc++.h&gt;</p>
            <p><br></p>
            <p>using namespace std;</p>
            <p><br></p>
            <p>int main ()</p>
            <p>{</p>
            <p>&nbsp; &nbsp; int m,n;</p>
            <p>&nbsp; &nbsp; int matriks[101][101];</p>
            <p><br></p>
            <p>&nbsp; &nbsp; cin &gt;&gt; m &gt;&gt; n;</p>
            <p><br></p>
            <p>&nbsp; &nbsp; for (int i = 0; i &lt; m; i++)</p>
            <p>&nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &lt; n; j++)</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cin &gt;&gt; matriks[i][j];</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
            <p>&nbsp; &nbsp; }</p>
            <p><br></p>
            <p>&nbsp; &nbsp; for (int i = 0; i &lt; n; i++)</p>
            <p>&nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; for (int j = m-1; j &gt;= 0; j--)</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ( j != 0) cout &lt;&lt; matriks[j][i] &lt;&lt; &quot; &quot;;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else cout &lt;&lt; matriks[j][i] &lt;&lt; endl;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
            <p>&nbsp; &nbsp; }</p>
            <p><br></p>
            <p>&nbsp; &nbsp; return 0;</p>
            <p>}</p>
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
          <h3>Please Comment Below</h3>

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
                    url: "comments/tlx-3-add.php",
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
                $.post("comments/tlx-3-list.php",
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