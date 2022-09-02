<h1>Upload file</h1>
@if(session("message"))
    <p>{{ session("message") }}</p>
@endif
<form action="upload" method="POST" enctype='multipart/form-data'>
    @csrf
    <input type="file" name="file" />
    <br/><br/>
    <button type="submit">Upload file</button>
</form>