<?php require "com/page.php" ?>
<div class="container-fluid" style="padding: 0px;">
    <div class="nav-bar">
        <h2>Документы</h2>
            <ul id="list_docs">
            <?php
            $path='./Docs';
            $files = scandir($path);      
            mb_internal_encoding("UTF-8");
            foreach($files as $file)
            {
                if(!is_dir($path . $file))
                {

                    $info=pathinfo($file);
                    echo "<li>"."<input  class='cb_bs' onclick='checkFluency(this)' value='0'  type='checkbox' >".iconv('windows-1251', 'utf-8',$info[filename])."</li>";
                }
            }
            ?>       
        </ul>
        <script type="text/javascript">     
            function checkFluency()
            {
                if(this.value=="1")
                {
                    var dw = document.getElementById("docsWrapper");
                    var doc_iframe = document.createElement("iframe");
                    doc_iframe.width="100%";
                    doc_iframe.height="1000px";
                    alert($path);
                    doc_iframe.src=<?php $path ?> + this.textContent;                  
                    dw.appendChild(doc_iframe);
                    this.value="0";
                } else
                {
                    this.value="1";
                }
            }
        </script>
    </div>
    <div class="docsWrapper" id="docsWrapper">
    </div>
</div>
