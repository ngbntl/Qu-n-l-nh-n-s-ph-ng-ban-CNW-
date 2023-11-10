<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form class="form" action="XuLyDangNhap.php" method="post" target="_parent">
            <p class="heading">Login</p>
            <input class="input" placeholder="Username" type="text" name="username">
            <input class="input" placeholder="Password" type="text" name="password">
            <button class="btn" name="submit">Submit</button>
        </form>
    </div>

</body>
<style>
.container {
    display: flex;
    justify-content: center;
}

.form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    background-color: white;
    padding: 2.5em;
    border-radius: 25px;
    transition: .4s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.4) 1px 2px 2px;
}



.heading {
    color: black;
    padding-bottom: 2em;
    text-align: center;
    font-weight: bold;
}

.input {
    border-radius: 5px;
    border: 1px solid whitesmoke;
    background-color: whitesmoke;
    outline: none;
    padding: 0.7em;
    transition: .4s ease-in-out;
}

.input:hover {
    box-shadow: 6px 6px 0px #969696,
        -3px -3px 10px #ffffff;
}

.input:focus {
    background: #ffffff;
    box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.3);
}

.form .btn {
    margin-top: 2em;
    align-self: center;
    padding: 0.7em;
    padding-left: 1em;
    padding-right: 1em;
    border-radius: 10px;
    border: none;
    color: black;
    transition: .4s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 1px;
}

.form .btn:hover {
    box-shadow: 6px 6px 0px #969696,
        -3px -3px 10px #ffffff;
    transform: translateX(-0.5em) translateY(-0.5em);
}

.form .btn:active {
    transition: .2s;
    transform: translateX(0em) translateY(0em);
    box-shadow: none;
}
</style>

</html>