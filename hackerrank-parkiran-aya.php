<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Parkiran Aya';
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
        <h1 class="mt-4">Parkiran Aya</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://www.hackerrank.com/contests/modul1-strukturdata/challenges/parkiran-aya" target="_blank"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 10:30 PM</p>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="hackerrank-homepage.php">HackerRank</a>
            </li>
            <li class="breadcrumb-item active">Parkiran Aya</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Parkiran Aya</h2>

        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">Terdapat sebuah sistem parkiran yang dapat memberi tahu pengunjung apakah mereka 
        dapat memarkirkan kendaraannya atau tidak. 
        Sistem ini akan mengecek terlebih dahulu kendaraan yang akan diparkir, 
        waktu kedatangan dan perginya, serta kapasitas parkiran. 
        Sistem akan menerima kendaraan yang waktu kedatangan dan 
        perginya sesuai sehingga tidak membuat parkiran macet. 
        Setiap pukul 00.00 - 01.00, parkiran ditutup karena dilakukan maintenance, 
        maka parkiran harus dikosongkan.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">Satu baris N (banyak kendaraan yang akan parkir) dan K (kapasitas parkiran). 
          Dilanjutkan N baris I (waktu kedatangan tiap kendaraan) dan O (waktu pergi tiap kendaraan).</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify"><b>Lancar</b> jika parkiran tersebut memenuhi ketentuan dan tiap kendaraan dapat 
        keluar sesuai dengan waktunya masing-masing.</p>
        <p class="justify"><b>Macet</b> jika terdapat kendaraan yang menghambat kendaraan lainnya.</p>

        <h5>Contoh Masukan 1</h5>
        <pre>3 2<br>1 10<br>2 5<br>6 9</pre>

        <h5>Contoh Keluaran 1</h5>
        <pre>Lancar</pre>

        <h5>Contoh Masukan 2</h5>
        <pre>3 2<br>1 5<br>2 5<br>3 7</pre>

        <h5>Contoh Keluaran 2</h5>
        <pre>Macet</pre>

        <h5>Batasan</h5>
        <ul class="a">
          <li>1 <= N <= 10000</li>
          <li>1 <= K <= 1000</li>
          <li>0 < S, F < 24</li>
        </ul>

        <hr>

        <button class="accordion_2">Solution</button>
        <div class="panel_2 code-font">
          <p><br></p>
          <p>#include &lt;stdio.h&gt;</p>
          <p>#include &lt;math.h&gt;</p>
          <p><br></p>
          <p>int main()</p>
          <p>{</p>
          <p>&nbsp; &nbsp; // deklarasi variabel</p>
          <p>&nbsp; &nbsp; int Parkiranku[10000];</p>
          <p>&nbsp; &nbsp; int n,k, c, d;</p>
          <p>&nbsp; &nbsp; int cek=0, i, j;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; // input banyak kendaran mau parkir dan max.kendaraan</p>
          <p>&nbsp; &nbsp; scanf(&quot;%d %d&quot;,&amp;n,&amp;k);</p>
          <p>&nbsp; &nbsp; for(i=0;i&lt;n;i++){</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // input waktu masuk dan keluar kendaraan</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; scanf(&quot;%d %d&quot;,&amp;c,&amp;d);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; for(j=c;j&lt;=d;j++){</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // penanda kalau di jam ke-j ada yang parkir</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Parkiranku[j]++;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //jika yang parkir di jam ke-j &gt; max.kendaraan</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //maka pasti macet</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(Parkiranku[j]&gt;k){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cek=1;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // lanjutan dari baris 24-26</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // karena break disana hanya mengerluarkan dari for loop j</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if(cek==1) break;</p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; // apakah bisa parkir atau tidak?</p>
          <p>&nbsp; &nbsp; if(cek==0) printf(&quot;Lancar\n&quot;);</p>
          <p>&nbsp; &nbsp; else</p>
          <p>&nbsp; &nbsp; if(cek==1) printf(&quot;Macet\n&quot;);</p>
          <p>&nbsp; &nbsp; return 0;</p>
          <p>}</p>
          <p><br></p>
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
                    url: "comments/hr-1-add.php",
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
                $.post("comments/hr-1-list.php",
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