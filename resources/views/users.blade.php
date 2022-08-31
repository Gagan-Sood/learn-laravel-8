<h1>User login</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user id" />
    <br/><br/>
    <input type="password" name="password" id="password" placeholder="Enter password" />
    <br/><br/>
    <button type="submit">Login</button>
</form>