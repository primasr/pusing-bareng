<?php
    session_start();
    include 'conn.php';

    
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Outdoor Study';
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
        <h1 class="mt-4">Outdoor Study</h1>

        <!-- Author -->
        <p class="lead">
          from
          <a href="https://www.hackerrank.com/contests/modul1-strukturdata/challenges/outdoor-study/problem" target="_blank"><i>here</i></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 4, 2021 at 10:30 PM</p>

        <ol class="breadcrumb-hr">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="hackerrank-homepage.php">HackerRank</a>
            </li>
            <li class="breadcrumb-item">Outdoor Study</li>
        </ol>

        <hr>

        <hr>

        <!-- Post Content -->
        <h2 class="justify">Outdoor Study</h2>

        <br>
        <br>

        <h5>Deskripsi</h5>
        <p class="justify">Setiap tahun, guru memutuskan memesan bis untuk transportasi Outdoor Study. 
        Pada waktu mereka akan pergi, bis diparkirkan di pinggir jalan. 
        Jalan di samping sekolah sangat sempit sehingga tidak ada dua bis yang bisa saling berpapasan. 
        Jadi, bis yang terakhir masuk ke pinggir jalan harus keluar dari pinggir jalan terlebih dahulu. 
        Karena jalan satu arah, bis tidak dapat kembali dan masuk kembali ke pinggir jalan atau jalan tengah.</p>

        <p class="justify">Anda diberi urutan bis yang harus diurutkan agar dapat dinaiki sesuai kelas muridnya. 
        Tulis program yang memutuskan apakah bis dapat dibawa ke dalam urutan yang diinginkan guru.</p>

        <h5>Format Masukan</h5>
        <div class="gray-block">
          <p class="justify">Ada beberapa test case. Baris pertama dari setiap case berisi satu bilangan n bis. 
          Baris kedua berisi bilangan 1 sampai n dalam urutan sembarang. 
          Baris kedua berisi bilangan 1 sampai n dalam urutan sembarang. 
          Semua bilangan dipisahkan oleh satu spasi. 
          Bilangan-bilangan ini menunjukkan urutan bis tiba di jalan. 
          Tidak lebih dari 1000 bis dalam jalan ini. input diakhiri dengan bilangan 0.</p>
        </div>

        <h5>Format Keluaran</h5>
        <p class="justify">Untuk setiap case, program anda harus mengeluarkan baris berisi satu kata "yes" 
        jika bis dapat diurutkan dengan bantuan sisi jalan, dan satu kata "no" dalam kasus sebaliknya.</p>

        <h5>Contoh Masukan</h5>
        <pre>5<br>5 1 2 4 3<br>0</pre>

        <h5>Contoh Keluaran</h5>
        <pre>yes</pre>

        <h5>Batasan</h5>
        <ul class="a">
          <li>N<=1000</li>
        </ul>

        <hr>

        <button class="accordion_2 accordion-hr">Solution</button>
        <div class="panel-hr code-font">
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
          <p>int main(int argc, char const *argv[])</p>
          <p>{</p>
          <p><br></p>
          <p>&nbsp; &nbsp; int n;</p>
          <p>&nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;n);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; int larik[n];</p>
          <p>&nbsp; &nbsp; for(int i = 0; i &lt; n; i++){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;larik[i]);</p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; int x;</p>
          <p>&nbsp; &nbsp; scanf(&quot;%d&quot;,&amp;x);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; Stack myStack;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; stack_init(&amp;myStack);</p>
          <p><br></p>
          <p>&nbsp; &nbsp; int a = 1;</p>
          <p>&nbsp; &nbsp; int cek = 1;</p>
          <p>&nbsp; &nbsp; for(int i = 0; i &lt; n; i++){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //printf(&quot;ini a: %d | ini larik[i]: %d | ini top: %d\n&quot;, a, larik[i],stack_top(&amp;myStack));</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; while(!stack_isEmpty(&amp;myStack) &amp;&amp; stack_top(&amp;myStack) == a){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //printf(&quot;masuk/n&quot;);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a++;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; stack_pop(&amp;myStack);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if(larik[i] == a){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a++;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; } else if(!stack_isEmpty(&amp;myStack) &amp;&amp; larik[i] &gt; stack_top(&amp;myStack)){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cek = 0;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; } else {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; stack_push(&amp;myStack,larik[i]);</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
          <p>&nbsp; &nbsp; }</p>
          <p><br></p>
          <p>&nbsp; &nbsp; if(cek == 1){</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;yes\n&quot;);</p>
          <p>&nbsp; &nbsp; } else {</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; printf(&quot;no\n&quot;);</p>
          <p>&nbsp; &nbsp; }</p>
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
          <p>&nbsp; &nbsp; &nbsp; &nbsp; newNode-&gt;data = value;</p>
          <p><br></p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; if (stack_isEmpty(stack)) newNode-&gt;next = NULL;</p>
          <p>&nbsp; &nbsp; &nbsp; &nbsp; else newNode-&gt;next = stack-&gt;_top;</p>
          <p><br></p>
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