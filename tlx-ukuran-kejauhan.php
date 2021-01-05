<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Ukuran Kejauhan';
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
        <h1 class="mt-4">Ukuran Kejauhan</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://tlx.toki.id/problems/ideafuse-2014-cp-final/G"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 7:00 PM</p>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="tlx-homepage-1.php">TLX TOKI</a>
            </li>
            <li class="breadcrumb-item active">Ukuran Kejauhan</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Ukuran Kejauhan</h2>
        <table style="width:30%">
            <tr>
                <td style="width:60%">Time limit</td>
                <td style="width:40%">1 s</td>
            </tr>
            <tr>
                <td style="width:60%">Memory limit</td>
                <td style="width:40%">32 MB</td>
            </tr>
        </table>

        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">Pada suatu lomba, para peserta diminta untuk melempar batu sejauh-jauhnya. 
        Nilai diperoleh dari bilangan kuadrat terdekat yang tidak lebih dari posisi batu itu mendarat. 
        Sebagai contoh jika batu itu dilempar dan mendarat pada posisi 90, maka nilai yang diperoleh adalah 81. 
        Dan jika batu peserta lain mendarat pada posisi 121, maka nilai yang diperoleh 121. 
        Karena peserta perlombaan yang begitu banyak, Pak Oski yang sebagai juri kewalahan untuk 
        mencarikan bilangan kuadrat terdekat. 
        Bantulah Pak Oski untuk mencarikan bilangan kuadrat terdekat untuk setiap peserta.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">Baris pertama terdiri dari sebuah integer menyatakan jumlah peserta (1 ≤ N ≤ 20000).
          N baris berikutnya terdiri dari sebuah bilangan positif tidak melebihi 2.000.000.000, 
          yang merupakan posisi mendarat batu yang dilempar peserta.</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">N baris yang merupakan bilangan kuadrat terdekat dari masing-masing peserta. 
        X^2 = Y, dimana Y merupakan bilangan kuadrat, dan X merupakan akar kuadrat dari Y.</p>

        <h5>Contoh Masukan</h5>
        <pre>5<br>5<br>90<br>121<br>100<br>99</pre>

        <h5>Contoh Keluaran</h5>
        <pre>2^2 = 4<br>9^2 = 81<br>11^2 = 121<br>10^2 = 100<br>9^2 = 81</pre>

        <hr>

        <button class="accordion_2">Solution</button>
        <div class="panel_2 code-font">
          <p><br></p>
          <p>#include &lt;stdio.h&gt;</p>
          <p><br></p>
          <p>int main ()</p>
          <p>{</p>
          <p>&nbsp; &nbsp; int angka,pos,tampung;</p>
          <p>&nbsp; &nbsp; int dapat;</p>
          <p>&nbsp; &nbsp; int t,testcase;</p>
          <p><br></p>
          <p>scanf(&quot;%d&quot;,&amp;testcase);</p>
          <p><br></p>
          <p>for (t = 0; t &lt; testcase; t++)</p>
          <p>{</p>
          <p><br></p>
          <p>&nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;angka);</p>
          <p>&nbsp; &nbsp; dapat = 0;</p>
          <p>&nbsp; &nbsp; pos = 1;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; while (dapat == 0)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; tampung = pos*pos;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if (tampung &gt; angka)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pos = pos - 1;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dapat = 1;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; } else</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pos++;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; printf(&quot;%d^2 = %d\n&quot;,pos,pos*pos);</p>
          <p><br></p>
          <p>}</p>
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
                    url: "comments/tlx-7-add.php",
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
                $.post("comments/tlx-7-list.php",
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