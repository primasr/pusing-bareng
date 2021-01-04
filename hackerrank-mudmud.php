<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'MudMud dan Kakaknya';
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
        <h1 class="mt-4">MudMud dan Kakaknya</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://www.hackerrank.com/contests/modul1-strukturdata/challenges/mudmud-dan-kakaknya" target="_blank"><i>here</i></a>
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
            <li class="breadcrumb-item active">MudMud dan Kakaknya</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">MudMud dan Kakaknya</h2>

        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">MudMud sangat menyayangi kakaknya. 
        Suatu ketika MudMud ulang tahun dan diberi hadiah setumpuk roti yang dinomori dari 1-N (dari atas) oleh ibunya. 
        Ibunya berhak memindah roti satu per satu dari tumpukan roti MudMud ke tumpukan kakaknya, 
        atau dari tumpukan kakaknya ke tumpukan MudMud. MudMud harus memiliki jumlah yang sama dengan kakaknya. 
        Jika roti yang dimiliki MudMud lebih sedikit dari yang dipunyai kakaknya, MudMud akan marah. 
        Tapi jika roti yang dimiliki kakaknya lebih sedikit dari yang dipunyai MudMud, MudMud akan kasihan. 
        Jika mereka berdua tidak diberi roti, maka MudMud akan sangat marah.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">Baris pertama adalah N, yaitu jumlah roti. 
          Baris kedua adalah T, jumlah ibunya dapat memindahkan roti. T baris berikutnya adalah Ai dan Bi. 
          Jika Ai = 1 berarti ibunya memindah dari tumpukan MudMud ke tumpukan kakaknya, 
          jika Ai = 2 berarti sebaliknya. Bi adalah banyaknya tumpukan yang dipindah 
          (memindahkannya harus satu per satu)</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">Tampilkan tumpukan roti MudMud dan tumpukan roti kakaknya. 
        Jika tumpukan MudMud lebih sedikit keluarkan "-" diatas tumpukan roti MudMud. 
        Jika lebih banyak keluarkan ":(" diatas tumpukan roti kakaknya. 
        Jika mereka tidak mendapat tumpukan roti keluarkan "MudMud SangaT MaraH!". 
        Jika instruksi salah, (Ai bukan 1 atau 2) berhenti memproses dan keluarkan "TumpukAnnya saLah! :(". 
        gunakan 1 spasi agar tumpukannya rapi.</p>

        <h5>Contoh Masukan</h5>
        <pre>5<br>5<br>1 1<br>1 2<br>1 1<br>2 1<br>2 2</pre>

        <h5>Contoh Keluaran</h5>
        <pre>2 1<br>3 :(<br>4<br>5</pre>

        <h5>Batasan</h5>
        <ul class="a">
          <li>0<=N,T,B<=100</li>
        </ul>

        <hr>

        <button class="accordion_2">Solution</button>
        <div class="panel_2 code-font">
          <p><br></p>
          <p>#include &lt;stdlib.h&gt;</p>
          <p>#include &lt;stdbool.h&gt;</p>
          <p>#include &lt;stdio.h&gt;</p>
          <p><br></p>
          <p>/* Struktur Node */</p>
          <p><br></p>
          <p>typedef struct stackNode_t {</p>
          <p>&nbsp; &nbsp; int data;</p>
          <p>&nbsp; &nbsp; struct stackNode_t *next;</p>
          <p>} StackNode;</p>
          <p><br></p>
          <p>/* Struktur ADT Stack */</p>
          <p><br></p>
          <p>typedef struct stack_t {</p>
          <p>&nbsp; &nbsp; StackNode *_top;</p>
          <p>&nbsp; &nbsp; unsigned _size;</p>
          <p>} Stack;</p>
          <p><br></p>
          <p>/* Function prototype */</p>
          <p><br></p>
          <p>void stack_init(Stack *stack);</p>
          <p>bool stack_isEmpty(Stack *stack);</p>
          <p>void stack_push(Stack *stack, int value);</p>
          <p>void stack_pop(Stack *stack);</p>
          <p>int stack_top(Stack *stack);</p>
          <p>unsigned stack_size(Stack *stack);</p>
          <p><br></p>
          <p>void pindah(Stack *awal,Stack *akhir);</p>
          <p>void print(Stack *adik,Stack *mas);</p>
          <p><br></p>
          <p>int main(int argc, char const *argv[])</p>
          <p>{</p>
          <p>&nbsp; &nbsp; // Buat objek Stack</p>
          <p>&nbsp; &nbsp; Stack mumud;</p>
          <p>&nbsp; &nbsp; Stack kakak;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; // PENTING! Jangan lupa diinisialisasi</p>
          <p>&nbsp; &nbsp; stack_init(&amp;mumud);</p>
          <p>&nbsp; &nbsp; stack_init(&amp;kakak);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; int n,t,a,b;</p>
          <p>&nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;n);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; // simpan nilai n ke variabel lain</p>
          <p>&nbsp; &nbsp; int nn=n;</p>
          <p>&nbsp; &nbsp; // untuk cek input benar/salah nanti</p>
          <p>&nbsp; &nbsp; bool tumpukan_salah=false;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; //input nilai descendent ke stack mudmud</p>
          <p>&nbsp; &nbsp; while(n)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; stack_push(&amp;mumud,n);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; n--;</p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; //banyak melakukan pemindahan</p>
          <p>&nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;t);</p>
          <p>&nbsp; &nbsp; while(t)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; scanf(&quot;%d %d&quot;,&amp;a,&amp;b);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; //memindah tumpukan mudmud ke kakak</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if(a==1)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while(b)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pindah(&amp;mumud, &amp;kakak);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b--;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; //sebaliknya</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; else if(a==2)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while(b)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pindah(&amp;kakak, &amp;mumud);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b--;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; //input tidak valid / tidak sesuai seharusnya</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; else if(a!=1 &amp;&amp; a!=2)</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tumpukan_salah=true;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; t--;</p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; //input valid atau tidak</p>
          <p>&nbsp; &nbsp; if(tumpukan_salah)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;TumpukAnnya saLah! :(\n&quot;);</p>
          <p>&nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; //mereka tidak dapat tumpukan roti</p>
          <p>&nbsp; &nbsp; else if(nn&lt;=0 &amp;&amp; !tumpukan_salah)</p>
          <p>&nbsp; &nbsp; {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;MudMud SangaT MaraH!\n&quot;);</p>
          <p>&nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; //print tumpukan rotinya</p>
          <p>&nbsp; &nbsp; else print(&amp;mumud,&amp;kakak);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; return 0;</p>
          <p>}</p>
          <p><br></p>
          <p>/* Function definition below */</p>
          <p><br></p>
          <p>void stack_init(Stack *stack)</p>
          <p>{</p>
          <p>&nbsp; &nbsp; stack-&gt;_size = 0;</p>
          <p>&nbsp; &nbsp; stack-&gt;_top = NULL;</p>
          <p>}</p>
          <p><br></p>
          <p>bool stack_isEmpty(Stack *stack) {</p>
          <p>&nbsp; &nbsp; return (stack-&gt;_top == NULL);</p>
          <p>}</p>
          <p><br></p>
          <p>void stack_push(Stack *stack, int value)</p>
          <p>{</p>
          <p>&nbsp; &nbsp; StackNode *newNode = (StackNode*) malloc(sizeof(StackNode));</p>
          <p>&nbsp; &nbsp; if (newNode) {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; stack-&gt;_size++;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if (stack_isEmpty(stack)) newNode-&gt;next = NULL;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; else newNode-&gt;next = stack-&gt;_top;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; newNode-&gt;data = value;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; stack-&gt;_top = newNode;</p>
          <p>&nbsp; &nbsp; }</p>
          <p>}</p>
          <p><br></p>
          <p>void stack_pop(Stack *stack)</p>
          <p>{</p>
          <p>&nbsp; &nbsp; if (!stack_isEmpty(stack)) {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; StackNode *temp = stack-&gt;_top;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; stack-&gt;_top = stack-&gt;_top-&gt;next;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; free(temp);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; stack-&gt;_size--;</p>
          <p>&nbsp; &nbsp; }</p>
          <p>}</p>
          <p><br></p>
          <p>int stack_top(Stack *stack)</p>
          <p>{</p>
          <p>&nbsp; &nbsp; if (!stack_isEmpty(stack))</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; return stack-&gt;_top-&gt;data;</p>
          <p>&nbsp; &nbsp; return 0;</p>
          <p>}</p>
          <p><br></p>
          <p>unsigned stack_size(Stack *stack) {</p>
          <p>&nbsp; &nbsp; return stack-&gt;_size;</p>
          <p>}</p>
          <p><br></p>
          <p>//memindah tumpukan teratas</p>
          <p>//dari stack asal ke stack tujuan</p>
          <p>void pindah(Stack *awal,Stack *akhir)</p>
          <p>{</p>
          <p>&nbsp; &nbsp; &nbsp;int move;</p>
          <p>&nbsp; &nbsp; &nbsp;if(!stack_isEmpty(awal))</p>
          <p>&nbsp; &nbsp; &nbsp;{</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; move = awal-&gt;_top-&gt;data;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; stack_push(akhir,move);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; stack_pop(awal);</p>
          <p>&nbsp; &nbsp; &nbsp;}</p>
          <p>}</p>
          <p><br></p>
          <p>//print tumpukan roti dengan beberapa ketentuan</p>
          <p>void print(Stack *adik,Stack *mas)</p>
          <p>{</p>
          <p>&nbsp; &nbsp; int sizeadik = stack_size(adik);</p>
          <p>&nbsp; &nbsp; int sizemas = stack_size(mas);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; //kerjakan sampai salah satu stack kosong</p>
          <p>&nbsp; &nbsp; while (!stack_isEmpty(adik) || !stack_isEmpty(mas)) {</p>
          <p><br></p>
          <p>&nbsp; &nbsp; //INI STACK ADIK</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // size mumud &lt; size kakak</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if (stack_isEmpty(adik) &amp;&amp; sizeadik &gt;= 0){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;- &quot;);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sizeadik = -1;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // jika stack adik masih ada</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; else if (!stack_isEmpty(adik)) {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;%d &quot;, stack_top(adik));</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; stack_pop(adik);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // jika stack adik sudah habis, cetak spasi aja</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; else if(stack_isEmpty(adik) &amp;&amp; sizeadik == -1){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; printf(&quot; &quot;);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; //INI STACK KAKAK</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // size mumud &gt; size kakak</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if (stack_isEmpty(mas) &amp;&amp; sizemas &gt;= 0){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;:(&quot;);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sizemas = -1;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; // jika stack kakak masih ada</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; else if (!stack_isEmpty(mas)) {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;%d&quot;, stack_top(mas));</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; stack_pop(mas);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;\n&quot;);</p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
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
                    url: "comments/hr-2-add.php",
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
                $.post("comments/hr-2-list.php",
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