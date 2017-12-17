<?php

class Upload{

    private $_upload_max_filesize = 1024*10*1024;
    private $_files_directories = "../img/avatar/";
    public function __construct($directories = null, $size = null)
    {
        if ($size!=null)
            $this->_upload_max_filesize = $size;
        if ($directories!=null)
            $this->_files_directories = $directories;


    }

    public function upload_files(){
        if($_FILES["filename"]["size"] >$this->_upload_max_filesize)
        {
            echo  $this->error_window("Размер файла превышает $this->_upload_max_filesize байтов");
        }
        // Проверяем загружен ли файл
        if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
        {
            // Если файл загружен успешно, перемещаем его
            // из временной директории в конечную
            move_uploaded_file($_FILES["filename"]["tmp_name"], $this->_files_directories.$_FILES["filename"]["name"]);
        } else {
            echo  $this->error_window("Файл не был загружен");
        }

    }

    private function error_window($error){
        return "<style>
/* The Modal (background) */
.modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
            position: relative;
            background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
            from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
            from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
            color: white;
            float: right;
            font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
            color: #000;
            text-decoration: none;
    cursor: pointer;
}

.modal-header {
            padding: 2px 16px;
    background-color: red;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
            padding: 2px 16px;
    background-color: red;
    color: white;
}
</style>
<body>
<!-- The Modal -->
<div id=\"myModal\" class=\"modal\">

  <!-- Modal content -->
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <span class=\"close\">&times;</span>
      <h2>Ошибка</h2>
    </div>
    <div class=\"modal-body\">
      <p>$error</p>
    </div>
    <div class=\"modal-footer\">
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById(\"myBtn\");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName(\"close\")[0];
//Создание модального окна
    modal.style.display = \"block\";


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = \"none\";
    path=window.location+'';
    window.location.href = path.replace('/authorization.php', '');
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = \"none\";
        path=window.location+'';
        window.location.href = path.replace('/authorization.php', '');
    }
}
</script>

</body>
</html>

    ";
    }

}