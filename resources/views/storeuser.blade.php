<h1>User login</h1>
@if(session('username'))
<h3>Data saved for {{ session('username') }}</h3>
@endif
<form action="saveData" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user id" value="{{old('username')}}" />
    <br/><br/>
    <input type="password" name="password" id="password" placeholder="Enter password" />
    <br/><br/>
    <input type="email" name="email" placeholder="Enter email" />
    <br/><br/>
    <button type="submit">Submit</button>
</form>