<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Herding';
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
        <h1 class="mt-4">Herding</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://www.spoj.com/problems/HERDING/" target="_blank"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 5, 2021 at 10:30 AM</p>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="spoj-homepage.php">SPOJ</a>
            </li>
            <li class="breadcrumb-item active">Herding</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Herding</h2>
        <br>
        <br>

        <h5>Deskripsi</h5> 
        <p class="justify">Oh no! A number of stray cats have been let loose in the city, 
          and as the City Cat Catcher, you have been assigned the vital task of retrieving all of the cats. 
          This is an ideal opportunity to test your latest invention, 
          a cat trap which is guaranteed to retrieve every cat which walks into 
          a square-shaped subsection of the city.</p>

        <p class="justify">Fortunately, you have the assistance of one of the world's foremost cat psychologists, 
          who has the amazing ability of predicting, given a square subsection of the city, 
          exactly which of the four cardinal directions (north, east, south or west) the cat will head. 
          While this information is handy, you still don't know where all the cats currently are.</p>    

        <p class="justify">In order to prove the cost-effectiveness of your method to the City it would, 
          of course, be important to minimize the number of traps used.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">The input will begin with a line consisting of two numbers n and m, 
            separated by a space (1 ≤ n, m ≤ 1000). The city will be an n x m grid of square subsections. 
            The next n lines will each consist of a string of length m, 
            consisting of the letters 'N', 'E', 'S', or 'W', representing north, east, south and west, respectively. 
            (The first character of the first line will be the northwesternmost point.) 
            The direction in the square is the direction which cats will head if they are in that square. 
            The cat psychologist assures you that cats have no interest in leaving the city.</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">Output the minimum number of traps needed.</p>

        <h5>Contoh Masukan</h5>
        <pre>3 4<br>SWWW<br>SEWN<br>EEEN</pre>

        <h5>Contoh Keluaran</h5>
        <pre>2</pre>

        <hr>

        <button class="accordion_2">Solution</button>
        <div class="panel_2 code-font">
            <p><br></p>
            <p>#include&lt;stdio.h&gt;</p>
            <p><br></p>
            <p>char gerak[1000][1000];</p>
            <p>int kota[1000][1000];</p>
            <p><br></p>
            <p>int tanda=1;</p>
            <p>int banyak_jebakan=0;</p>
            <p><br></p>
            <p>void gaeruh(int x,int y)</p>
            <p>{</p>
            <p>&nbsp;if(kota[x][y]==0)</p>
            <p>&nbsp;{</p>
            <p>&nbsp; &nbsp; kota[x][y]=tanda;</p>
            <p>&nbsp;}</p>
            <p><br></p>
            <p>&nbsp;else</p>
            <p>&nbsp;{</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>if(kota[x][y]==tanda)</p>
            <p>&nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; return;</p>
            <p>&nbsp; &nbsp; }</p>
            <p><br></p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>else</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>{</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>banyak_jebakan--;</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>return;</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>}</p>
            <p><br></p>
            <p>&nbsp;}</p>
            <p><br></p>
            <p>switch (gerak[x][y])</p>
            <p>&nbsp;{</p>
            <p>&nbsp; &nbsp; case &apos;N&apos; : gaeruh(x-1,y);</p>
            <p>&nbsp; &nbsp; break;</p>
            <p>&nbsp; &nbsp; case &apos;E&apos; : gaeruh(x,y+1);</p>
            <p>&nbsp; &nbsp; break;</p>
            <p>&nbsp; &nbsp; case &apos;W&apos; : gaeruh(x,y-1);</p>
            <p>&nbsp; &nbsp; break;</p>
            <p>&nbsp; &nbsp; case &apos;S&apos; : gaeruh(x+1,y);</p>
            <p>&nbsp; &nbsp; break;</p>
            <p><br></p>
            <p>&nbsp;}</p>
            <p><br></p>
            <p>}</p>
            <p><br></p>
            <p><br></p>
            <p>int main()</p>
            <p>{</p>
            <p>&nbsp;int n,m;</p>
            <p>&nbsp;scanf(&quot;%d %d&quot;,&amp;n,&amp;m);</p>
            <p>&nbsp;//memset(visited, 0, sizeof(visited));</p>
            <p><br></p>
            <p>&nbsp;for(int i=0;i&lt;n;i++)</p>
            <p>&nbsp; &nbsp; {</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>scanf(&quot;%s&quot;,gerak[i]);</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>}</p>
            <p><br></p>
            <p>&nbsp;for(int i=0;i&lt;n;i++)</p>
            <p>&nbsp;{</p>
            <p><br></p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>for(int j=0;j&lt;m;j++)</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>{</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>if(kota[i][j]!=0)</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>continue;</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>else</p>
            <p><span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>{</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>gaeruh(i,j);</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>banyak_jebakan++;</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>tanda++;</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>}</p>
            <p>&nbsp;<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>}</p>
            <p>&nbsp;}</p>
            <p>&nbsp;printf(&quot;%d\n&quot;,banyak_jebakan);</p>
            <p><br></p>
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
                    url: "comments/spoj-2-add.php",
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
                $.post("comments/spoj-2-list.php",
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