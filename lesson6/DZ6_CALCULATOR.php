<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>

</head>
<style>
    .flex-input {
        display: flex;
        flex-direction: column;
        width: 20%;
        margin-bottom: 0.3%;
    }
    .flex-buttons {
        display: flex;
        justify-content: space-around;
        width: 20%;
        margin-bottom: 1%;
    }
    .first,
    .second {
        border: 2px solid grey;
        margin-top: 2%;
    }
    .operation:first-child {
        width: 20%;
        text-align: center;
    }
    .operation {
        margin-top: 2%;
        width: 80%;
        margin-bottom: 1%;
    }
    input:invalid {
        border-color: red;
    }
    input:valid {
        border-color: forestgreen;
    }
    .btn {
        background-color: lightgray;
        border-color: gray;
        color: black;
        width: 100%;
    }
    .flex-result {
        display: flex;
    }
</style>
<body>
<div id="app">
    <form class="flex-input" method="get">
        <input type="text" class="form-control first" name="first" placeholder="Введите первое число" pattern="\d+"
               title="ЧИСЛО">
        <input type="text" class="form-control second" name="second" placeholder="Введите второе число" pattern="\d+"
               title="ЧИСЛО">
        <div class="flex-result">
            <input class="operation form-control" type="text" name="operAction" VALUE="+" readonly>
            <input class="operation resultHTML form-control" type="text" VALUE="" readonly>
        </div>
        <button class="btn btn-primary result" type="submit">Расчитать</button>
    </form>
        <div class="flex-buttons">
            <button class="btn btn-primary add">+</button>
            <button class="btn btn-primary diff">-</button>
            <button class="btn btn-primary multiply">*</button>
            <button class="btn btn-primary division">/</button>
        </div>
</div>
<?php
$firstNumber = $_GET['first'];
$secondNumber = $_GET['second'];
$operAction = $_GET['operAction'];
?>
<script>
    let firstNumber = +"<?php echo $firstNumber?>";
    let secondNumber = +"<?php echo $secondNumber?>";
    let operAction = "<?php echo $operAction?>";
    let operate;
    operate = document.querySelector('.add').onclick = () =>
    {document.querySelector('.operation').value = "+";return operate = "+"};
    operate = document.querySelector('.diff').onclick = () =>
    {document.querySelector('.operation').value = "-";return operate = "-"};
    operate = document.querySelector('.multiply').onclick = () =>
    {document.querySelector('.operation').value = "*";return operate = "*"};
    operate = document.querySelector('.division').onclick = () =>
    {document.querySelector('.operation').value = "/";return operate = "/"};


    document.querySelector('.result').onclick = operationResult(firstNumber, operAction, secondNumber);


    function operationResult(firstNumber, operAction, secondNumber) {
        let result = eval(`${firstNumber} ${operAction} ${secondNumber}`);
        document.querySelector('.resultHTML').placeholder = `${firstNumber} ${operAction} ${secondNumber} = ${result}`;
        if (result === Infinity) {
            document.querySelector('.resultHTML').placeholder = "На ноль делить нельзя";
        }
        return result;

    }

</script>
</body>
</html>