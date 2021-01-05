<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'I Love Kimia';
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
        <h1 class="mt-4">I Love Kimia</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://www.hackerrank.com/contests/praktikum-final-struktur-data/challenges/i-love-kimia-1" target="_blank"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 11:30 PM</p>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="other-homepage.php">Other</a>
            </li>
            <li class="breadcrumb-item active">I Love Kimia</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">I Love Kimia</h2>
        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">Hainnes adalah salah satu mahasiswi yang tinggal di planet Nepisi. 
          Ia berkuliah di salah satu institut terkenal yakni Institut Teknologi Saja di jurusan Informatika. 
          Saat awal diterima, Hainnes mengira bahwa ia tidak akan bertemu dengan pelajaran yang paling ia benci 
          semasa SMA yaitu kimia.Tetapi, dugaannya ternyata salah. Di tahun ajaran baru ini, 
          rektor Institut Teknologi Saja membuat suatu kebijakan baru yaitu semua mahasiswa tahun ajaran baru akan
          endapatkan mata kuliah kimia di semester pertamanya. 
          Tentu saja ini membuat Hainnes sangat kesal karena ia harus kembali bertemu dengan musuh lamanya yaitu 
          kimia.</p>
          
        <p class="justify">Hari ini, dosen kimia Hainnes, pak Masfu mengajarkan tentang konfigurasi elektron. 
          Konfigurasi elektron di planet Nepisi hampir sama dengan di bumi. 
          Elektron-elektron akan mengisi kulit yang paling dalam sampai penuh, 
          lalu berlanjut kulit yang lebih luar dan seterusnya sampai semua elektron sudah menempati kulit di atom
           tersebut. Sama seperti di bumi, kapasitas kulit atom terdalam ke-i adalah 2*i2. 
           Yang membedakan konfigurasi elektron di bumi dan Nepisi adalah jika di bumi terdapat 
           batasan untuk jumlah atom yang berada pada kulit terluar yakni 8, 
           di planet Nepisi tidak ada batasan untuk jumlah elektron yang berada di kulit terluar dari sebuah atom. 
           Sebagai contoh,untuk atom yang memiliki 20 elektron,maka konfigurasi elektronnya 
           adalah 2 8 10(berturut-turut dari kulit terdalam ke-1,ke-2 lalu ke-3).</p>

        <p class="justify">Di akhir perkuliahan, pak Masfu memberikan latihan soal pada muridmuridnya untuk
           menentukan berapa jumlah kulit pada atom dengan jumlah elektron K. 
           Karena soal-soalnya sangat banyak, Hainnes pun ingin membuat program agar ia dapat menjawab
            soal-soal tersebut dengan cepat. Karena itu ia pun memintamu untuk membantunya agar
             ia tidak harus berurusan dengan kimia lama-lama.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">aris pertama berisi sebuah bilangan T yang menyatakan banyaknya soal yang diberikan oleh pak Masfu.</p>
          <p class="justify">T baris selanjutnya berisi sebuah bilangan Ki yang merupakan jumlah elektron atom ke-i.</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">T buah baris berisi sebuah bilangan Ai dimana Ai adalah jumlah kulit dari atom ke-i.</p>

        <h5>Contoh Masukan</h5>
        <pre>3<br>20<br>10<br>11</pre>

        <h5>Contoh Keluaran</h5>
        <pre>3<br>2<br>3</pre>

        <h5>Batasan</h5>
        <ul class="a">
          <li>1 ≤ T ≤ 10<sup>5</sup></li>
          <li>1 ≤ Ki ≤ 10<sup>18</sup></li>
        </ul>

        <hr>

        <button class="accordion_2">Solution</button>
        <div class="panel_2 code-font">
            <p><br></p>
            <p>#include &lt;bits/stdc++.h&gt;</p>
            <p><br></p>
            <p>using namespace std;</p>
            <p>#define ll long long</p>
            <p>const ll MAX_NUM = 1e18;</p>
            <p>// 2* i ^ 2</p>
            <p><br></p>
            <p>int main ()</p>
            <p>{</p>
            <p>&nbsp; &nbsp; vector &lt;ll&gt; kulit;</p>
            <p>&nbsp; &nbsp; kulit.push_back(2);</p>
            <p>&nbsp; &nbsp; while (kulit.back() &lt;= MAX_NUM)</p>
            <p>&nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; ll result = (ll)kulit.size() + 1;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; ll temp = 2*(pow(result,2));</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; kulit.push_back(temp + kulit.back());</p>
            <p>&nbsp; &nbsp; }</p>
            <p><br></p>
            <p>&nbsp; &nbsp; ll testcase;</p>
            <p>&nbsp; &nbsp; cin &gt;&gt; testcase;</p>
            <p>&nbsp; &nbsp; while (testcase--)</p>
            <p>&nbsp; &nbsp; {</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; ll elektron;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; cin &gt;&gt; elektron;</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; ll posisi_kulit = lower_bound(kulit.begin(),kulit.end(),elektron) - kulit.begin() + 1;</p>
            <p><br></p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; cout &lt;&lt; posisi_kulit &lt;&lt; endl;</p>
            <p>&nbsp; &nbsp; }</p>
            <p><br></p>
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
                    url: "comments/other-3-add.php",
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
                $.post("comments/other-3-list.php",
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