<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Candy Businessman';
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
        <h1 class="mt-4">Candy Businessman</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://tlx.toki.id/problems/ideafuse-2014-icpc-sumatra-final/D"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 8:00 PM</p>

        <ol class="breadcrumb-tlx">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="tlx-homepage-1.php">TLX TOKI</a>
            </li>
            <li class="breadcrumb-item">Candy Businessman</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Candy Businessman</h2>
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
        <p class="justify">Ramu, a young child, inspired by the "success" story of Uncle Scrooge (Paman Gober), decides to learn more about business. 
        He learnt the basic rule of business related to trading, i.e. buy low sell high.</p>     
        
        <p class="justify">Ramu noticed there are many shops in his village selling his favorite candy. 
        Moreover, he also noticed that the price of those candies varies between shops. 
        If he buys a candy from one shop and sells it again in another shop, what would be the highest profit he can get? 
        Of course this can't be happened in reality, no shop is willing to buy any candy from its customer; 
        however, let's assume all shops in this village are willing to buy a candy from its customer 
        at the shop's price (i.e. if the shop sell candy at price P, then it will also buy candy at price P).</p>

        <p class="justify">Given the price of a candy in all shops, 
        determine the highest profit Ramu can get by buying exactly one candy from 
        one shop and selling it to another shop.</p>

        <p class="justify">For example, let the prices of a candy in five shops are: 7, 3, 4, 9, and 5; 
        the highest profit can be achieved by buying from the 2ndshop at price 3 and 
        selling it at 4th shop at price 9, with profit 9 - 3 = 6.</p>         

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">Input starts with a single integer T (1 ≤ T ≤ 100) in a line denoting the number of cases. 
          Each case begins with an integer N (2 ≤ N ≤ 100) in a single line denoting the number of shops selling candy. 
          The following line contains N integers Pi (1 ≤ Pi ≤ 100,000) denoting the price of a candy in ith shop.</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">For each case, output in a single line "<span class="block">Case #X: A</span>" (without quotes), 
        where <span class="block">X</span> is the case number, starting from 1, and <span class="block">A</span> is the highest profit can be achieved for that case.</p>

        <h5>Contoh Masukan</h5>
        <pre>4<br>5<br>7 3 4 9 5<br>3<br>10 10 10<br>6<br>20 80 30 10 70 100<br>4<br>8000 2000 4000 1000</pre>

        <h5>Contoh Keluaran</h5>
        <pre>Case #1: 6<br>Case #2: 0<br>Case #3: 90<br>Case #4: 7000</pre>

        <hr>

        <button class="accordion_2 accordion-tlx">Solution</button>
        <div class="panel_2 code-font">
          <p><br></p>
          <p>#include &lt;stdio.h&gt;</p>
          <p><br></p>
          <p>int selection(int maba, int data[100]);</p>
          <p><br></p>
          <p>int main ()</p>
          <p>{</p>
          <p><br></p>
          <p>&nbsp; &nbsp; int t,testcase,i,j;</p>
          <p>&nbsp; &nbsp; int n,toko,permen;</p>
          <p>&nbsp; &nbsp; int list_harga[100] = {0};</p>
          <p>&nbsp; &nbsp; int highest_profit;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;testcase);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; for (t = 1; t &lt;= testcase; t++)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;toko);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; highest_profit = 0;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; for (i = 0; i &lt; toko; i++)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;permen);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; list_harga[i] = permen;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; selection(toko,list_harga);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; highest_profit = list_harga[toko-1] - list_harga[0];</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;Case #%d: %d\n&quot;,t,highest_profit);</p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; return 0;</p>
          <p>}</p>
          <p><br></p>
          <p>int selection(int maba, int data[100]) {</p>
          <p><br></p>
          <p>int x, y, kecil, temp;</p>
          <p>&nbsp;for (x=0; x&lt;maba; x++)</p>
          <p>&nbsp;{</p>
          <p>&nbsp;kecil=x;</p>
          <p>&nbsp;for (y=x; y&lt;maba; y++)</p>
          <p>&nbsp;{</p>
          <p>&nbsp;if (data[kecil]&gt;data[y])</p>
          <p>&nbsp;{kecil = y;}</p>
          <p>&nbsp;}</p>
          <p>&nbsp;temp = data[x];</p>
          <p>&nbsp;data[x] = data[kecil];</p>
          <p>&nbsp;data[kecil] = temp;</p>
          <p><br></p>
          <p>&nbsp;//swap(data[i],data[kecil]);</p>
          <p><br></p>
          <p>&nbsp;}</p>
          <p><br></p>
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
                    url: "comments/tlx-8-add.php",
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
                $.post("comments/tlx-8-list.php",
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