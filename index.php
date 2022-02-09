<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Own CSS Styles -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Form example</title>
</head>
<body>
    <main>
        <section class="main-form">
            <div class="container">
                <div>
                    <h1>Form insert with PHP</h1>
                </div>
                <div>
                    <form action="insert.php" method="post">
                        <div class="mb-3">
                            <label for="name_1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name_1" name="name_1">
                          </div>
                        <div class="mb-3">
                          <label for="email_1" class="form-label">Email address</label>
                          <input type="text" class="form-control" id="email_1" aria-describedby="emailHelp" name="email_1">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="password_1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password_1" name="password_1">
                        </div>
                        <div class="mb-3">
                            <label for="mobilePhone_1" class="form-label">Mobile phone</label>
                            <input type="tel" class="form-control" id="mobilePhone_1" name="mobilePhone_1">
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
