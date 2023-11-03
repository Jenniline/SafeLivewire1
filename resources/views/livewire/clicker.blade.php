<div>
    <form wire:submit="createNewUser" action="">
        <input wire:model="first_name" type="text" placeholder="First Name">
        <input wire:model="last_name" type="text" placeholder="Last Name">

        <input wire:model="password" type="text" placeholder="Password">

        <input wire:model="phonenumber" type="number" placeholder="number">
        <input wire:model="email" type="email" placeholder="Email">

    <button wire:click.prevent="createNewUser">
        Create
    </button>
  </form>

  <hr>

  @foreach($users as $user)
        <h3> {{$user->first_name}} </h3>
  @endforeach

</div>