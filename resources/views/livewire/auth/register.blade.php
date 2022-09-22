<div>
    <form action="" method="" wire:submit.prevent='register'>
        <div>
            <label for="email">Email</label>
            <input wire:model='email' type="email" id="email" name="email">
        </div>
    
        <div>
            <label for="password">Password</label>
            <input wire:model='password' type="password" id="password" name="password">
        </div>
    
        <div>
            <label for="passwordco">Password Confirmatiom</label>
            <input wire:model='passwordco' type="password" id="passwordco" name="passwordco">
        </div>
    
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
</div>
