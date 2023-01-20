<h3>Upload File</h3>

<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" > <br><br>
    <button type="submt">Upload</button>
</form>