<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Missing Number';
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
        <h1 class="mt-4">Missing Number</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://cses.fi/problemset/task/1083" target="_blank"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 11:40 PM</p>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="cses-homepage.php">CSES</a>
            </li>
            <li class="breadcrumb-item active">Missing Number</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Missing Number</h2>
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
        <p class="justify">You are given all numbers between 1,2,...,n except one. 
        Your task is to find the missing number.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">The first input line contains an integer n.</p>
          <p class="justify">The second line contains n−1 numbers. Each number is distinct and between 1 and n (inclusive).</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">Print the missing number.</p>

        <h5>Contoh Masukan 1</h5>
        <pre>5 8<br>########<br>#..#...#<br>####.#.#<br>#..#...#<br>########</pre>

        <h5>Contoh Keluaran 1</h5>
        <pre>3</pre>

        <h5>Batasan</h5>
        <ul class="a">
          <li>2 <= n <= 2x10<sup>5</sup> </li>
        </ul>

        <hr>

        <button class="accordion_2">Solution</button>
        <div class="panel_2 code-font">
            <p><br></p>
            <p>#include &lt;bits/stdc++.h&gt;</p>
            <p><br></p>
            <p>using namespace std;</p>
            <p><br></p>
            <p>#define ll long long</p>
            <p>const ll mboh = 2e5 + 1;</p>
            <p><br></p>
            <p>int main()</p>
            <p>{</p>
            <p>&nbsp; &nbsp; ll n,angka;</p>
            <p><br></p>
            <p>&nbsp; &nbsp; cin &gt;&gt; n;</p>
            <p>&nbsp; &nbsp;ll larik[mboh];</p>
            <p><br></p>
            <p>&nbsp; &nbsp;memset(larik,0,sizeof(larik));</p>
            <p><br></p>
            <p>&nbsp; &nbsp;for(int i = 1; i &lt;= n-1; i++)</p>
            <p>&nbsp; &nbsp;{</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;cin &gt;&gt; angka;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;larik[angka]++;</p>
            <p>&nbsp; &nbsp;}</p>
            <p><br></p>
            <p>&nbsp; &nbsp;for(int i = 1; i &lt;= n; i++)</p>
            <p>&nbsp; &nbsp;{</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;//cout &lt;&lt; larik[i] &lt;&lt; &quot; &quot;;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;if (!larik[i])</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;{</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;cout &lt;&lt; i &lt;&lt; endl;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;}</p>
            <p><br></p>
            <p>&nbsp; &nbsp;}</p>
            <p><br></p>
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
                    url: "comments/cses-2-add.php",
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
                $.post("comments/cses-2-list.php",
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