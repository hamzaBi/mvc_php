
<h3>Create New account</h3>
<form action="" method="post">

    <div class="row" >
        <div class="col"><div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" name="firstname" class="form-control" id="firstname">
            </div></div>
        <div class="col">
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" name="lastname" class="form-control" id="lastname">
            </div></div>

    </div>



    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>


    <div class="row" >
        <div class="col" >
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
        </div>
        <div class="col" >
            <div class="mb-3">
                <label for="confirmpass" class="form-label">confirm Password</label>
                <input type="password" class="form-control" id="confirmpass" name="confirmpass">
            </div>
        </div>
    </div>




    <br/>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>