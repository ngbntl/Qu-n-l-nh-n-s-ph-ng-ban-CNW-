<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <form class="container" action="xuLyTimKiem.php" method="POST">
        <div class="radio-button-container">
            <div class="radio-button">
                <input type="radio" class="radio-button__input" id="radio1" name="search" value="idnv"
                    onclick="toggleInput(true)">
                <label class="radio-button__label" for="radio1">
                    <span class="radio-button__custom"></span>
                    IDNV
                </label>
            </div>
            <div class="radio-button">
                <input type="radio" class="radio-button__input" id="radio2" name="search" value="hoTen"
                    onclick="toggleInput(true)">
                <label class="radio-button__label" for="radio2">
                    <span class="radio-button__custom"></span>
                    Họ tên
                </label>
            </div>
            <div class="radio-button">
                <input type="radio" class="radio-button__input" id="radio3" name="search" value="diaChi"
                    onclick="toggleInput(true)">
                <label class="radio-button__label" for="radio3">
                    <span class="radio-button__custom"></span>
                    Địa chỉ
                </label>
            </div>
        </div>
        <!-- search -->
        <div class="group">
            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                <g>
                    <path
                        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                    </path>
                </g>
            </svg>
            <input placeholder="Search" id="input_field" type="search" class="input" name="value" value="" disabled>
        </div>

    </form>


</body>
<script>
function toggleInput(enableInput) {

    document.getElementById("input_field").disabled = !enableInput;

}
</script>
<style>
.container {
    position: absolute;
    left: 40%;
}

.group {
    display: flex;
    line-height: 28px;
    align-items: center;
    position: relative;
    max-width: 190px;
    margin-left: 45px;
}

.input {
    width: 100%;
    height: 40px;
    line-height: 28px;
    padding: 0 1rem;
    padding-left: 2.5rem;
    border: 2px solid transparent;
    border-radius: 8px;
    outline: none;
    background-color: #f3f3f4;
    color: #0d0c22;
    transition: .3s ease;
}

.input::placeholder {
    color: #9e9ea7;
}

.input:focus,
input:hover {
    outline: none;
    border-color: rgba(234, 76, 137, 0.4);
    background-color: #fff;
    box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
}

.icon {
    position: absolute;
    left: 1rem;
    fill: #9e9ea7;
    width: 1rem;
    height: 1rem;
}







.radio-button-container {
    display: flex;
    align-items: center;
    gap: 24px;
    margin-bottom: 10px;
}

.radio-button {
    display: inline-block;
    position: relative;
    cursor: pointer;
}

.radio-button__input {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
}

.radio-button__label {
    display: inline-block;
    padding-left: 30px;
    margin-bottom: 10px;
    position: relative;
    font-size: 15px;
    color: black;
    font-weight: 600;
    cursor: pointer;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.radio-button__custom {
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 2px solid #555;
    transition: all 0.3s ease;
}

.radio-button__input:checked+.radio-button__label .radio-button__custom {
    background-color: #4c8bf5;
    border-color: transparent;
    transform: scale(0.8);
    box-shadow: 0 0 20px #4c8bf580;
}

.radio-button__input:checked+.radio-button__label {
    color: rgba(234, 76, 137, 0.4);
}

.radio-button__label:hover .radio-button__custom {
    transform: scale(1.2);
    border-color: #4c8bf5;
    box-shadow: 0 0 20px #4c8bf580;
}
</style>

</html>