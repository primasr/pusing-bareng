<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Counting Rooms';
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
        <h1 class="mt-4">Counting Rooms</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://cses.fi/problemset/task/1192" target="_blank"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 11:30 PM</p>

        <ol class="breadcrumb-cses">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="cses-homepage.php">CSES</a>
            </li>
            <li class="breadcrumb-item">Counting Rooms</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Counting Rooms</h2>
        <table style="width:30%">
            <tr>
                <td style="width:60%">Time limit</td>
                <td style="width:40%">1 s</td>
            </tr>
            <tr>
                <td style="width:60%">Memory limit</td>
                <td style="width:40%">512 MB</td>
            </tr>
        </table>
        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">You are given a map of a building, and your task is to count the number of its rooms. 
        The size of the map is <b>n x m</b> squares, and each square is either floor or wall. 
        You can walk left, right, up, and down through the floor squares.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">The first input line has two integers <b>n</b> and <b>m</b>: the height and width of the map.</p>
          <p class="justify">Then there are n lines of m characters describing the map. Each character is either <span class="block">.</span> (floor) or <span class="block">#</span> (wall).</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">Print one integer: the number of rooms.</p>

        <h5>Contoh Masukan 1</h5>
        <pre>5 8<br>########<br>#..#...#<br>####.#.#<br>#..#...#<br>########</pre>

        <h5>Contoh Keluaran 1</h5>
        <pre>3</pre>

        <h5>Batasan</h5>
        <ul class="a">
          <li>1 <= n,m <= 1000</li>
        </ul>

        <hr>

        <button class="accordion_2 accordion-cses">Solution</button>
        <div class="panel-cses code-font">
            <p><br></p>
            <p>#include &lt;bits/stdc++.h&gt;</p>
            <p><br></p>
            <p>using namespace std;</p>
            <p><br></p>
            <p>const int mxN = 1e3;</p>
            <p>int n,m;</p>
            <p>string s[mxN];</p>
            <p><br></p>
            <p>bool e(int i, int j)</p>
            <p>{</p>
            <p>&nbsp; &nbsp; return i&gt;=0 &amp;&amp; i &lt; n &amp;&amp; j &gt;= 0 &amp;&amp; j &lt; m &amp;&amp; s[i][j]==&apos;.&apos;;</p>
            <p>}</p>
            <p><br></p>
            <p>void dfs(int i, int j)</p>
            <p>{</p>
            <p>&nbsp; &nbsp; s[i][j]=&apos;#&apos;;</p>
            <p>&nbsp; &nbsp; if (e(i-1,j))</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; dfs(i-1,j);</p>
            <p>&nbsp; &nbsp; if (e(i+1,j))</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; dfs(i+1,j);</p>
            <p>&nbsp; &nbsp; if (e(i,j-1))</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; dfs(i,j-1);</p>
            <p>&nbsp; &nbsp; if (e(i,j+1))</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; dfs(i,j+1);</p>
            <p>}</p>
            <p><br></p>
            <p>int main ()</p>
            <p>{</p>
            <p><br></p>
            <p>&nbsp; &nbsp; cin &gt;&gt; n &gt;&gt; m;</p>
            <p>&nbsp; &nbsp; for (int i = 0 ; i &lt; n; i++)</p>
            <p>&nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; cin &gt;&gt; s[i];</p>
            <p>&nbsp; &nbsp; }</p>
            <p><br></p>
            <p>&nbsp; &nbsp; int ans = 0;</p>
            <p>&nbsp; &nbsp; for(int i = 0; i &lt; n; i++)</p>
            <p>&nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0 ; j &lt; m; j++)</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (e(i,j))</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dfs(i,j), ++ans;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
            <p>&nbsp; &nbsp; }</p>
            <p><br></p>
            <p>&nbsp; &nbsp; cout &lt;&lt; ans;</p>
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
                    url: "comments/cses-1-add.php",
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
                $.post("comments/cses-1-list.php",
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