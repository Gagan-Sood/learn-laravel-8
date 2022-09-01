<h1>User login</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user id" value="{{old('username')}}" />
    <span style="color:red">@error('username'){{ $message }}@enderror</span>
    <br/><br/>
    <input type="password" name="password" id="password" placeholder="Enter password" />
    <span style="color:red">@error('password'){{ $message }}@enderror</span>
    <br/><br/>
    <button type="submit">Login</button>
</form>