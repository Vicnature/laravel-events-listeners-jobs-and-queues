<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation</title>
    <link rel="stylesheet" href="validation.css">
    <script defer src="validation.js"></script>
</head>
<body>
    <div class="container">
        <form id="form" action="/submitted" method="post">
            @csrf
            <h1>REGISTRATION</h1>
            <div class="input-control">
                <label for="username">username</label>
                <input type="text" name="name" id="username">
                <div class="error"></div>
            </div>

                <div class="input-control">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email">
                    <div class="error"></div>
                </div>

                       
                        <div class="input-control">
                            <button type="submit">submit</button>
                        </div>
            </div>
        </form>
    </div>
</body>
</html>