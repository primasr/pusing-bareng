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

    $pageTitle = 'Caesar Chipper';
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
        <h1 class="mt-4">Caesar Chipper</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://tlx.toki.id/courses/basic/chapters/11/problems/C"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 3, 2021 at 4:00 PM</p>

        <ol class="breadcrumb-tlx">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="tlx-homepage-1.php">TLX TOKI</a>
            </li>
            <li class="breadcrumb-item">Caesar Chipper</li>
        </ol>

        <hr>

        <!-- Preview Image -->
        <!-- <img class="img-fluid rounded" src="https://simplesnippets.tech/wp-content/uploads/2018/03/hello-world-program-in-c.jpg" alt="Hello World!"> -->

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Caesar Chipper</h2>
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
        <p class="justify">Caesar cipher adalah salah satu teknik enkripsi yang paling sederhana dan juga dikenal luas.</p>
        <p class="justify">Cara kerja enkripsi ini adalah sebagai berikut. Anda diberikan sebuah konstanta K. 
          Lalu, misalkan kita ingin mengenkripsi suatu string S, yang hanya berisi karakter alfabet 'a' - 'z'. 
          Yang harus Anda lakukan adalah mengganti setiap karakter dari S dengan karakter pada pada 
          posisi K di depannya dalam urutan alfabet. Contohnya, jika K = 3, maka 'a' akan diganti 
          dengan 'd', 'b' dengan 'e', dan seterusnya. Untuk mudahnya, urutan alfabet dapat dianggap siklis, 
          yakni karakter setelah 'z' adalah 'a'. Sebagai contoh, 'y' akan diganti dengan 'b'.</p>
        <p class="justify">Anda diberikan string S oleh Pak Dengklek. Lakukanlah enkripsi Caesar cipher pada string tersebut!</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p>Baris pertama berisi sebuah string S. Baris kedua berisi sebuah bilangan bulat K.</p>
        </div>


        <h5>Format Keluaran</h5>
        <p>Sebuah baris berisi sebuah string S yang telah dienkripsi.</p>

        <h5>Contoh Masukan</h5>
        <pre>caesar<br>2</pre>

        <h5>Contoh Keluaran</h5>
        <pre>ecguct</pre>

        <h5>Batasan</h5>
        <ul class="a">
          <li>String S terdiri atas karakter-karakter <span class="block">a</span> - <span class="block">z</span>.</li>
          <li>String S terdiri atas 1 sampai dengan 100 karakter, inklusif.</li>
          <li>1 ≤ K ≤ 25</li>
        </ul>

        <!-- <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote> -->

        <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p> -->

        <hr>

        <button class="accordion_2 accordion-tlx">Solution with C</button>
        <div class="panel_2 code-font">
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
         -->
          <p><br></p>
          <p>#include &lt;stdio.h&gt;</p>
          <p>#include &lt;string.h&gt;</p>
          <p><br></p>
          <p>int main()</p>
          <p>{</p>
          <p>&nbsp; &nbsp; char kata[100];</p>
          <p>&nbsp; &nbsp; int n,i,panjang,temp;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; scanf(&quot;%s&quot;,kata);</p>
          <p>&nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;n);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; panjang = strlen(kata);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; for (i = 0; i &lt; panjang; i++)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; temp = kata[i];</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; temp += n;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if (temp &gt; &apos;z&apos;)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = temp - 26;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;%c&quot;,temp);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; printf(&quot;\n&quot;);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; return 0;</p>
          <p>}</p>
          <p><br></p>
        </div>

        <br>
        <button class="accordion_2 accordion-tlx">Solution with C++</button>
        <div class="panel_2 code-font">
          <p><br></p>
          <p>#include &lt;string&gt;</p>
          <p>#include &lt;iostream&gt;</p>
          <p><br></p>
          <p>using namespace std;</p>
          <p><br></p>
          <p>string encrypt(string text, int shift)</p>
          <p>{</p>
          <p>&nbsp; &nbsp; string result = &quot;&quot;;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; // traverse text</p>
          <p>&nbsp; &nbsp; for (int i=0;i&lt;text.length();i++)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // memodifikasi per-karakter</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // Encrypt Huruf Kecil</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; result += char(int(text[i]-&apos;a&apos;+shift)%26 + &apos;a&apos;);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; // Return hasil berupa string</p>
          <p>&nbsp; &nbsp; return result;</p>
          <p>}</p>
          <p><br></p>
          <p>int main ()</p>
          <p>{</p>
          <p>&nbsp; &nbsp; string s;</p>
          <p>&nbsp; &nbsp; int shift;</p>
          <p>&nbsp; &nbsp;&nbsp;</p>
          <p>&nbsp; &nbsp; cin &gt;&gt; s;</p>
          <p>&nbsp; &nbsp; cin &gt;&gt; shift;</p>
          <p>&nbsp; &nbsp;&nbsp;</p>
          <p>&nbsp; &nbsp; cout &lt;&lt; encrypt(s,shift) &lt;&lt; endl;</p>
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
                    url: "comments/tlx-2-add.php",
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
                $.post("comments/tlx-2-list.php",
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