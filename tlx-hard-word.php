<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Hard Word';
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
        <h1 class="mt-4">Hard Word</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Admin</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 8:00 PM</p>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="tlx-homepage-1.php">TLX TOKI</a>
            </li>
            <li class="breadcrumb-item active">Hard Word</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Hard Word</h2>
        <table style="width:30%">
            <tr>
                <td style="width:60%">Time limit</td>
                <td style="width:40%">1 s</td>
            </tr>
            <tr>
                <td style="width:60%">Memory limit</td>
                <td style="width:40%">16 MB</td>
            </tr>
        </table>

        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">For some people, some words in Indonesian are harder to read, e.g., 
        UNTAIAN, MAKLUMAT, PEMROGRAMAN, etc; compared to other words such as MAKAN, BELAJAR, MAIN, 
        which are easier to read and pronounce.</p>

        <p class="justify">In this problem, we define the hardness of a word as 
        the number of 2-consecutive consonants plus the number of 3-consecutive vowels in the word.</p>

        <p class="justify">Example,</p>

        <ul class="a">
          <li>UNTAIAN has a hardness equals to 2 (NT, AIA).</li>
          <li>MAKLUMAT has a hardness equals to 1 (KL).</li>
          <li>PEMROGRAMAN has a hardness equals to 2 (MR, GR).</li>
          <li>MAKAN has a hardness equals to 0.</li>
          <li>TIDUR has a hardness equals to 0.</li>
          <li>MAIN has a hardness equals to 0.</li>
          <li>AIUEOXYZ has a hardness equals to 5 (AIU, IUE, UEO, XY, YZ).</li>
          <li>LIAUSVIA has a hardness equals to 2 (IAU, SV).</li>
        </ul>      

        <p class="justify">Given a word, you have to determine its hardness value (or output EASY if its hardness equals to 0).</p>  

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">Input starts with a single integer T (1 ≤ T ≤ 100) in a line denoting the number of cases. 
          Each case contains a string S in one line denoting the word. 
          S consists of only uppercase letters (A-Z) which length between 1 and 50, inclusive.</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">For each case, output in a single line "<span class="block">Case #X: A</span>" (without quotes), 
        where <span class="block">X</span> is the case number, starting from 1, and <span class="block">A</span> is the hardness of the word. 
        If the hardness equals to 0, then output "EASY" (without quotes) for <span class="block">A</span>.</p>

        <h5>Contoh Masukan</h5>
        <pre>8<br>UNTAIAN<br>MAKLUMAT<br>PEMROGRAMAN<br>MAKAN<br>TIDUR<br>MAIN<br>AIUEOXYZ<br>LIAUSVIA</pre>

        <h5>Contoh Keluaran</h5>
        <pre>Case #1: 2<br>Case #2: 1<br>Case #3: 2<br>Case #4: EASY<br>Case #5: EASY<br>Case #6: EASY<br>Case #7: 5<br>Case #8: 2</pre>

        <hr>

        <button class="accordion_2">Solution</button>
        <div class="panel_2 code-font">
          <p><br></p>
          <p>#include &lt;stdio.h&gt;</p>
          <p>#include &lt;string.h&gt;</p>
          <p><br></p>
          <p>int main ()</p>
          <p>{</p>
          <p>&nbsp; &nbsp; int sulit,panjang,i,j;</p>
          <p>&nbsp; &nbsp; char kata[51];</p>
          <p>&nbsp; &nbsp; int temp;</p>
          <p>&nbsp; &nbsp; int t,testcase;</p>
          <p><br></p>
          <p>scanf(&quot;%d&quot;,&amp;testcase);</p>
          <p><br></p>
          <p>for (t = 1; t &lt;= testcase; t++)</p>
          <p>{</p>
          <p><br></p>
          <p>&nbsp; &nbsp; scanf(&quot;%s&quot;,kata);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; sulit = 0;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; panjang = strlen(kata);</p>
          <p><br></p>
          <p><br></p>
          <p>&nbsp; &nbsp; for (i = 0; i &lt; panjang-1; i++)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; //temp = (int)kata[i];</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; //printf(&quot;%c\n&quot;,kata[i]);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if (kata[i] == &apos;A&apos; || kata[i] == &apos;I&apos; || kata[i] == &apos;U&apos;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; || kata[i] == &apos;E&apos; || kata[i] == &apos;O&apos;)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i == panjang-1)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ((kata[i+1] == &apos;A&apos; || kata[i+1] == &apos;I&apos; || kata[i+1] == &apos;U&apos;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; || kata[i+1] == &apos;E&apos; || kata[i+1] == &apos;O&apos;) &amp;&amp;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (kata[i+2] == &apos;A&apos; || kata[i+2] == &apos;I&apos; || kata[i+2] == &apos;U&apos;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; || kata[i+2] == &apos;E&apos; || kata[i+2] == &apos;O&apos;))</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sulit++;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; } else</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (kata[i+1] == &apos;A&apos; || kata[i+1] == &apos;I&apos; || kata[i+1] == &apos;U&apos;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; || kata[i+1] == &apos;E&apos; || kata[i+1] == &apos;O&apos;)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sulit++;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p><br></p>
          <p>&nbsp; &nbsp; if (sulit == 0)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;Case #%d: EASY\n&quot;,t);</p>
          <p>&nbsp; &nbsp; } else</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;Case #%d: %d\n&quot;,t,sulit);</p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p><br></p>
          <p>}</p>
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
                    url: "comments/tlx-9-add.php",
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
                $.post("comments/tlx-9-list.php",
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