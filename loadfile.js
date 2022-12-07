function loadFile() {
    var filePath = document.getElementById('nama_file').value;
    var allowedExtensions = /(\.pdf|\.jpg|\.doc|\.docx|\.ppt|\.pptx|\.txt)$/i;
               
    if (!allowedExtensions.exec(filePath)) { 
       alert('Hanya jenis file PDF, JPG, MS. Word, PowerPoint dan text yang diperbolehkan!'); 
       filePath = document.getElementById('nama_file').value = '';
       return false; }  
    else {
       document.getElementById('display_file').innerHTML = document.getElementById('nama_file').files[0].name;
       return true; }
 }