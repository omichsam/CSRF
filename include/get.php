<!-- <div class="container">
    <div class="row justify-content-center align-items-center g-2">

        <div class="col-md-6 align-self-center m-5 p-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top" height="300px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <h6 class="card-subtitle my-2 text-muted "><small>Welcome Again</h6>

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        <! -- <small id="emailHelpId" class="form-text text-muted">Input email</small> -- >
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        <!-- <small id="emailHelpId" class="form-text text-muted">Input email</small> - ->
                    </div>
                    <div class="form-group">
                        <label for="">Amount</label>
                        <input type="number" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        <!-- <small id="emailHelpId" class="form-text text-muted">Input email</small> - ->
                    </div>
                    <div class="d-grid gap-2 mx-5 mt-5">
                        <button type="submit" name="submit" id="" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> -->

<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <header>
        <h1>Fund Transfer</h1>
    </header>
    <div>
        <label for="amount">Amount (between $1-$5000):</label>
        <input type="number" name="amount" value="<?= $inputs['amount'] ?? '' ?>" id="amount" placeholder="Enter the transfered amount">
        <small><?= $errors['amount'] ?? '' ?></small>
    </div>

    <div>
        <label for="recipient_account">Recipient Account:</label>
        <input type="number" name="recipient_account" value="<?= $inputs['recipient_account'] ?? '' ?>" id="recipient_account" placeholder="Enter the recipient account">
        <small><?= $errors['recipient_account'] ?? '' ?></small>
    </div>

    <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
    <button type="submit">Transfer Now</button>
</form>