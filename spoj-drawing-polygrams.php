<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Drawing Polygrams';
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
        <h1 class="mt-4">Drawing Polygrams</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://www.spoj.com/problems/VZLA2019D/" target="_blank"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 5, 2021 at 10:00 AM</p>

        <ol class="breadcrumb-spoj">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="spoj-homepage.php">SPOJ</a>
            </li>
            <li class="breadcrumb-item">Drawing Polygrams</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Drawing Polygrams</h2>
        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">Drawing stars on the last page of a notebook is a very entertaining hobby. 
        Did you know these cute "stars" are actually called polygrams?</p>

        <p class="justify">Given a regular polygon with <b>p</b> vertices, we define a polygram <b>p/q</b>, 
        as the resultant polygon obtained after connecting every i-th vertex with the (i+q)-th vertex.</p>    

        <p class="justify">You may know the polygram 5/2 as pentagram</p>

        <p class="justify">Another example is the hexagram 6/2. 
        Given that 6 and 2 are not coprime, this polygram is composed by two 3/1 polygrams</p>    

        <div class="img-div">
        <img class="card-img-top img-shadow" width="550" height="300" src="http://2.bp.blogspot.com/-wmnQtkUQ0wY/ThcBSULVrJI/AAAAAAAABvI/Q0CzlOYi62s/s1600/1.png" alt="Counting Rooms">
        </div>

        <p class="justify">Given a regular polygon with p vertices, 
          its radius R (the distance from its center to any vertex) and a number q, 
          can you calculate the area of the polygram p/q?</p>

        <p class="justify">It is guaranteed that the resultant polygon will not be degenerated, i.e q ≠ p/2 and q ≠ p</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">The first and only line of the input contains three integers <b>p</b>, <b>q</b> and <b>r</b></p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">Print in a single line the area of the resultant polygram p/q with radius r. 
          Print the answer with exactly five decimal places</p>

        <h5>Contoh Masukan 1</h5>
        <pre>5 4 2</pre>

        <h5>Contoh Keluaran 1</h5>
        <pre>9.51057</pre>

        <h5>Contoh Masukan 2</h5>
        <pre>10 4 5</pre>

        <h5>Contoh Keluaran 2</h5>
        <pre>40.61496</pre>

        <h5>Batasan</h5>
        <ul class="a">
          <li>3 &lt;= p &lt;= 10<sup>3</sup></li>
          <li>1 ≤ q < p</li>
          <li>1 ≤ r ≤ 100</li>
          <li>q ≠ p/2 and q ≠ p</li>
        </ul>

        <hr>

        <button class="accordion_2 accordion-spoj">Solution</button>
        <div class="panel-spoj code-font">
            <p><br></p>
            <p>#include &lt;stdio.h&gt;</p>
            <p>#include &lt;math.h&gt;</p>
            <p><br></p>
            <p>#define PI 3.14159265358979323846</p>
            <p><br></p>
            <p>double x[2];</p>
            <p>double y[2];</p>
            <p><br></p>
            <p>int main() {</p>
            <p>&nbsp; &nbsp; int p, q, r;</p>
            <p>&nbsp; &nbsp; scanf(&quot;%d %d %d&quot;, &amp;p, &amp;q, &amp;r);</p>
            <p>&nbsp; &nbsp;&nbsp;</p>
            <p>&nbsp; &nbsp; if (q &gt; p / 2) q = p - q;</p>
            <p>&nbsp; &nbsp; x[0] = r;</p>
            <p>&nbsp; &nbsp; y[0] = 0;</p>
            <p>&nbsp; &nbsp; x[1] = r*cos(2*PI/p);</p>
            <p>&nbsp; &nbsp; y[1] = r*sin(2*PI/p);</p>
            <p><br></p>
            <p>&nbsp; &nbsp; double selx = x[0] - x[1];</p>
            <p>&nbsp; &nbsp; double sely = y[0] - y[1];</p>
            <p>&nbsp; &nbsp; double a = pow(selx, 2) + pow(sely, 2);</p>
            <p><br></p>
            <p>&nbsp; &nbsp; double area = p*a/4*(1.0/tan(PI/p) - tan((q-1)*PI/p));</p>
            <p><br></p>
            <p>&nbsp; &nbsp; printf(&quot;%.5lf\n&quot;, area);</p>
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
                    url: "comments/spoj-1-add.php",
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
                $.post("comments/spoj-1-list.php",
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