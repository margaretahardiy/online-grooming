<form method ="POST" action="/profile">
  <h1>Edit Profile</h1>
  <div class="sc-container">
    <input type="text" name = "name" title="Name" placeholder="Name" value = "{{$user->name}}" />
    <input type="text" name = "email" title="Email Address" placeholder="Email Address" value = "{{$user->email}}" />
    <input type="text" size="50" name = "address" title="Address" placeholder="Address" value = "{{$user->address}}" />
    <input type="text" name = "mobile" title="Mobile Phone Number" placeholder="Mobile Phone Number" value = "{{ $user->mobile_number}}" />
    <input type="text" name = "home" title="Home Number" placeholder="Home Number" value = "{{ $user->home_number}}" />
    <input type="text" name = "work" title="Work Number" placeholder="Work Number" value = "{{ $user->work_number}}" />
    <button type="submit">Save</button>
  </div>
</form>