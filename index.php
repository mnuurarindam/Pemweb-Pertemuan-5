<form id="form_mahasiswa">
<label for="Prodi">
Prodi
</label>
<select name="Prodi" id="Prodi">
    <option value="All"> Pilihan Program Studi </option>
    <option value="IF"> Teknik Informatika </option>
    <option value="EL"> Teknik Elektro </option>
    <option value="SI"> Teknik Sipil </option>
</select>
</form>
<br>
<div id="view_data"><table border="1">
<tr>
<th> No. </th>
<th> NIM </th>
<th> Nama </th>
<th> Program Studi </th>
</tr></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>
<script>
$(document).ready(function(){
    $("#Prodi").change(function(){
        var value=$(this).val();
    $.ajax({
        url:"view.php",
        type:"POST",
        data:"request=" + value,
        success:function(data){
            $("#view_data").html(data);
        }
    }) 
});
});
</script>