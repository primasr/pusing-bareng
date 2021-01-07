<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Repeated Josephus';
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
        <h1 class="mt-4">Repeated Josephus</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://www.e-olymp.com/en/problems/1515" target="_blank"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 11:30 PM</p>

        <ol class="breadcrumb-olymp">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="olymp-homepage.php">e-Olymp</a>
            </li>
            <li class="breadcrumb-item">Repeated Josephus</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Repeated Josephus</h2>
        <table style="width:30%">
            <tr>
                <td style="width:60%">Time limit</td>
                <td style="width:40%">1 s</td>
            </tr>
            <tr>
                <td style="width:60%">Memory limit</td>
                <td style="width:40%">128 MB</td>
            </tr>
        </table>
        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">At first, there are n people numbered 1 to n around a circle and 
          every second remaining person will be eliminated until only one survives. 
          Let the number of the survivor be x. 
          The process is then repeated with x number of people and let the survivor number is y. 
          The process then starts with y number of people and so on. 
          The repetition ends when the survivor is in the last position in the circle.</p>

        <p class="justify">Example with n = 5: after the first elimination round, 
          the survivor is person 3. Because this is is not the last person in the circle, 
          a new elimination round with 3 people is started. Now person 3 survives, so we can stop.</p>        

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">The first line is an integer representing the number of test cases. 
            Each of the test cases follows below. Each test case consists of an integer representing n (0 < n ≤ 30000).</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">For each test case, print the serial number of the case, 
            a colon, an space, total number of repetitions (the number of times the elimination process is done after 
            the initial elimination round with n people), a space and the position of the survivor at last.</p>

        <h5>Contoh Masukan</h5>
        <pre>2<br>13<br>23403</pre>

        <h5>Contoh Keluaran</h5>
        <pre>Case 1: 2 7<br>Case 2: 8 1023</pre>

        <hr>

        <button class="accordion_2 accordion-olymp">Solution</button>
        <div class="panel-olymp code-font">
            <p><br></p>
            <p>#include &lt;stdio.h&gt;</p>
            <p><br></p>
            <p>int repeated_josephus(int n)</p>
            <p>{</p>
            <p>&nbsp; int p = 1;</p>
            <p>&nbsp; while (p &lt;= n)</p>
            <p>&nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; p*=2;</p>
            <p>&nbsp; }</p>
            <p><br></p>
            <p>&nbsp; return (2 * n) - p + 1;</p>
            <p>}</p>
            <p><br></p>
            <p>int main()</p>
            <p>{</p>
            <p>&nbsp; &nbsp; int t,testcase;</p>
            <p>&nbsp; &nbsp; int n;</p>
            <p>&nbsp; &nbsp; int benar,ulang;</p>
            <p>&nbsp; &nbsp; int hasil_josephus;</p>
            <p><br></p>
            <p>&nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;testcase);</p>
            <p><br></p>
            <p>for (t = 1; t &lt;= testcase; t++)</p>
            <p>{</p>
            <p>&nbsp; scanf(&quot;%d&quot;,&amp;n);</p>
            <p><br></p>
            <p>&nbsp; benar = 0;</p>
            <p>&nbsp; ulang = 0;</p>
            <p><br></p>
            <p>&nbsp; while (benar == 0)</p>
            <p>&nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; hasil_josephus = repeated_josephus(n);</p>
            <p><br></p>
            <p>&nbsp; &nbsp; &nbsp; if (hasil_josephus == n)</p>
            <p>&nbsp; &nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; benar = 1;</p>
            <p>&nbsp; &nbsp; &nbsp; } else</p>
            <p>&nbsp; &nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; n = hasil_josephus;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ulang++;</p>
            <p>&nbsp; &nbsp; &nbsp; }</p>
            <p>&nbsp; }</p>
            <p><br></p>
            <p>&nbsp; printf(&quot;Case %d: %d %d\n&quot;,t,ulang,hasil_josephus);</p>
            <p>}</p>
            <p><br></p>
            <p>&nbsp; return 0;</p>
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
                    url: "comments/olymp-1-add.php",
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
                $.post("comments/olymp-1-list.php",
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