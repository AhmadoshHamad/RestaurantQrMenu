<form  method="POST" action="/users/store">
    @csrf
    <div class="inputDiv">
        <label for="email">Email</label>
        <input name="email" type="email" required >
    </div>
    @error('email')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    <div class="inputDiv">
        <label for="name">Username</label>
        <input name ="name" type="text" required >
    </div>   
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror  
        <div class="inputDiv">
            <label for="password">Password</label>
            <input name ="password" type="password" required >
        </div>   
    @error('password')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror    
        <button type="submit">Submit</button> 
</form>